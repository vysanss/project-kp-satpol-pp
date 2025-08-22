<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tupoksi;

class TupoksiController extends Controller
{
    public function index()
    {
        $tupoksi = Tupoksi::all();
        return view('tupoksi', compact('tupoksi'));
    }
}
