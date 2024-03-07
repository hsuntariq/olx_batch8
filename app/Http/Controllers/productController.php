<?php

namespace App\Http\Controllers;

use App\Mail\deleteMail;
use App\Models\Categories;
use App\Models\Products;
use App\Models\UserProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class productController extends Controller
{
    public function addProduct(Request $request)
    {
        $formFields = $request->validate([
            "name" => 'required',
            "price" => ['required', 'integer'],
            "description" => 'required',
            "category" => 'required',
            "location" => 'required',
            "image" => 'required',
        ]);

        $formFields['image'] = $request->file('image')->store('product_images', 'public');

        Products::create($formFields);
        return back()->with('message', 'Product added successfully!');


    }

    public function getCategory()
    {
        $category = Categories::all();
        return view('pages.admin.add-products', compact('category'));
    }


    public function getSingleProduct($id, $category)
    {
        $data = Products::find($id);
        $related = Products::where('category', $category)->get();
        return view('pages.users.single-product', compact('data', 'related'));
    }

    public function getProducts()
    {
        $data = UserProducts::all();
        return view('pages.admin.manage-products', compact('data'));
    }


    public function updateDelete(Request $req, $id)
    {
        $check = $req->input('update-delete');
        $up_price = $req->input('up_price');
        $email = $req->input('email');
        if ($check == 'Update') {
            $findProduct = UserProducts::find($id);
            $findProduct->update([
                "price" => $up_price
            ]);
            return back()->with('message', 'Price Updated successfully!');
        } else {
            $findProduct = UserProducts::find($id);
            $findProduct->delete();
            Mail::to($email)->send(new deleteMail("test"));
            return back()->with('message', 'Product deleted successfully');
        }
        // echo $check;
    }


}
