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
                                                ->orderBy('created_at', 'DESC')
                                                ->paginate(5)
                                                ->appends('subject', request('subject'));
        }
        else {
        $comments = Comment::orderBy('created_at', 'DESC')->paginate(5);
        }
        return view('comments.index')
                                ->with('subjects', $subjects)
                                ->with('comments', $comments);
    }
    
    public function search(Request $request)
    {

        $query = $request->input('query');
        
        $search_by = $request->input('search_by');

        if($search_by === 'Subject') {
            $subjectId = Subject::where($search_by,'LIKE','%'.$query.'%')->pluck('Id');
            $comments = Comment::where('SubjectId', $subjectId)->paginate(5);
        } 

        else if ($search_by === 'Criteria') {
            
            if (str_contains($query, 'Question') || str_contains($query, "question")){
                $newQuery = str_replace("Question", "Q", $query);
                $newQuery = str_replace("question", "q", $newQuery);
                $newQuery = str_replace(" ", "", $newQuery); 
                $comments = Comment::where($search_by,'LIKE','%'.$newQuery.'%')->paginate(5);
            }
            else {
                $comments = Comment::where($search_by,'LIKE','%'.$query.'%')->paginate(5);
            }
        }

        else {
            $comments = Comment::where($search_by,'LIKE','%'.$query.'%')->paginate(5);
        }
            $pagination = $comments->appends ( array (
                'query' => $request->input ( 'query' ),
                'search_by' => $request->input( 'search_by' ) ) );   
            
            
        return view('comments.search')
                            ->with('comments', $comments)
                            ->withQuery($query);
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
    public function edit($Id)
    {
        $comment = Comment::find($Id);
        return view('comments.edit')->with('comment', $comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id)
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);
        
        $comment =Comment::find($Id);
        $comment->Comment = $request->input('comment');
        $comment->save();
        return redirect(route('comments.index'))->with('success', 'Comment Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($Id)
    // {
    //     $comment = Comment::find($Id);

    //     $comment->delete();
    //     return redirect(route('comments.index'))->with('success', 'Comment Removed');
    // }

    public function destroy(Request $request)
    {
        $comment = Comment::find($request->deleteId);

        $comment->delete();
        return redirect(route('comments.index'))->with('success', 'Comment Removed');
    }
}
