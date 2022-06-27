<?php

namespace App\Http\Controllers;

use App\Finacial;
use Illuminate\Http\Request;

class FinacialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finacial = \App\Finacial::all();
        return view('admin.finacial')->with('Finacial',$finacial);
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
     * @param  \App\Finacial  $finacial
     * @return \Illuminate\Http\Response
     */
    public function show(Finacial $finacial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Finacial  $finacial
     * @return \Illuminate\Http\Response
     */
    public function edit(Finacial $finacial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Finacial  $finacial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finacial $finacial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Finacial  $finacial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finacial $finacial)
    {
        //
    }
}
