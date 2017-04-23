<?php

namespace App\Http\Controllers;

use App\Location;
use App\Mapping;
use Illuminate\Http\Request;
use League\Geotools\Coordinate\Coordinate;
use League\Geotools\Geotools;
use Symfony\Component\HttpKernel\Config\FileLocator;
use Validator;

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

    public function createDistances($id, Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'location_2' => 'required',
            ]);
            if ($validator->fails()) {
                $data['validate'] = $validator;
            } else {
                $dco1 = Location::find($id);
                $dco2 = Location::find($request->get('location_2'));
                $geotools = new Geotools();
                $coordA = new Coordinate([$dco1->lat, $dco1->long]);
                $coordB = new Coordinate([$dco2->lat, $dco2->long]);
                $distance = $geotools->distance()->setFrom($coordA)->setTo($coordB);

                $map = new Mapping();
                $map->location_1 = $id;
                $map->location_2 = $request->get('location_2');
                $map->distances = $distance->flat();
                $map->save();
                if ($request->has('twoway')) {
                    $map2 = new Mapping();
                    $map2->location_2 = $id;
                    $map2->location_1 = $request->get('location_2');
                    $map2->distances = $distance->flat();
                    $map2->save();
                }
                return redirect('/table');
            }
        }
        $data['location_1'] = Location::find($id);
        $data['locations'] = Location::where('id', '<>', $id)->get();
        return view('createdistances', $data);
    }

    public function shows(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'lat' => 'required',
                'long' => 'required'
            ]);
            if ($validator->fails()) {
                $data['fail'] = 'fail';
            } else {
                $location = new Location();
                $location->lat = $request->get('lat');
                $location->long = $request->get('long');
                $location->label = $request->get('label');
                $location->note = $request->get('note');
                $location->save();
            }
        }
        $data['locations'] = json_encode(Location::with('vetexes')->get());
        return view('home', $data);

    }

    public function tableLocation()
    {
        $data['locations'] = Location::with('vetexes')->get();
        return view('table', $data);
    }

    public function delLocation($id)
    {
        Mapping::where('location_1', $id)->orWhere('location_2', $id)->delete();
        Location::destroy([$id]);
        return redirect('/table');
    }

    public function delDistance($id)
    {
        echo Mapping::destroy($id);
        return redirect('/table');
    }
    //
}
