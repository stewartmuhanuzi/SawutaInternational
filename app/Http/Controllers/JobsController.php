<?php

namespace App\Http\Controllers;
use App\Jobs;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
    	return view('postjob.show');
    }

    public function show2($id)
    {
    	$job = Postjob::find($id);

    	return view('postjob.show2', ['job'=>$job]);

    }
}
