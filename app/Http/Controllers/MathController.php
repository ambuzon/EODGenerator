<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
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
        return view('math');
    }

    public function submit(Request $request)
    {
        $firstName=$request->firstName;
        $lastName=$request->lastName;
        $gender=$request->gender;
        
        $level0=$request->level0;
        $level0= (" demonstrates achievement of " . $level0 . "  of the expected learning standards addressed during the current reporting period.");
        
        $level1=$request->level1;

        $level2a=$request->level2a;

        $level2b=$request->level2b;
        $level2b= (" He demonstrates " . $level2b . " understanding of the topics that we have covered this semester he is readily able to recall the taught strategies with a high degree of accuracy. He is always able to apply his maths knowoledge to suit a particular problem or situation.");
        
        $level2c=$request->level2c;

        $level3a=$request->level3a;
        $level3b=$request->level3b;
        $level3c=$request->level3c;

        $level4a=$request->level4a;
        $level4b=$request->level4b;
        $level4c=$request->level4c;


        $finalOutline= 
                        $firstName . $level0 . " " .
                        $level1 . " " .                
                        $level2a . " " .
                        $level2b . " " .
                        $level2c . " " .
                        $level3a . " " .
                        $level3b . " " .
                        $level3c . " " .
                        $level4a . " " .
                        $level4b . " " .
                        $level4cCat1 . $level4cCat2 . $level4cCat3 . $level4cCat4;
                        
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