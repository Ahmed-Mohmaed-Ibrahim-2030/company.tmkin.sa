<?php

namespace App\Http\Controllers\Api\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\SubService;

class getServicesController extends Controller
{
    //
    public function getServices()
    {
      // code...
      return response()->json([
        'type'=>'services',
        'services'=>Service::all()
      ]);
    }
    public function getSubServicesByService_id($service_id)
    {
      return response()->json([
         'type'=>'subservices',
         'subservices'=>Service::find($service_id)->sub_services
       ]);

    }
}
