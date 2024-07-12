<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bobot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WeightController extends Controller
{
    //
    public function create()
    {
        $user_id = Auth::id();
        $weight = Bobot::where('user_id', $user_id)->first();

        if ($weight) {
            return redirect()->route('weights.normalization');
        }

        return view('dss.weight');
    }

    // Store the weights in the database
    public function store(Request $request)
    {
        $request->validate([
            'w1' => 'required|numeric',
            'w2' => 'required|numeric',
            'w3' => 'required|numeric',
            'w4' => 'required|numeric',
            'w5' => 'required|numeric',
        ]);

        Bobot::create([
            'w1' => $request->w1,
            'w2' => $request->w2,
            'w3' => $request->w3,
            'w4' => $request->w4,
            'w5' => $request->w5,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('weights.normalization');
    }

    // Show the normalization page
    public function normalization()
    {
        $userId = Auth::id();
        $weights = DB::table('v_bobot')->where('user_id', $userId)->get();
        return view('dss.wp.weight_normalisasi', compact('weights'));
    }
}
