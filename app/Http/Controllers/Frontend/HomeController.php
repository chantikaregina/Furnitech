<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $services = Service::all();
        $portfolios = Portfolio::all();
        $teams = Team::all();
        return view('frontend.home', compact('services', 'portfolios', 'teams'));
    }
}
