<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Log;

class BeritaController extends Controller
{
    public function index()
    {
        try {
            $berita = Berita::orderBy('published_at', 'desc')->get();
        } catch (\Exception $e) {
            $berita = collect(); // Empty collection if query fails
        }
        
        return view('admin.admin-berita', compact('berita'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image',
            'published_at' => 'nullable|date',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('berita', 'public');
        }
        Berita::create($data);
        return redirect()->route('admin-berita')->with('success', 'Berita berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('berita', 'public');
        }
        $berita->update($data);
        return redirect()->route('admin-berita')->with('success', 'Berita berhasil diupdate');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('admin-berita')->with('success', 'Berita berhasil dihapus');
    }

    public function uploadImage(Request $request)
    {
        // Debug log
        Log::info('Upload request received', [
            'has_file' => $request->hasFile('upload'),
            'files' => $request->allFiles(),
            'all_input' => $request->all()
        ]);
        
        $uploadDir = storage_path('app/public/berita-ckeditor');
        // Pastikan folder ini ada
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        // Set permission folder agar semua diizinkan
        @chmod($uploadDir, 0777);

        if (!is_writable($uploadDir)) {
            Log::error('Upload directory not writable: ' . $uploadDir);
            return response()->json([
                'error' => [
                    'message' => 'Folder upload tidak memiliki permission tulis. Silakan cek permission folder storage/app/public/berita-ckeditor.'
                ]
            ], 500);
        }
        
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            Log::info('File details', [
                'original_name' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'mime_type' => $file->getMimeType(),
                'extension' => $file->getClientOriginalExtension()
            ]);
            
            // Normalisasi ekstensi ke lowercase
            $extension = strtolower($file->getClientOriginalExtension());
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
            $allowedMime = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            
            // Validasi tipe file gambar dan ukuran maksimal 2MB
            if (
                !in_array($extension, $allowedExtensions) ||
                !in_array($file->getMimeType(), $allowedMime)
            ) {
                Log::warning('Invalid file type', [
                    'extension' => $extension,
                    'mime_type' => $file->getMimeType()
                ]);
                return response()->json([
                    'error' => [
                        'message' => 'File harus berupa gambar (jpg, png, gif, webp)'
                    ]
                ], 400);
            }
            
            if ($file->getSize() > 2 * 1024 * 1024) {
                Log::warning('File too large', ['size' => $file->getSize()]);
                return response()->json([
                    'error' => [
                        'message' => 'Ukuran gambar maksimal 2MB'
                    ]
                ], 400);
            }
            
            try {
                // Normalisasi nama file agar tidak aneh
                $filename = uniqid() . '.' . $extension;
                $path = $file->storeAs('berita-ckeditor', $filename, 'public');
                $url = asset('storage/' . $path);
                
                Log::info('File uploaded successfully', [
                    'path' => $path,
                    'url' => $url
                ]);
                
                return response()->json([
                    'url' => $url
                ]);
            } catch (\Exception $e) {
                Log::error('Upload failed', ['error' => $e->getMessage()]);
                return response()->json([
                    'error' => [
                        'message' => 'Upload failed: ' . $e->getMessage()
                    ]
                ], 500);
            }
        }
        
        Log::warning('No file in upload request');
        return response()->json([
            'error' => [
                'message' => 'No file uploaded'
            ]
        ], 400);
    }
}
