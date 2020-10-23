<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Subject;

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
        function getComments($criteria){
            $subject_id = Subject::where('Subject', 'Science')->pluck('Id');
            $comments = Comment::where('SubjectId', $subject_id)
                        ->where('Criteria', $criteria)
                        ->pluck('Comment');
            return $comments;
        }
        $comments = array(
            'comments1' => getComments('Q1'),
            'comments2' => getComments('Q2'),
            'comments3' => getComments('Q3'),
            'comments4' => getComments('Q4'),
        );
        return view('subjects.science')->with($comments);
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
