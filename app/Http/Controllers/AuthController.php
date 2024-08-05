<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    /**
     * Login
     * @group Auth
     * @param \App\Http\Requests\LoginRequest $request
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {


        if (!Auth::attempt(['username' => $request->username, 'password' => $request->password])) {

            return $this->error('Access denied', 403);
        }
        $user = Auth::user();



        return $this->success([
            'accessToken' => $user->createToken('AuthToken')->plainTextToken
        ]);
    }
    /**
     * Register
     * @group Auth
     * @param \App\Http\Requests\RegisterRequest $request
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->pasword)

        ]);
        $user->permissions()->sync($request->permissions);

        return $this->resource(new UserResource($user->load("permissions")));
    }
}
