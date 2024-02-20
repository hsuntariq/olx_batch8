<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function addPost(Request $request)
    {
        $images = $request->file('upload');
        if ($images !== null) {

            foreach ($images as $image) {
                echo $image;
            }
        } else {
            echo "null";
        }

    }
}
