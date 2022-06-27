<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Service = \App\Service::all();
        return view('services')->with('Service',Service::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function indexAdminPage()
    {
        $Service = \App\Service::all();
        return view('admin.index_video_servicePage')->with('Service',Service::all());
    }

    public function create()
    {
        return view('admin.add_video_servicePage');
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
            'service' => 'required | mimes:mp4,mov,qt',]);
             $data=new Service;
              if($request->file('service')){
                 $file=$request->file('service');
                  $filename = time().'.'.$file->getClientOriginalExtension();
                  $request->service->move('storage/',$filename);
              $data->service= $filename;}
              $data->service=$filename;
              $data->save();
              session()->flash('success','Vedio ( services page ) uploaded successfuly ');
          return redirect('/admin_home/index_video_servicePage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy( $service)
    {
        $service = Service::find($service);
        Storage::disk('public')->delete($service->service);
        $service->delete();
        session()->flash('success','Viedo ( services page ) Deleted successfuly ');
        return redirect('/admin_home/index_video_servicePage');
    }
}
