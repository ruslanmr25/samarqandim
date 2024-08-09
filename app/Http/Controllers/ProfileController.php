<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }


    public function update(UpdateProfileRequest $request)
    {

        $user = Auth::user();

        $user->update($request->all());

        return $this->success();
    }



    public function profile()
    {
        $user = Auth::user();
        return $this->resource(new UserResource($user->load('permissions')));
    }
}
