<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilPimpinan;
use Illuminate\Http\Request;

class ProfilPimpinanController extends Controller
{
    public function index()
    {
        $pimpinan = ProfilPimpinan::orderBy('urutan')->get();
        $profilpimpinan = ProfilPimpinan::all(); // Added to fix undefined variable
        return view('admin.admin-profilpimpinan', compact('pimpinan', 'profilpimpinan'));
    }

    public function create()
    {
        return view('admin.create-profilpimpinan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gelar_depan' => 'nullable|string|max:50',
            'gelar_belakang' => 'nullable|string|max:50',
            'jabatan' => 'required|string|max:100',
            'pesan' => 'nullable|string',
            'foto' => 'nullable|image|max:2048',
        ]);
        $data = $request->only(['nama', 'gelar_depan', 'gelar_belakang', 'jabatan', 'pesan']);
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('profilpimpinan', 'public');
            $data['foto'] = $fotoPath; // simpan path relatif, tanpa 'storage/'
        }
        $profil = ProfilPimpinan::create($data);

        if ($request->ajax()) {
            return response()->json([
                'message' => 'Profil pimpinan ditambahkan.',
                'gambar' => $profil->foto ? asset('storage/' . $profil->foto) : null,
            ]);
        }

        return redirect()->route('admin.profilpimpinan.index')->with('success', 'Profil pimpinan ditambahkan.');
    }

    public function edit($id)
    {
        $pimpinan = ProfilPimpinan::findOrFail($id);
        return view('admin.edit-profilpimpinan', compact('pimpinan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'gelar_depan' => 'nullable|string|max:50',
            'gelar_belakang' => 'nullable|string|max:50',
            'jabatan' => 'required|string|max:100',
            'pesan' => 'nullable|string',
            'foto' => 'nullable|image|max:2048',
        ]);
        $pimpinan = ProfilPimpinan::findOrFail($id);
        $data = $request->only(['nama', 'gelar_depan', 'gelar_belakang', 'jabatan', 'pesan']);
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('profilpimpinan', 'public');
            $data['foto'] = $fotoPath; // simpan path relatif, tanpa 'storage/'
        }
        $pimpinan->update($data);

        if ($request->ajax()) {
            return response()->json([
                'message' => 'Profil pimpinan diupdate.',
                'gambar' => $pimpinan->foto ? asset('storage/' . $pimpinan->foto) : null,
            ]);
        }

        return redirect()->route('admin.profilpimpinan.index')->with('success', 'Profil pimpinan diupdate.');
    }

    public function destroy($id)
    {
        ProfilPimpinan::destroy($id);
        return redirect()->route('admin.profilpimpinan.index')->with('success', 'Profil pimpinan dihapus.');
    }
}
