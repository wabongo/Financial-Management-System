<?php

namespace App\Http\Controllers;

use App\Models\Assets;
use Illuminate\Http\Request;

class assetscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $assets = Assets::all();
        return view('assets.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        {
            $validatedData = $request->validate([
                'name' => 'required',
                'type' => 'required',
                'purchase_price' => 'required|integer',
                'current_value' => 'required|integer',
                'depreciation_rate' => 'required|numeric',
                'useful_life' => 'required|integer',
            ]);

            $assets = new Assets();
            $assets->name = $validatedData['name'];
            $assets->type = $validatedData['type'];
            $assets->purchase_price = $validatedData['purchase_price'];
            $assets->current_value = $validatedData['current_value'];
            $assets->depreciation_rate = $validatedData['depreciation_rate'];
            $assets->useful_life = $validatedData['useful_life'];
            $assets->save();

            return redirect('/assets');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
