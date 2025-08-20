<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf; // Assuming you have a Pdf model
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProdukHukumController extends Controller
{
    public function index(Request $request)
    {
        $query = Pdf::query();
        
        // Handle search functionality
        if ($request->filled('search')) {
            $searchTerm = $request->get('search');
            $query->where('nama_file', 'like', '%' . $searchTerm . '%');
        }
        
        // Handle year filtering
        if ($request->filled('year')) {
            $year = $request->get('year');
            $query->whereYear('created_at', $year);
        }
        
        // Order by latest first and paginate
        $pdfs = $query->orderBy('created_at', 'desc')->paginate(10);
        
        return view('produk-hukum', compact('pdfs'));
    }
    
    public function download($id)
    {
        $pdf = Pdf::findOrFail($id);
        
        // Assuming the file path is stored in a 'file_path' column
        $filePath = $pdf->file_path;
        
        if (!Storage::exists($filePath)) {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }
        
        return Storage::download($filePath, $pdf->nama_file);
    }
}
