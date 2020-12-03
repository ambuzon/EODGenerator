@extends('layouts.report')

@section('content')

<br><br>    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Student Details</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('students.update', $student->Id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="FirstName" class="col-md-4 col-form-label text-md-right"><span class="text-small text-info">* </span>First Name
                                <span class="text-small text-info"><span>
                            </label>

                            <div class="col-md-6">
                                <input id="FirstName" type="text" class="form-control @error('FirstName') is-invalid @enderror" name="FirstName" value="{{ $student->FirstName }}" required autofocus>

                                @error('FirstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="LastName" class="col-md-4 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control @error('LastName') is-invalid @enderror" name="LastName" value="{{ $student->LastName }}">

                                @error('LastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="MiddleName" class="col-md-4 col-form-label text-md-right">Middle Name</label>

                            <div class="col-md-6">
                                <input id="MiddleName" type="text" class="form-control @error('MiddleName') is-invalid @enderror" name="MiddleName" value="{{ $student->MiddleName }}">

                                @error('MiddleName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Nickname" class="col-md-4 col-form-label text-md-right">Nickname</label>

                            <div class="col-md-6">
                                <input id="Nickname" type="text" class="form-control" name="Nickname" value="{{ $student->Nickname }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Gender" class="col-md-4 col-form-label text-md-right"><span class="text-small text-info">* </span>Gender</label>

                            <div class="col-md-6">
                                <select class="form-control" id="Gender" name="Gender" required>
                                    <option value="" disabled>Select Gender</option>
                                    <option value="Male" @if ($student->Gender == 'Male') selected @endif>Male</option>
                                    <option value="Female" @if ($student->Gender == 'Female') selected @endif>Female</option>
                                    </select>

                                @error('Gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-angle-left">
                                </i> Back
                                </a>
        
                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
  
</div>

@endsection