<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genders = Student::pluck('Gender')->unique();

        if (request()->has('gender')){
        $students = Student::where('Gender', request('gender'))
                                            ->orderBy('FirstName', 'ASC')
                                            ->paginate(25)
                                            ->appends('gender', request('gender'));
        }
        else {
        $students = Student::orderBy('FirstName', 'ASC')->paginate(25);
        }
        return view('students.index')
                            ->with('students', $students)
                            ->with('genders', $genders);
    }

    public function search(Request $request)
    {

        $query = $request->input('query');
        
        $search_by = $request->input('search_by');

        $students = Student::where($search_by,'LIKE','%'.$query.'%')->paginate(25);

        $pagination = $students->appends ( array (
            'query' => $request->input ( 'query' ),
            'search_by' => $request->input( 'search_by' ) 
          ) );      
        return view('students.search')
                            ->with('students', $students)
                            ->withQuery($query);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
            'FirstName' => 'required',
            'Gender' => 'required',
            'Nickname' => 'unique:students,Nickname'
        ]);
        
        $student = new Student;
        //First Name
        $firstName = $request->input('FirstName');
        $student->FirstName = $firstName;
        //Middle Name
        $middleName = $request->input('MiddleName');
        $student->MiddleName = $middleName;
        if($middleName != NULL){
        $student->MiddleInitial = $middleName[0] . '.';
        }
        //Last Name
        $student->LastName = $request->input('LastName');
        //Nickname
        $nickname = $request->input('Nickname');
        if($nickname != NULL){
            $student->Nickname = $nickname;
        } else {
            $student->Nickname = $firstName;
        }
        //Gender
        $student->Gender = $request->input('Gender');
        //Save
        $student->save();

        return redirect()->route('students.index')->with('success', 'Student Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id)
    {
        $student = Student::find($Id);

        return view('students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        $student = Student::find($Id);

        return view('students.edit')->with('student', $student);
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
        $student = Student::find($Id);

        $this->validate($request, [
            'FirstName' => 'required',
            'Gender' => 'required',
            'Nickname' => "unique:students,Nickname,".$Id
        ]);
        
        
        //First Name
        $firstName = $request->input('FirstName');
        $student->FirstName = $firstName;
        //Middle Name
        $middleName = $request->input('MiddleName');
        $student->MiddleName = $middleName;
        if($middleName != NULL){
        $student->MiddleInitial = $middleName[0] . '.';
        }
        //Last Name
        $student->LastName = $request->input('LastName');
        //Nickname
        $nickname = $request->input('Nickname');
        if($nickname != NULL){
            $student->Nickname = $nickname;
        } else {
            $student->Nickname = $firstName;
        }
        //Gender
        $student->Gender = $request->input('Gender');
        //Save
        $student->save();

        return redirect()->route('students.index')->with('success', 'Details Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($Id)
    // {
    //     $student = Student::find($Id);
    //     $student->delete();

    //     return redirect()->route('students.index')->with('success', 'Student Removed');
    // }

    public function destroy(Request $request)
    {
        $student = Student::find($request->deleteId);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student Removed');
    }
}
