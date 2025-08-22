<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MPelayanan;

class MPelayananController extends Controller
{
    public function index()
    {
        $pelayanan = MPelayanan::all();
        return view('maklumatpelayanan', compact('pelayanan'));
    }
}
