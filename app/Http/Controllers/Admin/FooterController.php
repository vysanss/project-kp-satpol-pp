<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::orderBy('id', 'desc')->get();
        return view('admin.admin-footer', compact('footers'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'deskripsi' => 'required|string|max:1000',
            'layanan' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Gagal menyimpan data footer!');
        }

        try {
            Footer::create([
                'deskripsi' => $request->deskripsi,
                'layanan' => $request->layanan
            ]);

            return redirect()->route('admin-footer')
                ->with('success', 'Footer berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat menyimpan data!');
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'deskripsi' => 'required|string|max:1000',
            'layanan' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Gagal mengupdate data footer!');
        }

        try {
            $footer = Footer::findOrFail($id);
            $footer->update([
                'deskripsi' => $request->deskripsi,
                'layanan' => $request->layanan
            ]);

            return redirect()->route('admin-footer')
                ->with('success', 'Footer berhasil diupdate!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat mengupdate data!');
        }
    }

    public function destroy($id)
    {
        try {
            $footer = Footer::findOrFail($id);
            $footer->delete();

            return redirect()->route('admin-footer')
                ->with('success', 'Footer berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menghapus data!');
        }
    }
}
