@extends('layouts.report')

@section('content')

<br><br>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Full Name: {{$student->FirstName." ".$student->MiddleInitial." ".$student->LastName}}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
                            @csrf
    
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right"><b>First Name:</b>
                                </label>
    
                                <div class="col-md-6 col-form-label text-md-left">
                                    {{$student->FirstName}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right"><b>Last Name:</b>
                                </label>
    
                                <div class="col-md-6 col-form-label text-md-left">
                                    {{$student->LastName}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right"><b>Middle Name:</b>
                                </label>
    
                                <div class="col-md-6 col-form-label text-md-left">
                                    {{$student->MiddleName}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right"><b>Nickname:</b>
                                </label>
    
                                <div class="col-md-6 col-form-label text-md-left">
                                    {{$student->Nickname}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right"><b>Gender:</b>
                                </label>
    
                                <div class="col-md-6 col-form-label text-md-left">
                                    {{$student->Gender}}
                                </div>
                            </div>     
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-form-label text-md-center">
            <a href="{{ route('students.index') }}" class="btn btn-primary"><i class="fa fa-angle-left">
            </i> Back
            </a> 
            
            <a href="{{route('students.edit', $student->Id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
            </div>
    </div>
</div>


@endsection