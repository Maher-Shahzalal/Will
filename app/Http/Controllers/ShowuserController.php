<?php

namespace App\Http\Controllers;

use App\Showuser;
use Illuminate\Http\Request;
use App\User;

class ShowuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = \App\Showuser::all();
        return view('admin.showusers')->with('Showuser',Showuser::all())->with('User',User::all());
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
     * @param  \App\Showuser  $showuser
     * @return \Illuminate\Http\Response
     */
    public function show(Showuser $showuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Showuser  $showuser
     * @return \Illuminate\Http\Response
     */
    public function edit(Showuser $showuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Showuser  $showuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Showuser $showuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Showuser  $showuser
     * @return \Illuminate\Http\Response
     */
    public function destroy($showuser)
    {
        $showuser = User::find($showuser);
        $showuser->delete();
        return redirect("/admin_home/showusers")->with(['success'=> __('User Deleted successfuly')]);
    }
}
