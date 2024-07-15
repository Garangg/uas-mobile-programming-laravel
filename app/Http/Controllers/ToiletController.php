<?php

namespace App\Http\Controllers;

use App\Models\toilet;
use Illuminate\Http\Request;

class ToiletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toilets = toilet::all();
        return response()->json($toilets);
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
            'floor_location' => 'required',
        ]);
        toilet::create($request->all());
        return response()->json('Toilet created!', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(toilet $toilet)
    {
        return response()->json($toilet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, toilet $toilet)
    {
        $request->validate([
            'name' => 'required',
            'length' => 'required',
            'width' => 'required',
            'description' => 'required',
            'floor_location' => 'required',
        ]);
        $toilet->update($request->all());
        return response()->json('Toilet updated!', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(toilet $toilet)
    {
        $toilet->delete();
        return response()->json('Toilet deleted!', 200);
    }
}
