<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsImageController extends Controller
{

    //only signed admin


    public function store(Request $request)
    {
        $file = $request->file("image");


        $fileExtenson = $file->extension();


        // return $fileOriginalName;


        $path = $request->file('image')->storePublicly("news/images");
        return $path;
    }
}
