<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {
        $pdfs = \App\Models\Pdf::all();
        return view('admin.admin-produkhukum', compact('pdfs'));
    }

    public function upload(Request $request)
    {
        $validated = $request->validate([
            'pdf' => 'required|mimes:pdf|max:20480',
            'kategori' => 'required|string'
        ]);

        try {
            $file = $request->file('pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destination = public_path('pdfs');
            // Ensure the directory exists
            if (!file_exists($destination)) {
                mkdir($destination, 0777, true);
            }
            $file->move($destination, $filename);

            // Simpan ke database, path relatif ke public
            \App\Models\Pdf::create([
                'nama_file' => $file->getClientOriginalName(),
                'path' => 'pdfs/' . $filename,
                'kategori' => $request->kategori
            ]);

            return redirect()->route('admin-produkhukum')->with('success', 'PDF berhasil diupload!');
        } catch (\Exception $e) {
            return redirect()->route('admin-produkhukum')->with('error', 'PDF gagal diupload!');
        }
    }

    public function delete($id)
    {
        try {
            $pdf = Pdf::findOrFail($id);
            
            // Delete file from directory
            $filePath = public_path($pdf->path);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            
            // Delete record from database
            $pdf->delete();
            
            return redirect()->route('admin-produkhukum')->with('success', 'PDF berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('admin-produkhukum')->with('error', 'PDF gagal dihapus!');
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_file' => 'required|string|max:255',
            'kategori' => 'required|string'
        ]);

        try {
            $pdf = Pdf::findOrFail($id);
            $pdf->update([
                'nama_file' => $request->nama_file,
                'kategori' => $request->kategori
            ]);

            return redirect()->route('admin-produkhukum')->with('success', 'PDF berhasil diupdate!');
        } catch (\Exception $e) {
            return redirect()->route('admin-produkhukum')->with('error', 'PDF gagal diupdate!');
        }
    }
}
