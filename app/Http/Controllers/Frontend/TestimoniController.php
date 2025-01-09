<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function testimoni(){
     
        $testimonis = Testimoni::all();
        return view('frontend.testimoni', compact('testimonis'));

    }

}
