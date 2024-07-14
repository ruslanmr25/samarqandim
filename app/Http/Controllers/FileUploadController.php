<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{

    public array  $types = [
        "news",
        "slide"
    ];

    //only signed admin


    public function store(FileUploadRequest $request, $type)
    {


        if (!in_array($type, $this->types)) {

            return $this->error("Illegal offset type. '{$type}' is not supported");
        }

        $file = $request->file("file");


        // $fileExtenson = $file->extension();

        $path = "/storage/" . $file->store("/{$type}", "public");


        return $path;
    }
}
