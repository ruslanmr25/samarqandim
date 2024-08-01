<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected string  $successMessage = "The operation was done successfully!";

    protected string  $errorMessage = "The operation was done unsuccessfully!";



    public function success($data = [], $message = null, $statusCode = 200)
    {

        return response()->json([
            "success" => true,
            "message" => $message ?? $this->successMessage,
            "data" => $data
        ], $statusCode);
    }

    public function resource($data, $message = null, $statusCode = 200)
    {

        return response()->json([
            "success" => true,
            "message" => $message ?? $this->successMessage,
            "result" => $data


        ], $statusCode);
    }

    public function error($error = null, $statusCode = 401)
    {

        return response()->json([
            "success" => false,
            "error" => $error ?? $this->errorMessage
        ], $statusCode);
    }




}
