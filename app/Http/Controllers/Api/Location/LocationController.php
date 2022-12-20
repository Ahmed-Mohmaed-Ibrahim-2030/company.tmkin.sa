<?php

namespace App\Http\Controllers\Api\Location;

use App\Models\Region;
use App\Models\City;
use App\Http\Controllers\Controller;
use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LocationController extends Controller
{
public function getRegions()
{
//code...
  return response()->json([
    'type'=>'regions',
    'regions'=>Region::all()
  ]);
// dd( Region::find(1));
// return mb_detect_encoding( Region::find(1), 'UTF-8', 'UTF-8');

}
public function getCitiesByRegion($region_id)
{
  // code...
 return response()->json([
    'type'=>'cities',
    'cities'=>Region::find($region_id)->cities
  ]);
}

public function getDistrictByCity($city_id)
{
  // code...
 return response()->json([
    'type'=>'districts',
    'districts'=>City::find($city_id)->districts
  ]);
}
}
