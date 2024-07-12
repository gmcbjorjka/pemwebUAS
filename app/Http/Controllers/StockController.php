<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Alternatif;

class StockController extends Controller
{
    //
    public function index()
    {
        $stocks = Alternatif::all();
        return view('stock.stocklist', compact('stocks'));
    }

    // Show the form for creating a new stock
    public function create()
    {
        return view('stock.add_stock');
    }

    // Store a newly created stock in the database
    public function store(Request $request)
    {
        $request->validate([
            'id_stock' => 'required|string|max:255',
            'name_stock' => 'required|string|max:255',
            'roi' => 'required|numeric',
            'rasio_keuangan' => 'nullable|numeric',
            'dpr' => 'required|numeric',
            'deviden' => 'required|numeric',
            'valuasi' => 'required|numeric',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        Alternatif::create([
            'id_alternatif' => $request->id_stock,
            'nama_saham' => $request->name_stock,
            'c1' => $request->roi,
            'c2' => $request->rasio_keuangan,
            'c3' => $request->dpr,
            'c4' => $request->deviden,
            'c5' => $request->valuasi,
            'logo' => $logoPath,
        ]);

        return redirect()->route('stocks.index')->with('success', 'Stock added successfully.');
    }



    public function edit($id)
    {
        $stock = Alternatif::findOrFail($id);
        return view('stock.update_stock', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_stock' => 'required|string|max:255',
            'name_stock' => 'required|string|max:255',
            'roi' => 'required|numeric',
            'rasio_keuangan' => 'nullable|numeric',
            'dpr' => 'required|numeric',
            'deviden' => 'required|numeric',
            'valuasi' => 'required|numeric',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $stock = Alternatif::findOrFail($id);
        $stock->id_alternatif = $request->id_stock;
        $stock->nama_saham = $request->name_stock;
        $stock->c1 = $request->roi;
        $stock->c2 = $request->rasio_keuangan;
        $stock->c3 = $request->dpr;
        $stock->c4 = $request->deviden;
        $stock->c5 = $request->valuasi;

        if ($request->hasFile('logo')) {
            $logoName = $request->file('logo')->store('logos', 'public');
            $stock->logo = $logoName;
        }

        $stock->save();

        return redirect()->route('stocks.index')->with('success', 'Stock updated successfully.');
    }

    public function destroy($id)
    {
        $stock = Alternatif::findOrFail($id);
        $stock->delete();

        return redirect()->route('stocks.index')->with('success', 'Stock deleted successfully.');
    }
}
