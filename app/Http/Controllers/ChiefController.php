<?php

namespace App\Http\Controllers;

use App\Models\Chief;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\auth;

class ChiefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chiefs = Chief::all()->where('role',1)->where('id_sup',auth()->user()->id);
        return view('Chiefs.chiefIndex', compact('chiefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Chiefs.chiefCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pass = Hash::make($request['password']);
        $request['password'] = $pass;
        Chief::create($request->all());
        return redirect()->route('adminR.chiefs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chief  $chief
     * @return \Illuminate\Http\Response
     */
    public function show(Chief $chief)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chief  $chief
     * @return \Illuminate\Http\Response
     */
    public function edit(Chief $chief)
    {
        return view('Chiefs.chiefCreate', compact('chief') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chief  $chief
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chief $chief)
    {
        Chief::where('id', $chief->id)->update($request->except('_token','_method'));
        return redirect()->route('adminR.chiefs.index')->with('info','Jefe de proyecto Modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chief  $chief
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chief $chief)
    {
        $chief->delete();
        return redirect()->route('adminR.chiefs.index')->with('success','Jefe de proyecto eliminado correctamente');
    }
}
