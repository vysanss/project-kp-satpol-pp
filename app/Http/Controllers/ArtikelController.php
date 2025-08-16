<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('artikel');

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('excerpt', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('year')) {
            $query->whereYear('published_at', $request->year);
        }

        $articles = $query->orderBy('published_at', 'desc')->paginate(9);

        return view('artikel', compact('articles'));
    }
}
