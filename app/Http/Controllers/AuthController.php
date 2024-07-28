<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


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
}
