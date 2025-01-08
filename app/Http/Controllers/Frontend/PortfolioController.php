<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio(){
     
        $portfolios = Portfolio::all();
        return view('frontend.portfolio_details', compact('portfolios'));
    }
}
