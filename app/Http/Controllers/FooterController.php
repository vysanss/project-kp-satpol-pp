<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function show()
    {
        $footer = Footer::first();
        return view('components.footer', compact('footer'));
    }
}
