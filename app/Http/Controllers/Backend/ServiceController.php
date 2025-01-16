<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function service()
    {
        $services = Service::all();
        return view('backend.service', compact('services'));
    }

    public function create()
    {
        return view('backend.service_tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'deskripsi' => 'required',
            'telepon' => 'required|numeric|digits_between:1,12',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $uniqueFile = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_service', $uniqueFile, 'public');

            $foto = 'foto_service/' . $uniqueFile;
        }

        Service::create([
            'service_name' => $request->service_name,
            'deskripsi' => $request->deskripsi,
            'telepon' => $request->telepon,
            'foto' => $foto,
        ]);

        return redirect()->route('service')->with('success', 'Service Berhasil di Tambah');
    }

    public function edit(string $id)
    {
        $service = Service::find($id);
        if (!$service) {
            return back();
        }
        return view('backend.service_edit', compact('service'));
    }

    public function update(Request $request, string $id)
    {

        $service = Service::find($id);

        $request->validate([
            'service_name' => 'required',
            'deskripsi' => 'required',
            'telepon' => 'required|numeric|digits_between:1,12',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto = $service->foto;

        if ($request->hasFile('foto')) {
            if ($foto)  {
                Storage::disk('public')->delete($foto);
            }
            $uniqueFile = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_service', $uniqueFile, 'public');

            $foto = 'foto_service/' . $uniqueFile;
        }

        $service->update([
            'service_name' => $request->service_name,
            'deskripsi' => $request->deskripsi,
            'telepon' => $request->telepon,
            'foto' => $foto,
        ]);

        return redirect()->route('service')->with('success', 'Service Berhasil di Update');
    }

    public function delete(Request $request, $id)
    {
        $service = Service::find($id);

        if ($service->foto) {
            $foto = $service->foto;

            if (Storage::disk('public')->exists($foto)) {
                Storage::disk('public')->delete($foto);
            }
        }

        $service->delete();

        return redirect()->route('service')->with('success', 'Service Berhasil di Hapus.');
    }


}
