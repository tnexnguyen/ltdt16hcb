<?php

namespace App\Http\Controllers;

use App\Location;

class LocationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function shows()
    {
        $data['locations'] = json_encode(Location::get());

        return view('home', $data);

    }

    //
}
