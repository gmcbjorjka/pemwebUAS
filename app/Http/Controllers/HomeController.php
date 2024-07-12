<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;

class HomeController extends Controller
{
    //
    public function index()
    {
        $stocks = Alternatif::all();
        return view('dashboard.home', compact('stocks'));
    }
}
