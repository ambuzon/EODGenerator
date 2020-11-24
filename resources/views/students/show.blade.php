@extends('layouts.report')

@section('content')
<body>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">{{$student->FirstName}} {{$student->MiddleInitial}} {{$student->LastName}}</div>
    
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
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>    
@endsection