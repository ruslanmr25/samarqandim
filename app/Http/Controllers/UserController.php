<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


/**
 * @group User
 *
 */
class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware("role:superAdmin");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  new UserCollection(User::with("roles")->get());
    }

    /**
     * @name Create User
     */
    public function store(StoreUserRequest $request)
    {

        User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ])->roles()->sync($request->roles);





        return $this->success();
    }

    /**
     * @name Get User
     */
    public function show(User $user)
    {
        return $this->resource(
            new UserResource($user->load('roles'))
        );
    }

    /**
     *
     * @name Update User
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->permissions()->sync($request->permissions);

        return $this->success();
    }

    /**
     *@name Delete User
     * Only super admin delete user.
     */
    public function destroy(User $user)
    {

        $user->delete();

        return  $this->success();
    }
}