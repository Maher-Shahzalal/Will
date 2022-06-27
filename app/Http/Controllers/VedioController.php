<?php

namespace App\Http\Controllers;

use App\Vedio;
use Illuminate\Http\Request;
use App\Http\Requests\VedioRequest;
use Illuminate\Support\Facades\Storage;

class VedioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vedio = \App\Vedio::all();
        return view('will')->with('Vedio',$vedio);
    }

    public function indexAdminPage()
    {
        $vedio = \App\Vedio::all();
        return view('admin.index_video_mainPage')->with('Vedio',Vedio::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_video_mainPage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
  {     
      $this->validate($request, [
          'vedio' => 'required | mimes:mp4,mov,qt ',]);
           $data=new Vedio;
        if($request->file('vedio')){
            $file=$request->file('vedio');
             $filename = time().'.'.$file->getClientOriginalExtension();
             $request->vedio->move('storage/',$filename);
             $data->vedio= $filename;}
             $data->vedio=$filename;
             $data->save();
         session()->flash('success','Vedio ( main page ) uploaded successfuly ');
         return redirect('/admin_home/index_video_mainPage');
        }
    /**
     * Display the specified resource.
     *
     * @param  \App\Vedio  $vedio
     * @return \Illuminate\Http\Response
     */
    public function show(Vedio $vedio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vedio  $vedio
     * @return \Illuminate\Http\Response
     */
    public function edit($vedio)
    {
        return view('admin_home.editz')->with('Vedio',Vedio::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vedio  $vedio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vedio)
    {
        if($request->hasFile('vedio')){
            $file=$request->file('vedio');
             $filename = time().'.'.$file->getClientOriginalExtension();
             $request->vedio->move('storage/',$filename);
             $data->vedio= $filename;}
             $data->save();
         session()->flash('success','Media updated sucessfuly');
         return redirect('/admin_home/showusers');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vedio  $vedio
     * @return \Illuminate\Http\Response
     */
    public function destroy($vedio)
    {
        $vedio = Vedio::find($vedio);
        Storage::disk('public')->delete($vedio->vedio);
        $vedio->delete();
        session()->flash('success','Viedo ( main page ) Deleted successfuly ');
        return redirect('/admin_home/index_video_mainPage');
    }
}
