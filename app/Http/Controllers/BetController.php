<?php

namespace App\Http\Controllers;

use App\Http\Resources\BetResource;
use App\Models\Bet;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BetController extends Controller
{
    /**
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return BetResource::collection(Bet::all());
    }


}
