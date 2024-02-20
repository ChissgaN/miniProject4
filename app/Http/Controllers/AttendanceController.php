<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendance = Attendance::all();
        return response()->json($attendance);
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
            'enroll_id' => 'required',
            'date' => 'required|date',
            'attendance' => 'required|in:A,T,F',
        ]);

        // Crea un nuevo registro de asistencia
        $asistencia = Attendance::create([
            'enroll_id' => $request->enroll_id,
            'date' => Carbon::now(),      
            'attendance' => $request->attendance,
        ]);

        // Devuelve una respuesta
        return response()->json(['message' => 'Asistencia registrada correctamente', 'data' => $asistencia], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $attendance = Attendance::findOrFail($id);
        return response()->json($attendance);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
