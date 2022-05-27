<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurvivorRequest;
use App\Http\Resources\SurvivorResource;
use App\Models\Survivor;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\DB;
use Throwable;

class SurvivorController extends Controller
{

    /**
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return SurvivorResource::collection(Survivor::with('belongings.item')->paginate(20));
    }

    /**
     * @param SurvivorRequest $request
     * @return SurvivorResource
     * @throws Throwable
     */
    public function store(SurvivorRequest $request): SurvivorResource
    {
        try {
            DB::beginTransaction();

            $survivor = Survivor::create($request->validated());

            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();

            throw $e;
        }

        return new SurvivorResource($survivor);
    }

}
