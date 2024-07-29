<?php

namespace App\Http\Controllers;

use App\Http\Filter\MenuFilter;
use App\Http\Resources\MenuResource;
use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Http\Resources\MenuCollection;

/**
 * @group Menu
 */
class MenuController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth:sanctum', 'permission:menu'])->only(['store', 'update', 'destroy']);
    }
    /**
     * Get all menu that level 3
     * @queryParam lang string No-example
     * @queryParam level int No-example
     * @queryParam withChildren bool
     *
     */
    public function index(MenuFilter $filter)
    {


        return new MenuCollection(Menu::filter($filter)->get());
    }


    /**
     * Store Menu
     *
     * Only spaadmin
     */
    public function store(StoreMenuRequest $request)
    {
        Menu::create($request->all());

        return $this->success();
    }

    /**
     *  Get menu by path
     *  @urlParam id int required The ID of the post
     */
    public function show($menu, MenuFilter $filter)
    {
        $menu = Menu::FindByLang($menu, $filter, 'path');

        return $this->resource(new MenuResource($menu->load("children")));
    }


    /**
     * Update Menu
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->update($request->all());

        return $this->success();
    }

    /**
     * Delete menu
     *
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return $this->success();
    }
}
