<?php

namespace App\Http\Controllers;

use App\Http\Resources\PlaceResource;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function all_places() {
        $places = Place::all();

        return response(PlaceResource::collection($places));
    }
}
