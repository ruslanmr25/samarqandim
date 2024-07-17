<?php

namespace App\Http\Controllers;

use App\Http\Filter\MenuFilter;
use App\Http\Resources\MenuResource;
use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Http\Resources\MenuCollection;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * //all can show it
     */
    public function index(MenuFilter $filter)
    {
        return new MenuCollection(Menu::filter($filter)->get());
    }


    /**
     * Store a newly created resource in storage.
     *
     * Only spaadmin
     */
    public function store(StoreMenuRequest $request)
    {
        Menu::create($request->all());

        return $this->success();
    }

    /**
     * Display the specified resource.
     *  Temporarly none
     */
    public function show($menu, MenuFilter $filter)
    {
        $menu = Menu::FindByLang($menu, $filter,'path');
        return new MenuResource($menu->load("children"));
    }


    /**
     *
     * only spadmin
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->update($request->all());

        return $this->success();
    }

    /**
     * Remove the specified resource from storage.
     * only spadmin
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return $this->success();
    }
}
