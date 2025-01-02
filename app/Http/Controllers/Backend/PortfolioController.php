<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        $portfolios = Portfolio::all();
        return view('backend.portfolio', compact('portfolios'));
    }

    public function create()
    {
        return view('backend.portfolio_tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required',
            'deskripsi' => 'required',
            'project_date' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $uniqueFile = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_portfolio', $uniqueFile, 'public');

            $foto = 'foto_portfolio/' . $uniqueFile;
        }

        Portfolio::create([
            'project_name' => $request->project_name,
            'deskripsi' => $request->deskripsi,
            'project_date' => $request->project_date,
            'foto' => $foto,
        ]);

        return redirect()->route('portfolio')->with('success', 'Portfolio Berhasil di Tambah');
    }

    public function edit(string $id)
    {
        $portfolio = Portfolio::find($id);
        if (!$portfolio) {
            return back();
        }
        return view('backend.portfolio_edit', compact('portfolio'));
    }

    public function update(Request $request, string $id)
    {

        $portfolio = Portfolio::find($id);

        $request->validate([
            'project_name' => 'required',
            'deskripsi' => 'required',
            'project_date' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $uniqueFile = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_portfolio', $uniqueFile, 'public');

            $foto = 'foto_portfolio/' . $uniqueFile;
        }

        $portfolio->update([
            'project_name' => $request->project_name,
            'deskripsi' => $request->deskripsi,
            'project_date' => $request->project_date,
            'foto' => $foto,
        ]);

        return redirect()->route('portfolio')->with('success', 'Portfolio Berhasil di Update');
    }

    public function delete(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);

        $portfolio->delete();

        return redirect()->route('portfolio')->with('success', 'Portfolio Berhasil di Hapus');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
