<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CompanyInfoController extends Controller
{

    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function profile() {
        $profile = Auth::user();
        return view('backend.profile', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = Auth::user()->id;
        $user = User::find($profile);

        $request->validate([
            'username' => 'required',
            'password' => 'nullable|min:6',
            'name' => 'required',

        ]);

        $user->update([
            'username' => $request->username,
            'password' => $request->filled('password') ? Hash::make($request->password) : $user->password,
            'name' => $request->name,
        ]);

        return redirect()->route('profile')->with('success', 'Data Anda Berhasil di Update');

    }



    /**
     * Display a listing of the resource.
     */
    public function companyinfo()
    {
        $companyinfos = CompanyInfo::all();
        return view('backend.companyinfo', compact('companyinfos'));
    }

    public function create()
    {
        $companyInfo = CompanyInfo::first();
        if ($companyInfo) {
            return redirect()->back();
        }else{
            return view('backend.companyinfo_tambah');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'slogan' => 'required',
            'deskripsi' => 'required',
            'tahun_berdiri' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required|numeric|digits_between:1,12',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $logo = null;

        if ($request->hasFile('logo')) {
            $uniqueFile = uniqid() . '_' . $request->file('logo')->getClientOriginalName();

            $request->file('logo')->storeAs('logo_companyinfo', $uniqueFile, 'public');

            $logo = 'logo_companyinfo/' . $uniqueFile;
        }

        companyinfo::create([
            'company_name' => $request->company_name,
            'slogan' => $request->slogan,
            'deskripsi' => $request->deskripsi,
            'tahun_berdiri' => $request->tahun_berdiri,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'logo' => $logo,
        ]);

        return redirect()->route('companyinfo')->with('success', 'Perusahaan Berhasil di Tambah.');
    }

    public function edit(string $id_companyinfo)
    {
        $companyinfo = CompanyInfo::find($id_companyinfo);
        if (!$companyinfo) {
            return back();
        }
        return view('backend.companyinfo_edit', compact('companyinfo'));
    }

    public function updateCompany(Request $request, string $id_companyinfo)
    {

        $companyinfo = CompanyInfo::find($id_companyinfo);

        $request->validate([
            'company_name' => 'required',
            'slogan' => 'required',
            'deskripsi' => 'required',
            'tahun_berdiri' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required|numeric|digits_between:1,12',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $logo = $companyinfo->logo;

        if ($request->hasFile('logo')) {
            if ($logo)  {
                Storage::disk('public')->delete($logo);
            }
            $uniqueFile = uniqid() . '_' . $request->file('logo')->getClientOriginalName();

            $request->file('logo')->storeAs('logo_companyinfo', $uniqueFile, 'public');

            $logo = 'logo_companyinfo/' . $uniqueFile;
        }

        $companyinfo->update([
            'company_name' => $request->company_name,
            'slogan' => $request->slogan,
            'deskripsi' => $request->deskripsi,
            'tahun_berdiri' => $request->tahun_berdiri,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'logo' => $logo,
        ]);

        return redirect()->route('companyinfo')->with('success', 'Perusahaan Berhasil di Update.');
    }

    public function delete(Request $request, $id)
    {
        $companyinfo = CompanyInfo::find($id);

        if ($companyinfo->logo) {
            $logo = $companyinfo->logo;

            if (Storage::disk('public')->exists($logo)) {
                Storage::disk('public')->delete($logo);
            }
        }

        $companyinfo->delete();

        return redirect()->route('companyinfo')->with('success', 'Perusahaan Berhasil di Hapus.');
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Display the specified resource.
     */
    public function show(CompanyInfo $companyInfo)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyInfo $companyInfo)
    {
        //
    }
}
