<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio($id){

        $portfolio = Portfolio::find($id);
        return view('frontend.portfolio_details', compact('portfolio'));
    }
}
