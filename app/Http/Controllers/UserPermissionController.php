<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManagePermissionRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPermissionController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware('permission:user')->except('getPermissions');
    }
    public function getPermissions()
    {
        $user = Auth::user();

        return $this->resource(['permissions' => $user->permissions->pluck('permission')]);
    }

    /**
     * You must check target user is not spadmin
     * @param \App\Http\Requests\ManagePermissionRequest     $request
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function assignPermssion(ManagePermissionRequest $request)
    {
        $targetuser = User::find($request->userId);

        $targetuser->permissions()->syncWithoutDetaching($request->permissions);

        return $this->success();
    }

    public function removePermission(ManagePermissionRequest $request)
    {
        $targetuser = User::find($request->userId);
        $targetuser->permissions()->detach($request->permissions);

        return $this->success();
    }
}
