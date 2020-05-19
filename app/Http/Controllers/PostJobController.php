<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postjob;
class PostJobController extends Controller
{
    public function __construct()
    {
        //This only authorizes a logged in user 

        $this->middleware('auth');
    }

    public function create()
    {
    	return view('postjob.create'); 

    }

    public function store()
    {
        //After submission of the job post the details are captured and stored in the database with this method

        Postjob::create($this->validatePostData());

        //return redirect('/postjob/test');
    }

    public function displayPost()
    {
        $postjob = Postjob::all();

        return view('postjob.show', ['postjob' => $postjob]);
    }

    protected function validatePostData()
    {
        return request()->validate([
            'company' => 'required',
            'title' => 'required',
            'description' => 'required',
            'salary' => 'required',
            'deadline' =>'required',
            'document' =>'required'

        ]);
    }
}
