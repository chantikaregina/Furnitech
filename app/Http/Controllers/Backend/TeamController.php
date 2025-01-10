<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        $teams = Team::all();
        return view('backend.team', compact('teams'));
    }

    public function create()
    {
        return view('backend.team_tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jabatan' => 'required',
            'nama_team' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $uniqueFile = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_team', $uniqueFile, 'public');

            $foto = 'foto_team/' . $uniqueFile;
        }

        Team::create([
            'jabatan' => $request->jabatan,
            'nama_team' => $request->nama_team,
            'foto' => $foto,
        ]);

        return redirect()->route('team')->with('success', 'Team Berhasil di Tambah');
    }

    public function edit(string $id)
    {
        $team = Team::find($id);
        if (!$team) {
            return back();
        }
        return view('backend.team_edit', compact('team'));
    }


    public function update(Request $request, string $id)
    {

        $team = Team::find($id);

        $request->validate([
            'jabatan' => 'required',
            'nama_team' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $uniqueFile = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_team', $uniqueFile, 'public');

            $foto = 'foto_team/' . $uniqueFile;
        }

        $team->update([
            'jabatan' => $request->jabatan,
            'nama_team' => $request->nama_team,
            'foto' => $foto,
        ]);

        return redirect()->route('team')->with('success', 'Team Berhasil di Update');
    }

    public function delete(Request $request, $id)
    {
        $team = Team::find($id);

        $team->delete();

        return redirect()->route('team')->with('success', 'Team Berhasil di Hapus');
    }
}
