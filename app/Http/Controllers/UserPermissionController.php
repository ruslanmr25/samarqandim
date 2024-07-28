<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPermissionController extends Controller
{
    public function getPermissions()
    {
        $user = Auth::user();

        return $this->resource(['permissions' => $user->permissions->pluck('permission')]);
    }
}
