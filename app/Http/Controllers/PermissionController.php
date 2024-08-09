<?php

namespace App\Http\Controllers;

use App\Http\Resources\PermissionResource;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function __construct()
    {

        //add permission:permission
        $this->middleware(['auth:sanctum', 'permission:user']);
    }
    /**
     * @group Permissions
     * Get Permissions
     */
    public function index()
    {
        $permissions = Permission::all();

        return $this->resource(PermissionResource::collection($permissions));
    }
}
