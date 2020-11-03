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
        return redirect('/postjob/show')->with('success', 'Job Created Succesfully');


        //return redirect('/postjob/test');
    }

    //The displayPost method is meant to display the job created
    public function show()
    {
        $postjob = Postjob::latest()->get();

        // return Redirect::to('postjob.show')->with('message', 'Job posted');

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

    //When a new job is created the person posting should be able to see all jobs posted
    public function userPosts()
    {

    }


    public function viewjob(Postjob $job)
    {
        //$job = Postjob::findOrFail($id);

        return view('postjob.viewjob', ['job'=>$job]);

    }

    public function edit(Postjob $job)
    {
        // $job = Postjob::find($id);

        return view('postjob.edit', ['job'=>$job]);
    }

    public function update($id)
    {
        $job = Postjob::find($id);

        $job::whereId($id)->update($this->validatePostData());

        return redirect('/postjob/show' . $job->id);        
    }

}
