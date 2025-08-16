<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $query = Berita::query();

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('content', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('year')) {
            $query->whereYear('published_at', $request->year);
        }

        $beritas = $query->orderBy('published_at', 'desc')->paginate(9);

        return view('berita', compact('beritas'));
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita-show', compact('berita'));
    }

    public function detail(Request $request)
    {
        $request->validate([
            'berita_id' => 'required|exists:berita,id'
        ]);
        
        $berita = Berita::findOrFail($request->berita_id);
        
        return view('berita-detail', compact('berita'));
    }
}
