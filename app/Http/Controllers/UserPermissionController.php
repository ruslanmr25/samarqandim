<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManagePermissionRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/**
 * @group Permissions
 */
class UserPermissionController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware('permission:user');
    }
    /**
     * Get User permissions
     * @return mixed|\Illuminate\Http\JsonResponse
     */


    /**
     *
     * @name Assign Permission to User
     * @param \App\Http\Requests\ManagePermissionRequest $request
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function assignPermssion(ManagePermissionRequest $request)
    {
        $targetuser = User::find($request->userId);

        $targetuser->permissions()->syncWithoutDetaching($request->permissions);

        return $this->success();
    }
    /**
     * @name Remove Permission from User
     * @param \App\Http\Requests\ManagePermissionRequest $request
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function removePermission(ManagePermissionRequest $request)
    {
        $targetuser = User::find($request->userId);
        $targetuser->permissions()->detach($request->permissions);

        return $this->success();
    }
}
