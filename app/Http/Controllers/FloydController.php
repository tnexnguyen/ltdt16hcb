<?php

namespace App\Http\Controllers;

use App\Location;
use App\Mapping;
use Illuminate\Http\Request;
use League\Geotools\Coordinate\Coordinate;
use League\Geotools\Geotools;
use Symfony\Component\HttpKernel\Config\FileLocator;
use Validator;

class FloydController extends Controller
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

    public function index()
    {
//17, 21, 12, 22, 13,14, 15,16,72,74
        $vertexs = Location::with('vetexes')->get()->sortBy('id');
//        $vertexs = Location::with('vetexes')->get()->sortBy('id');
        $matrix = collect($vertexs)->map(function ($val, $key) use ($vertexs) {
            $init = array_fill(0, $vertexs->count(), 0);

            foreach ($val->vetexes as $item) {
                foreach ($vertexs as $k => $v){
                    if($item->id == $v->id){
                        $init[$k] = $item->pivot->distances;
                        break;
                    }
                }

            }
            return $init;

        });

        $data['matrix'] = collect($matrix)->toJson();
        $data['vertexs'] = collect($vertexs)->map(function ($val, $key) {
            return $val;
        });
        return view('floyd', $data);
    }

}
