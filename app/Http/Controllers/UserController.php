<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
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
        $this->middleware('permission:user')->except('personalDetails');

        $this->middleware('checkDSA')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  new UserCollection(User::with('permissions')->get());
    }

    /**
     * @name Create User
     */
    public function store(StoreUserRequest $request)
    {

        $user = User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);
        $user->permissions()->sync($request->permissions);

        return $this->resource(new UserResource($user->load("permissions")));
    }

    /**
     * @name Get User
     */
    public function show(User $user)
    {
        return $this->resource(
            new UserResource($user->load('permissions'))
        );
    }

    /**
     * Hali chala ishlari bor
     * update request
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

    public function personalDetails()
    {
        $user = Auth::user();
        return $this->resource(new UserResource($user->load('permissions')));
    }
}
