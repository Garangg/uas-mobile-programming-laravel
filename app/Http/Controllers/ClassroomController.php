<?php

namespace App\Http\Controllers;

use App\Models\classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classrooms = classroom::all();
        return response()->json($classrooms);
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
            'user_room' => 'required',
        ]);
        classroom::create($request->all());
        return response()->json('Classroom created!', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(classroom $classroom)
    {
        return response()->json($classroom);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classroom $classroom)
    {
        $request->validate([
            'name' => 'required',
            'length' => 'required',
            'width' => 'required',
            'description' => 'required',
            'capacity' => 'required',
            'floor_location' => 'required',
            'user_room' => 'required',
        ]);
    
        $classroom->update($request->all());
    
        return response()->json('Classroom updated!', 200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(classroom $classroom)
    {
        $classroom->delete();
    }
}
