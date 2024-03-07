<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\UserProducts;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function addPost(Request $request)
    {
        $images = $request->file('upload');
        $images_arr = [];
        foreach ($images as $image) {
            $image->store('user_products', 'public');
            array_push($images_arr, $image->hashName());
        }
        // convert the array into string to adjust in the single row
        $converted_arr = implode(',', $images_arr);

        // validate the form
        $formFields = $request->validate([
            "title" => '',
            "description" => '',
            "category" => '',
            "price" => '',
            "image" => '',
            "location" => '',
            "username" => '',
            "user_id" => ''
        ]);
        $formFields['image'] = $converted_arr;

        $formFields['user_id'] = auth()->user()->id;
        UserProducts::create($formFields);
        return back()->with('message', 'Ad posted successfully!');


    }


    public function getSingleProduct($id)
    {
        $singleProduct = UserProducts::find($id);
        $singleProduct->image = explode(',', $singleProduct->image);

        return view('pages.users.single-user-product', compact('singleProduct'));
    }


    public function getCategory()
    {
        $category = Categories::all();
        return view('pages.users.sell', compact('category'));
    }
    public function getProducts($category)
    {
        $products = UserProducts::where('category', $category)->get();
        foreach ($products as $prod) {
            $prod->image = explode(',', $prod->image);
        }

        return view('pages.users.category', compact('products'));
    }





}
