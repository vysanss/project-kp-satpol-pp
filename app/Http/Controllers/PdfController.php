<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function produkHukum(Request $request)
    {
        $query = Pdf::query();
        
        // Search functionality
        if ($request->filled('search')) {
            $query->where('nama_file', 'like', '%' . $request->search . '%');
        }
        
        // Year filter
        if ($request->filled('year')) {
            $query->whereYear('created_at', $request->year);
        }
        
        // Paginate results
        $pdfs = $query->orderBy('created_at', 'desc')->paginate(10);
        
        return view('produk-hukum', compact('pdfs'));
    }

    public function dokumenEvaluasi(Request $request)
    {
        $query = Pdf::query();
        
        // Search functionality
        if ($request->filled('search')) {
            $query->where('nama_file', 'like', '%' . $request->search . '%');
        }
        
        // Year filter
        if ($request->filled('year')) {
            $query->whereYear('created_at', $request->year);
        }
        
        // Filter for evaluation documents (you can add a category column or filter by name pattern)
        // For now, we'll show all PDFs - you can modify this based on your needs
        
        // Paginate results
        $documents = $query->orderBy('created_at', 'desc')->paginate(10);
        
        return view('dokumen-evaluasi', compact('documents'));
    }

    public function dokumenPerencanaan(Request $request)
    {
        $query = Pdf::query();
        
        // Search functionality
        if ($request->filled('search')) {
            $query->where('nama_file', 'like', '%' . $request->search . '%');
        }
        
        // Year filter
        if ($request->filled('year')) {
            $query->whereYear('created_at', $request->year);
        }
        
        // Filter for planning documents (you can add a category column or filter by name pattern)
        // For now, we'll show all PDFs - you can modify this based on your needs
        
        // Paginate results
        $documents = $query->orderBy('created_at', 'desc')->paginate(10);
        
        return view('dokumen-perencanaan', compact('documents'));
    }

    public function download($id)
    {
        try {
            $pdf = Pdf::findOrFail($id);
            
            // Try multiple path formats to ensure compatibility
            $possiblePaths = [
                public_path($pdf->path),
                public_path('storage/' . $pdf->path),
                storage_path('app/public/' . $pdf->path),
                $pdf->path
            ];
            
            $filePath = null;
            foreach ($possiblePaths as $path) {
                if (file_exists($path)) {
                    $filePath = $path;
                    break;
                }
            }
            
            if ($filePath && file_exists($filePath)) {
                // Get the original filename or use nama_file field
                $downloadName = $pdf->nama_file ?? basename($filePath);
                
                // Make sure the filename has .pdf extension
                if (!str_ends_with(strtolower($downloadName), '.pdf')) {
                    $downloadName .= '.pdf';
                }
                
                return response()->download($filePath, $downloadName, [
                    'Content-Type' => 'application/pdf',
                ]);
            }
            
            return redirect()->back()->with('error', 'File tidak ditemukan! Path: ' . $pdf->path);
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengunduh file: ' . $e->getMessage());
        }
    }
}
