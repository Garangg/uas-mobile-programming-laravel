<?php

namespace App\Http\Controllers;

use App\Models\laboratorium;
use Illuminate\Http\Request;

class LaboratoriumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laboratoriums = laboratorium::all();
        return response()->json($laboratoriums);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'length' => 'required',
            'width' => 'required',
            'description' => 'required',
            'capacity' => 'required',
            'floor_location' => 'required',
            
        ]);
        laboratorium::create($request->all());
        return response()->json('Laboratorium created!', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(laboratorium $laboratorium)
    {
        return response()->json($laboratorium);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, laboratorium $laboratorium)
    {
        $request->validate([
            'name' => 'required',
            'length' => 'required',
            'width' => 'required',
            'description' => 'required',
            'capacity' => 'required',
            'floor_location' => 'required',

        ]);
        $laboratorium->update($request->all());
        return response()->json('Laboratorium updated!', 200);}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $laboratorium = laboratorium::find($id);
        $laboratorium->delete();
        return response()->json('Laboratorium deleted');
    }
}
