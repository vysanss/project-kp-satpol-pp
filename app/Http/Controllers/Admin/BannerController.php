<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.admin-banner', compact('banners'));
    }

    public function create()
    {
        return response()->json(['success' => true]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'sub_judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:1000',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'logo_alt' => 'nullable|string|max:255',
            'show_logo' => 'required|in:0,1',
            'show_navigation' => 'required|in:0,1',
            'show_stats' => 'required|in:0,1',
            'tahun_melayani' => 'required|string|max:255',
            'personil_aktif' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kelurahan' => 'required|string|max:255',
            'navigation_items' => 'nullable|array'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $request->only([
            'judul', 'sub_judul', 'deskripsi', 'logo_alt',
            'show_logo', 'show_navigation', 'show_stats',
            'tahun_melayani', 'personil_aktif', 'kecamatan', 'kelurahan',
            'navigation_items'
        ]);

        // Handle logo upload - always store default path in database
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = 'logo-' . time() . '.' . $file->getClientOriginalExtension();
            
            // Ensure the storage directory exists
            if (!Storage::exists('public/logos')) {
                Storage::makeDirectory('public/logos');
            }
            
            // Save the uploaded file but store default logo path in database
            $file->storeAs('public/logos', $filename);
            
            // Store additional field for uploaded logo filename (optional for future use)
            $data['uploaded_logo'] = $filename;
        }
        
        // Always use default logo path in the logo field
        $data['logo'] = 'img/logo-Pol-PP-png.webp';

        Banner::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Banner berhasil ditambahkan'
        ]);
    }

    public function show(Banner $banner)
    {
        return response()->json($banner);
    }

    public function edit(Banner $banner)
    {
        return response()->json($banner);
    }

    public function update(Request $request, Banner $banner)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'sub_judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:1000',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'logo_alt' => 'nullable|string|max:255',
            'show_logo' => 'required|in:0,1',
            'show_navigation' => 'required|in:0,1',
            'show_stats' => 'required|in:0,1',
            'tahun_melayani' => 'required|string|max:255',
            'personil_aktif' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kelurahan' => 'required|string|max:255',
            'navigation_items' => 'nullable|array'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $request->only([
            'judul', 'sub_judul', 'deskripsi', 'logo_alt',
            'show_logo', 'show_navigation', 'show_stats',
            'tahun_melayani', 'personil_aktif', 'kecamatan', 'kelurahan',
            'navigation_items'
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Delete old uploaded logo file if it exists
            if (isset($banner->uploaded_logo) && $banner->uploaded_logo && Storage::exists('public/logos/' . $banner->uploaded_logo)) {
                Storage::delete('public/logos/' . $banner->uploaded_logo);
            }

            $file = $request->file('logo');
            $filename = 'logo-' . time() . '.' . $file->getClientOriginalExtension();
            
            // Ensure the storage directory exists
            if (!Storage::exists('public/logos')) {
                Storage::makeDirectory('public/logos');
            }
            
            // Save the uploaded file but store default logo path in database
            $file->storeAs('public/logos', $filename);
            
            // Store additional field for uploaded logo filename
            $data['uploaded_logo'] = $filename;
        }
        
        // Always keep default logo path in the logo field
        $data['logo'] = 'img/logo-Pol-PP-png.webp';

        $banner->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Banner berhasil diperbarui'
        ]);
    }

    public function destroy(Banner $banner)
    {
        try {
            // Delete uploaded logo file if it exists
            if (isset($banner->uploaded_logo) && $banner->uploaded_logo && Storage::exists('public/logos/' . $banner->uploaded_logo)) {
                Storage::delete('public/logos/' . $banner->uploaded_logo);
            }

            $banner->delete();

            return response()->json([
                'success' => true,
                'message' => 'Banner berhasil dihapus'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus banner'
            ], 500);
        }
    }
}

