<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

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


}
