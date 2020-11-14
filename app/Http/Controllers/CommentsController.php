<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Subject;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::pluck('Subject');
        if (request()->has('subject')){
        $subject_id = Subject::where('Subject', request('subject'))->pluck('Id');
        $comments = Comment::where('SubjectId', $subject_id)
                                                ->orderBy('SubjectId', 'ASC')
                                                ->simplePaginate(8)
                                                ->appends('subject', request('subject'));
        }
        else {
        $comments = Comment::orderBy('SubjectId', 'ASC')->simplePaginate(8);
        }
        return view('comments.index')
                                ->with('subjects', $subjects)
                                ->with('comments', $comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contents = array(
            'subjects' => Subject::all(),
            'criteria' => Comment::orderBy('Criteria')
                                    ->pluck('Criteria')
                                    ->unique(),
        );
        return view('comments.create')->with($contents);
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
            'subject' => 'required',
            'criteria' => 'required',
            'comment' => 'required'
        ]);
        
        $comment = new Comment;
            $comment->SubjectId = $request->input('subject');
            $comment->Criteria = $request->input('criteria');
            $comment->Comment = $request->input('comment');
            $comment->save();

        return redirect(route('comments.index'))->with('success', 'Comment Added');
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
