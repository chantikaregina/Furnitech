<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){
     
        $services = Service::all();
        return view('frontend.service_details', compact('services'));

    }

   
}
