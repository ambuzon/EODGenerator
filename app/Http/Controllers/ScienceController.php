<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScienceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('science');
    }

    public function submit(Request $request)
    {

        //logic for report 

        
        return $request->firstName;

        // $stringTest = $request->name;
        // return $stringTest . "123";
        // return $request->all();
    }
}
