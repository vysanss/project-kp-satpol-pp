<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf;
use Illuminate\Support\Facades\Response;

class PdfController extends Controller
{
    // Upload PDF
    public function upload(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:2048',
            'kategori' => 'required|in:produk_hukum,dokumen_evaluasi,dokumen_perencanaan',
        ]);

        $file = $request->file('pdf');
        $namaFile = time() . '_' . $file->getClientOriginalName();

        // Simpan file ke public/pdfs/kategori
        $file->move(public_path('pdfs/' . $request->kategori), $namaFile);

        // Simpan info ke database
        Pdf::create([
            'nama_file' => $namaFile,
            'path' => 'pdfs/' . $request->kategori . '/' . $namaFile,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('pdf.list', $request->kategori);
    }

    // List PDF per kategori
    public function list($kategori)
    {
        $pdfs = Pdf::where('kategori', $kategori)->get();
        return view('pdf-list', compact('pdfs', 'kategori'));
    }

    // Download PDF
    public function download($id)
    {
        $pdf = Pdf::findOrFail($id);
        $path = public_path($pdf->path);

        if (!file_exists($path)) {
            abort(404, 'PDF tidak ditemukan');
        }

        return Response::download($path, $pdf->nama_file);
    }
}

