<?php

namespace App\Http\Controllers;

use App\Models\SOrganisasi;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $items = SOrganisasi::orderBy('id')->get();
        return view('strukturorganisasi', compact('items'));
    }
}
