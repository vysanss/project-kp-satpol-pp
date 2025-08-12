<?php

namespace App\Http\Controllers;

use App\Models\ProfilPimpinan;
use Illuminate\Http\Request;

class ProfilPimpinanController extends Controller
{
    public function index()
    {
        $pimpinan = ProfilPimpinan::where('is_active', true)
            ->orderBy('urutan')
            ->get();

        return view('profilpimpinan', compact('pimpinan'));
    }
}
