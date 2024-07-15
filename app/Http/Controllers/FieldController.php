<?php

namespace App\Http\Controllers;

use App\Models\field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fields = field::all();
        return response()->json($fields);
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
            
        ]);
        field::create($request->all());
        return response()->json('Field created!', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(field $field)
    {
        return response()->json($field);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, field $field)
    {
        $request->validate([
            'name' => 'required',
            'length' => 'required',
            'width' => 'required',
            'description' => 'required',
        ]);
        $field->update($request->all());
        return response()->json('Field updated!', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $field = field::find($id);
        $field->delete();
        return response()->json([
            'message' => 'Field deleted successfully'
        ]);
    }
}
