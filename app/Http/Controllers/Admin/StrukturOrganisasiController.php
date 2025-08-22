<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SOrganisasi;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $items = SOrganisasi::orderBy('id')->get();
        return view('admin.admin-strukturorganisasi', compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        $data = [
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('s_organisasi', 'public');
        }

        SOrganisasi::create($data);
        return redirect()->route('admin.strukturorganisasi.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
        ]);
        $item = SOrganisasi::findOrFail($id);

        $data = [
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('s_organisasi', 'public');
        }

        $item->update($data);
        return redirect()->route('admin.strukturorganisasi.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $item = SOrganisasi::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.strukturorganisasi.index');
    }
}
