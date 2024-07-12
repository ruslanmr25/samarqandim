<?php

namespace App\Http\Controllers;

use App\Http\Filter\PageFilter;
use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Http\Resources\PageResource;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * Temporarly none
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($page, PageFilter $filter)
    {
        return  new PageResource(Page::FindByLang($page, $filter, 'menu_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
