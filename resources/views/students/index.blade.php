@extends('layouts.report')

@section('content')

  <div class="container">
      <h1 class="display-4">Students Index</h1>
  </div>

<div class="container">
  <div>
    Filter:
    @foreach ($genders as $gender)
      <a href = "/students/?gender={{$gender}}">{{$gender}}</a> |
    @endforeach
    <a href = "/students">Reset</a> 
  </div>
  <br>
  <div>
    <a href="/" class="btn btn-primary"><i class="fa fa-angle-left">
    </i> Back
    </a>
    <a class="btn btn-primary" href="{{route('students.create')}}">Add New Student</a>
  </div>

  <br>
  <div class="scrolling-pagination">
    {{-- Start of Section --}}
    <section class="page-section">
      <table class="table table-bordered table-striped">

          <tr>
              <h4>
                @php
                if (request()->has('subject')){
                  print(request('subject'));} 
                else {
                  print("All");
                }  
                @endphp
              </h4>
        
          <tr>
              <th>Student Name</th>
              <th>Nickname</th>
              <th>Gender</th>
              <th>Action</th>
          </tr>
          @foreach($students as $student)
          <tr>
              <td style="width:200px;">{{ $student->FirstName }} {{ $student->MiddleInitial }} {{ $student->LastName }}</td>
              <td style="width:50px;">{{ $student->Nickname }}</td>
              <td style="width:50px;">{{ $student->Gender }}</td>
              <td style="width:100px;">
          
                <form method="POST" id="delete-form" action="{{route('students.destroy', $student->Id)}}">
                    @csrf
                    <a href="{{route('students.show', $student->Id)}}" class="btn btn-info">Details</a>
                    <a href="{{route('students.edit', $student->Id)}}" class="btn btn-success">Edit</a>
                    
                    @method('DELETE')
                      <button type="submit" title="delete" class="btn btn-danger" onclick='return confirm("Delete this student?\nPress OK to confirm.")'>
                          Delete
                      </button>
                </form>
              </td>
          </tr>
          @endforeach   
      </table>
      {{ $students->links() }} 
    </section> 
  </div>
  
</div>

    
@endsection