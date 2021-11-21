<?php

namespace App\Http\Controllers;

use App\Models\AsignedProject;
use Illuminate\Http\Request;

class AsignedProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("AsignedProject.AsignedProjectIndex");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AsignedProject  $asignedProject
     * @return \Illuminate\Http\Response
     */
    public function show(AsignedProject $asignedProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AsignedProject  $asignedProject
     * @return \Illuminate\Http\Response
     */
    public function edit(AsignedProject $asignedProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AsignedProject  $asignedProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsignedProject $asignedProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AsignedProject  $asignedProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsignedProject $asignedProject)
    {
        //
    }
}
