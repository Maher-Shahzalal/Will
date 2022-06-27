<?php

namespace App\Http\Controllers;

use App\Paymnet;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class PaymnetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.payment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function charge()
    {
       Alert::success('Payment done', 'Success Process');
       return view('home');   
    }
    public function store(Request $request)
    {
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paymnet  $paymnet
     * @return \Illuminate\Http\Response
     */
    public function show(Paymnet $paymnet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paymnet  $paymnet
     * @return \Illuminate\Http\Response
     */
    public function edit(Paymnet $paymnet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paymnet  $paymnet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paymnet $paymnet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paymnet  $paymnet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paymnet $paymnet)
    {
        //
    }
}
