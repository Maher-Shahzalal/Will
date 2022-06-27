<?php

namespace App\Http\Controllers;

use App\Will;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;

class WillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.index_written_wills')->with('Will',Will::where('user_id' , Auth::user()->id)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.write_will');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        $request->validate([
            "name" => "required|max:100|unique:wills",
            "content" => "required|max:6000" , ]);
        $user = new Will();
        $user->name=  $request->Input(['name']);
        $user->content=  $request->Input(['content']);
        $user->user_id = Auth::user()->id;
        $user->save();
       session()->flash('success','Will Created successfuly ');
       return redirect('/home/index_written_wills');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Will  $will
     * @return \Illuminate\Http\Response
     */
    public function show($will)
    {
        return view('project.index_written_wills')->with('Will',\App\Will::find($will));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Will  $will
     * @return \Illuminate\Http\Response
     */
    public function edit($will)
    {
        $will = Will::find($will);
        return view('project/edit_written_will')->with('Will',$will);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Will  $will
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request ,$will)
    {
        $request->validate([
            "name" => "required|max:100|unique:wills"  ,
            "content" => "required|max:6000"]);
        $user = Will::find($will);
        $user->name = $request->get('name');
        $user->content = $request->get('content');
        $user->save();
        session()->flash('success','will updated sucessfuly');
        return redirect('/home/index_written_wills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Will  $will
     * @return \Illuminate\Http\Response
     */
    public function destroy($will)
    {
        $will = Will::find($will);
        $will->delete();
        return redirect('/home/index_written_wills')->with(['success'=> __('Will Deleted successfuly')]);
    }
}
