<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Will;
use App\Media;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.index_written_contacts')->with('Contact',Contact::where('user_id' , Auth::user()->id)->get())->with('Will',Will::where('user_id' , Auth::user()->id)->get())->with('Media',Media::where('user_id' , Auth::user()->id)->get());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.write_contact')->with('Will',Will::all())->with('Media',Media::all());
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
            "code" => "required|max:5",
            "number" => "required|digits_between:9,10|numeric",
            "name" => "required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/|max:25",
            "emaill" => "required|min:email|max:25",]);
         if(Auth::check()){
             Contact::create([
             'code' => $request->input('code'),
             'number' => $request->input('number'),
             'name' => $request->input('name'),  
             'emaill' => $request->input('emaill'), 
             'will_id' => $request->input('will_id'),
             'media_id' => $request->input('media_id'),
             'user_id' => auth()->id()]); }
       session()->flash('success','Contact created successfuly');
       return redirect('/home/index_written_contacts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit( $contact)
    {
        $contact = Contact::find($contact);
        return view('project.edit_written_contact')->with('Contact',$contact)->with('Will',Will::all())->with('Media',Media::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request ,$contact)
    {
        $request->validate([
            "code" => "required|max:5",
            "number" => "required|min:11|numeric",
            "name" => "required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/|max:25",
            "emaill" => "required|min:email|max:25",]);
         $data = Contact::find($contact);
         $data->code = $request->get('code');
         $data->number = $request->get('number');
         $data->name = $request->get('name');
         $data->emaill = $request->get('emaill');
         $data->will_id=  $request->Input(['will_id']);
         $data->media_id=  $request->Input(['media_id']);
         $data->user_id = Auth::user()->id;
         $data->save();
         $data->save();
        session()->flash('success','Contact updated sucessfuly');
        return redirect('/home/index_written_contacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy( $contact)
    {
        $contact = Contact::find($contact);
        $contact->delete();
        session()->flash('success','Contact Deleted successfuly ');
        return redirect('/home/index_written_contacts');
    }
}
