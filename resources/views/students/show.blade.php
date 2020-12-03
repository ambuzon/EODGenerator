@extends('layouts.report')

@section('content')

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Full Name: {{$student->FirstName." ".$student->MiddleInitial." ".$student->LastName}}</div>

                <div class="card-body">

                    <div class="form-group row">
                        <div class="col-md-7">
                            <h4><b>First Name:</b> {{$student->FirstName}}</h4>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-7">
                            <h4><b>Last Name:</b> {{$student->LastName}}</h4>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-7">
                            <h4><b>Middle Name:</b> {{$student->MiddleName}}</h4>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-7">
                            <h4><b>Nickname:</b> {{$student->Nickname}}</h4>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-7">
                            <h4><b>Gender:</b> {{$student->Gender}}</h4>
                        </div>
                    </div>

                    <div>
                        <form method="POST" id="delete-form" action="{{route('students.destroy', $student->Id)}}">
                            @csrf
                            
                            <a href="{{ route('students.index') }}" class="btn btn-primary"><i class="fa fa-angle-left">
                            </i> Back
                            </a> 
                            
                            <a href="{{route('students.edit', $student->Id)}}" class="btn btn-primary">Edit</a>
                            
                            @method('DELETE')
                                <button type="submit" title="delete" class="btn btn-danger" onclick='return confirm("Delete this student?\nPress OK to confirm.")'>
                                    Delete
                                </button>
                        </form>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
    
</div>
  
@endsection