<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\ProfilPimpinan;
use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::active()->first();
        $profilpimpinan = ProfilPimpinan::all();
        $beritaTerbaru = Berita::all();

        return view('home', compact('banner', 'profilpimpinan', 'beritaTerbaru'));
    }
}
