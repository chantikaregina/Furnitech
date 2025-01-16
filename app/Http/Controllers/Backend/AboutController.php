<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function about()
    {
        $abouts = About::all();
        return view('backend.about', compact('abouts'));
    }

    public function create()
    {
        $about = About::first();
        if ($about) {
            return redirect()->back();
        }else{
            return view('backend.about_tambah');
        }
    }


    public function store(Request $request)
    {
        $request->validate([
            'background' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'foto1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto1 = null;

        if ($request->hasFile('foto1')) {
            $uniqueFile = uniqid() . '_' . $request->file('foto1')->getClientOriginalName();

            $request->file('foto1')->storeAs('foto1_about', $uniqueFile, 'public');

            $foto1 = 'foto1_about/' . $uniqueFile;
        }

        $foto2 = null;

        if ($request->hasFile('foto2')) {
            $uniqueFile = uniqid() . '_' . $request->file('foto2')->getClientOriginalName();

            $request->file('foto2')->storeAs('foto2_about', $uniqueFile, 'public');

            $foto2 = 'foto2_about/' . $uniqueFile;
        }

        About::create([
            'background' => $request->background,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'foto1' => $foto1,
            'foto2' => $foto2,
        ]);

        return redirect()->route('about')->with('success', 'Info Berhasil di Tambah');
    }


    public function edit(string $id)
    {
        $about = About::find($id);
        if (!$about) {
            return back();
        }
        return view('backend.about_edit', compact('about'));
    }


    public function update(Request $request, string $id)
    {
        $about = About::find($id);

        $request->validate([
            'background' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'foto1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto1 = $about->foto1;

        if ($request->hasFile('foto1')) {
            if ($foto1)  {
                Storage::disk('public')->delete($foto1);
            }
            $uniqueFile = uniqid() . '_' . $request->file('foto1')->getClientOriginalName();

            $request->file('foto1')->storeAs('foto1_about', $uniqueFile, 'public');

            $foto1 = 'foto1_about/' . $uniqueFile;
        }

        $foto2 = $about->foto2;

        if ($request->hasFile('foto2')) {
            if ($foto2)  {
                Storage::disk('public')->delete($foto2);
            }
            $uniqueFile = uniqid() . '_' . $request->file('foto2')->getClientOriginalName();

            $request->file('foto2')->storeAs('foto2_about', $uniqueFile, 'public');

            $foto2 = 'foto2_about/' . $uniqueFile;
        }

        $about->update([
            'background' => $request->background,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'foto1' => $foto1,
            'foto2' => $foto2,
        ]);

        return redirect()->route('about')->with('success', 'Info Berhasil di Update');
    }

    public function delete(Request $request, $id)
    {
        $about = About::find($id);

        if ($about->foto1) {
            $foto1 = $about->foto1;

            if (Storage::disk('public')->exists($foto1)) {
                Storage::disk('public')->delete($foto1);
            }
        }

        if ($about->foto2) {
            $foto2 = $about->foto2;

            if (Storage::disk('public')->exists($foto2)) {
                Storage::disk('public')->delete($foto2);
            }
        }

        $about->delete();

        return redirect()->route('about')->with('success', 'Info Berhasil di Hapus.');
    }
}
