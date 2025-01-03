<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

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
            'company_name' => 'required',
            'deskripsi' => 'required',
            'telepon' => 'required',
        ]);

        Service::create([
            'company_name' => $request->company_name,
            'deskripsi' => $request->deskripsi,
            'telepon' => $request->telepon,
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
            'company_name' => 'required',
            'deskripsi' => 'required',
            'telepon' => 'required',
        ]);

        $service->update([
            'company_name' => $request->company_name,
            'deskripsi' => $request->deskripsi,
            'telepon' => $request->telepon,
        ]);

        return redirect()->route('service')->with('success', 'Service Berhasil di Update');
    }

    public function delete(Request $request, $id)
    {
        $service = Service::find($id);

        $service->delete();

        return redirect()->route('service')->with('success', 'Service Berhasil di Hapus');
    }


}
