<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WpController extends Controller
{
    //
    public function index()
    {
        $userId = Auth::id();
        $stocks = DB::table('v_wp_preferens')
            ->where('user_id', $userId)
            ->get();

        return view('dss.wp.preferensi', compact('stocks'));
    }

    public function hasil()
    {
        $userId = Auth::id();
        $stocks = DB::table('v_wp_hasil')
            ->where('user_id', $userId)
            ->get();

        return view('dss.wp.wphasil', compact('stocks'));
    }
}
