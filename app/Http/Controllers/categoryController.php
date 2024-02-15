<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function addCategory(Request $req)
    {
        $formFields = $req->validate([
            "name" => ['required', 'min:3'],
            "color" => 'required',
            "image" => ['required', 'mimes:jpg,png,jpeg,webp']
        ]);

        $formFields['image'] = $req->file('image')->store('category_images', 'public');

        Categories::create($formFields);

        return back()->with('message', 'Category added successfully!');

    }


    public function getCategories()
    {
        $categories = Categories::paginate(9);
        $products = Products::all();
        return view('pages.users.welcome', compact('categories', 'products'));
    }

}
