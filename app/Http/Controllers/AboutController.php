<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use App\Http\Requests\VedioRequest;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $About = \App\About::all();
        return view('about')->with('About',About::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexAdminPage()
    {
        $About = \App\About::all();
        return view('admin.index_video_aboutPage')->with('About',About::all());
    }

    public function create()
    {
        return view('admin.add_video_aboutPage');
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
       'about' => 'required | mimes:mp4,mov,qt',]);
        $data=new About;
         if($request->file('about')){
            $file=$request->file('about');
             $filename = time().'.'.$file->getClientOriginalExtension();
             $request->about->move('storage/',$filename);
         $data->about= $filename;}
         $data->about=$filename;
         $data->save();
         session()->flash('success','Vedio ( about us page ) uploaded successfuly ');
         return redirect('/admin_home/index_video_aboutPage');
        }
    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($about)
    {
        $about = About::find($about);
        Storage::disk('public')->delete($about->about);
        $about->delete();
        session()->flash('success','Viedo ( about us page ) Deleted successfuly ');
        return redirect('/admin_home/index_video_aboutPage');
    }
}
