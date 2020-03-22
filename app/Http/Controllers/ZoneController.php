<?php

namespace App\Http\Controllers;

use App\Http\Controllers\cities\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function city(Request $request) {
        $zone = new Zone();
        $city = $zone->get_list_city();
        return response()->json($city);
    }
}
