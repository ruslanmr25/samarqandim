<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;
use Illuminate\Http\Request;


/**
 * @group Upload File
 */
class FileUploadController extends Controller
{


    public function __construct()
    {
        // $this->middleware(['auth:sanctum', 'permission:file.upload'])->only(['store']);
    }

    public array  $types = [
        "news",
        "slide"
    ];


    /**
     * Summary of store
     *
     * @urlParam type in ["news", "slide"]. No-example
     *
     */
    public function store(FileUploadRequest $request, $type)
    {


        if (!in_array($type, $this->types)) {

            return $this->error("Illegal offset type. '{$type}' is not supported");
        }

        $file = $request->file("file");


        // $fileExtenson = $file->extension();

        $path = "/storage/" . $file->store("/{$type}", "public");


        return $this->success([
            'path' => $path
        ]);
    }
}
