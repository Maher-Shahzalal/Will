<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.index_media')->with('Media',Media::where('user_id' , Auth::user()->id)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('project.add_media');
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
             "name" => "required|max:100",
             "image" => 'mimes:jpeg,png,jpg,gif,svg| max:10000',
             "vedio" => 'mimes:mp4,mov,qt| max:20000 ',]);
        $data=new Media;
        $data->name = $request->get('name');
             if($request->file('voice')){
                $file=$request->file('voice');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $request->voice->move('storage/',$filename);
        $data->voice= $filename;}
              if($request->file('vedio')){
                 $file=$request->file('vedio');
                 $filename = time().'.'.$file->getClientOriginalExtension();
                 $request->vedio->move('storage/',$filename);
         $data->vedio=$filename;}
               if($request->file('image')){
                   $file=$request->file('image');
                   $filename = time().'.'.$file->getClientOriginalExtension();
                   $request->image->move('storage/',$filename);
         $data->image=$filename;}
         $data->user_id = Auth::user()->id;
        $data->save();
   session()->flash('success','Media created successfuly ');
   return redirect('/home/index_media');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit($media)
    {
        $media = Media::find($media);
        return view('project.edit_media')->with('Media',$media);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $media)
    {

        $this->validate($request, [
              "name" => "required|max:100|unique:media",
              'image' => 'mimes:jpeg,png,jpg,gif,svg',
              'vedio' => 'mimes:mp4,mov,qt ',]);
        $data = Media::find($media);
        $data->name = $request->get('name');
           if($request->hasFile('voice')){
               $file=$request->file('voice');
               $filename = time().'.'.$file->getClientOriginalExtension();
               $request->voice->move('storage/',$filename);
        $data->voice= $filename;}
        $data->save();
           if($request->hasFile('image')){
               $file=$request->file('image');
               $filename = time().'.'.$file->getClientOriginalExtension();
               $request->image->move('storage/',$filename);
        $data->image= $filename;}
        $data->save();
           if($request->hasFile('vedio')){
               $file=$request->file('vedio');
               $filename = time().'.'.$file->getClientOriginalExtension();
               $request->vedio->move('storage/',$filename);
        $data->vedio= $filename;}
        $data->save();
        session()->flash('success','Media updated sucessfuly');
        return redirect('/home/index_media');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($media)
    {
        $media = Media::find($media);
        Storage::disk('public')->delete($media->image,$media->voice,$media->vedio);
        $media->delete();
        return redirect('/home/index_media')->with(['success'=> __('Media Deleted successfuly')]);
    }
}
