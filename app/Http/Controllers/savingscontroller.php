<?php

namespace App\Http\Controllers;

use App\Models\Savings;
use Illuminate\Http\Request;

class savingscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $savings = Savings::all();

        // Pass the savings to the view
        return view('savings.index', compact('savings'));;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('savings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $savings = new Savings();
        $savings->fill($request->all());
        $savings->save();

        return redirect('/savings');
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
