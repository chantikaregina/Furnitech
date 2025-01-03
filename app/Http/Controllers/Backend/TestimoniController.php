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

    public function edit(string $id)
    {
        $testimoni = Testimoni::find($id);
        if (!$testimoni) {
            return back();
        }
        return view('backend.testimoni_edit', compact('testimoni'));
    }

    public function update(Request $request, string $id)
    {

        $testimoni = Testimoni::find($id);

        $request->validate([
            'nama_pelanggan' => 'required',
            'testimoni' => 'required',
            'rating' => 'required',
        ]);

        $testimoni->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'testimoni' => $request->testimoni,
            'rating' => $request->rating,
        ]);

        return redirect()->route('testimoni')->with('success', 'Testimoni Berhasil di Update');
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
