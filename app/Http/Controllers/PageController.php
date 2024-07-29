<?php

namespace App\Http\Controllers;

use App\Http\Filter\PageFilter;
use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Http\Resources\PageResource;


/**
 * @group Page
 */
class PageController extends Controller
{


    /**
     * Store  page
     */
    public function store(StorePageRequest $request)
    {

        // return $request->all();
        Page::create($request->all());
        return $this->success();
    }

    /**
     * Get Page
     *
     */
    public function show($menu, PageFilter $filter)
    {
        
        return $this->success(
            new PageResource(Page::FindByLang($menu, $filter, 'menu_id'))
        );
    }

    /**
     * Update Page
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        //
    }

    /**
     * Delete Page
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return $this->success();
    }
}
