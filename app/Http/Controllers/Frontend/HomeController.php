<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimoni;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $services = Service::all();
        $portfolios = Portfolio::all();
        $testimonis = Testimoni::all();
        $teams = Team::all();
        return view('frontend.home', compact('services', 'portfolios', 'testimonis', 'teams'));
    }

    public function testimoni(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'review' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',  
        ]);

        $komentar = new Testimoni();
        $komentar->name = $request->input('name');
        $komentar->email = $request->input('email');
        $komentar->review = $request->input('review');
        $komentar->rating = $request->input('rating');
        $komentar->save();

        return redirect()->back()->with('success', 'Komentar dan rating berhasil dikirim!');
    } 
}
