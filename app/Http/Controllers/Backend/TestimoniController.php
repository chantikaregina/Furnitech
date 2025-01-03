<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function testimoni()
    {
        $testimonis = Testimoni::all();
        return view('backend.testimoni', compact('testimonis'));
    }

    public function delete(Request $request, $id)
    {
        $testimoni = Testimoni::find($id);

        $testimoni->delete();

        return redirect()->route('testimoni')->with('success', 'Testimoni Berhasil di Hapus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        //
    }
}
