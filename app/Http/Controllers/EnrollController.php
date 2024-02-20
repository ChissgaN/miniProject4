<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enroll = Enroll::all();
        return response()->json($enroll);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'subject_id' => 'required',
        ]);

        $enroll = Enroll::create($request->all());
        return response()->json(['student' => $enroll,] );
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $enroll = Enroll::findOrFail($id);
        return response()->json($enroll);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enroll $enroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required',
            'subject_id' => 'required',

        ]);

        $enroll = Enroll::findOrFail($id);
        $enroll->update($request->all());
        return response()->json($enroll);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $enroll = Enroll::findOrFail($id);
        $enroll->delete();
        return response()->json($enroll);
    }
}
