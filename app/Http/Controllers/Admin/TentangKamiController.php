<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        $tentangkami = TentangKami::all();
        return view('admin.admin-profilpimpinan', compact('tentangkami'));
    }

    public function create()
    {
        return view('admin.create-tentangkami');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        TentangKami::create($request->all());
        return redirect()->route('admin.tentangkami.index')->with('success', 'Data Tentang Kami ditambahkan.');
    }

    public function edit($id)
    {
        $tentangkami = TentangKami::findOrFail($id);
        return view('admin.edit-tentangkami', compact('tentangkami'));
    }

    public function update(Request $request, $id)
    {
        $tentangkami = TentangKami::findOrFail($id);
        $tentangkami->update($request->all());
        return redirect()->route('admin.tentangkami.index')->with('success', 'Data Tentang Kami diupdate.');
    }

    public function destroy($id)
    {
        TentangKami::destroy($id);
        return redirect()->route('admin.tentangkami.index')->with('success', 'Data Tentang Kami dihapus.');
    }
}
