<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateExpeditionRequest;
use App\Http\Requests\StoreExpeditionRequest;

use Illuminate\Support\Facades\Storage;

use App\Http\Resources\ExpeditionCollection;
use App\Http\Resources\ExpeditionResource;
use App\Http\Filter\ExpeditionFilter;
use App\Models\Expedition;

/**
 * @group Expedition
 *
 *
 *
 */
class ExpeditionController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth:sanctum')->only(['store', 'update', 'destroy']);
        // $this->middleware('CheckExpeditionCategoryAccess')->only(['store', 'update', 'destroy']);
    }

    /**
     *Get all Expedition
     *
     * @queryParam perPage int . No-example
     * @queryParam lang string , in [uz,en,ru,kr]. No-example
     */
    public function index(ExpeditionFilter $ExpeditionFilter)
    {

        return new ExpeditionCollection(
            Expedition::filter($ExpeditionFilter, ['body', 'status'])
                ->latest()

                ->paginate($ExpeditionFilter->perPage)
        );
    }


    /**
     * Store Expedition
     *
     * only signed admin
     */
    public function store(StoreExpeditionRequest $request)
    {


        Expedition::create($request->all());


        return $this->success();
    }

    /**
     * Get Expedition
     *
     * @queryParam lang string uz. No-example
     *
     *
     */
    public function show($Expedition, ExpeditionFilter $filter)
    {
        $Expedition = Expedition::FindByLang($Expedition, $filter);


        return
            $this->resource(
                new ExpeditionResource($Expedition)
            );
    }

    /**
     *
     * Update Expedition
     *
     */
    public function update(UpdateExpeditionRequest $request, Expedition $Expedition)
    {


        $Expedition->update($request->all());



        return $this->success();
    }

    /**
     *  Delete Expedition
     *
     *
     */
    public function destroy(Expedition $Expedition)
    {


        $Expedition->delete();
        return $this->success();
    }
}
