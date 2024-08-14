<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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

            Log::channel('login')->warning("Kirishga o'rinish. Username : {$request->username}. ");
            return $this->error('Access denied', 403);
        }


        $user = Auth::user();

        Log::channel('login')->info("Hisobga muvaffaqiyatli kirildi. Username : {$request->username}. ");
        Log::channel('custom')->info("Hisobga muvaffaqiyatli kirildi. Username : {$request->username}. ");

        return $this->success([
            'accessToken' => $user->createToken('AuthToken')->plainTextToken
        ]);
    }
}
