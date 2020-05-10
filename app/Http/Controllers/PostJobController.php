<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postjob;
class PostJobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
    	return view('postjob'); 

    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'company' => 'required',
    		'title' => 'required',
    		'description' => 'required',
    		'salary' => 'required',
    		'deadline' => 'required',
            'document'
    	]);

        $filenameWithExtension = $request->file('document')->getClientOriginalName();
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
        $extension = $request->file('document')->getClientOriginalExtension();
        $filenameToStore = $filename . '_' .time() .'.'.$extension;

        $request->file('document')->storeAs('public/document_files', $filenameToStore);

        $postjob = new Postjob();
        $postjob->company =$request->input('company');
        $postjob->title =$request->input('title');
        $postjob->description =$request->input('description');
        $postjob->salary =$request->input('salary');
        $postjob->deadline =$request->input('deadline');
        $postjob->company =$request->input('document');
        $postjob->save();



    }
}
