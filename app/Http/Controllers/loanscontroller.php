<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loans;

class loanscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // Retrieve all loans from the database
        $loans = Loans::all();

        // Pass the loans to the view
        return view('loans.index', compact('loans'));;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('loans.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Create a new Loans instance and fill it with the request data
        $loans = new Loans();
        $loans->fill($request->all());
        $loans->save();

        return redirect('/loans');
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
