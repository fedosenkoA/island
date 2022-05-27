<?php

namespace App\Http\Controllers;

use App\Http\Requests\LotRequest;
use App\Http\Resources\LotResource;
use App\Models\Lot;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LotController extends Controller
{
    /**
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return LotResource::collection(Lot::all());
    }

    public function store(LotRequest $request)
    {
        

        $lot = Lot::create($request->validated());

        return new LotResource($lot);
    }
}
