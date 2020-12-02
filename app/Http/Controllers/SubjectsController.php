<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Subject;
use App\Models\Student;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function english()
    {
        function getComments($criteria){
            $subject_id = Subject::where('Subject', 'English')->pluck('Id');
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
            'students' => Student::get()
        );

        $students = Student::get();

        return view('subjects.english')->with($comments);               
    }

    public function global()
    {
        function getComments($criteria){
            $subject_id = Subject::where('Subject', 'Global')->pluck('Id');
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
            'comments4a' => getComments('Q4a'),
            'students' => Student::get()
        );
        return view('subjects.global')->with($comments);
    }

    public function math()
    {
        function getComments($criteria){
            $subject_id = Subject::where('Subject', 'Math')->pluck('Id');
            $comments = Comment::where('SubjectId', $subject_id)
                        ->where('Criteria', $criteria)
                        ->pluck('Comment');
            return $comments;
        }
        $comments = array(
            'comments1' => getComments('Q1'),
            'comments2a' => getComments('Q2a'),
            'comments2c' => getComments('Q2c'),
            'comments3a' => getComments('Q3a'),
            'comments3b' => getComments('Q3b'),
            'comments3c' => getComments('Q3c'),
            'comments4a' => getComments('Q4a'),
            'comments4b' => getComments('Q4b'),
            'comments4c1' => getComments('Q4c1'),
            'comments4c2' => getComments('Q4c2'),
            'comments4c3' => getComments('Q4c3'),
            'comments4c4' => getComments('Q4c4'),
            'students' => Student::get()
        );
        
            return view('subjects.math')->with($comments);
    }

    public function science()
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
            'students' => Student::get()
        );
        return view('subjects.science')->with($comments);
    }

    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
