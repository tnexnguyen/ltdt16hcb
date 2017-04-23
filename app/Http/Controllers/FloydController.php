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

        $vertexs = Location::with('vetexes')->whereIn('id', [17, 21, 12, 22, 13, 15])->get()->sortBy('id');
        $matrix = collect($vertexs)->map(function ($val, $key) use ($vertexs) {
            $init = array_fill(0, $vertexs->count(), 0);
            foreach ($val->vetexes as $item) {
                $index = $vertexs->search(function ($v, $k) use ($item) {
                    return $item->id == $v->id;
                });
                if ($index) {
                    $init[$index] = $item->pivot->distances;
                }

            }
            return $init;

        });
        $data['matrix'] = collect($matrix)->toJson();
        $data['vertexs'] = collect($vertexs)->map(function ($val, $key) {
            return collect($val)->only(['id', 'lat', 'long', 'label', 'note']);
        });
        return view('floyd', $data);
    }

}
