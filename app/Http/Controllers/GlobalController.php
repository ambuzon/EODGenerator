<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class GlobalController extends Controller
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
            $comments = Comment::where('SubjectId', 1)
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
        );
        return view('subjects.global')->with($comments);
    }

    public function submit(Request $request)
    {

        $firstName=$request->firstName;
        $lastName=$request->lastName;
        $gender=$request->gender;
        
        $level0=$request->level0;
        $level0= (" demonstrates achievement of " . $level0 . "  of the expected learning standards addressed during the current reporting period.");
        
        $level1=$request->level1;
        $level2=$request->level2;
        $level3=$request->level3;
        $level4Cat1=$request->level4Cat1;
        $level4Cat2=$request->level4Cat2;

        $finalOutline= 
                        $firstName . $level0 . " " .
                        $level1 . " " .
                        $level2 . " " .
                        $level3 . " " .
                        $level4Cat1 . $level4Cat2;

        if($gender == "Female"){
            $finalOutline = str_replace(" he ", " she ", $finalOutline);
            $finalOutline = str_replace(" He ", " She ", $finalOutline);
            $finalOutline = str_replace(" his ", " her ", $finalOutline);
            $finalOutline = str_replace(" His ", " Her ", $finalOutline);
            $finalOutline = str_replace(" him ", " her ", $finalOutline);
            $finalOutline = str_replace(" Him ", " Her ", $finalOutline);
        }
        
        $finalOutline = str_replace("[None]", "", $finalOutline);
        $finalOutline = str_replace("[student]", $firstName, $finalOutline);

        return view('resultPage')->withResult($finalOutline);
    }
}
