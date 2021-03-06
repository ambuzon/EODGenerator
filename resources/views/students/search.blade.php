@extends('layouts.report')

@section('content')

  <div class="container">
      <h1 class="display-4">Students Index</h1>
  </div>

<div class="container">

  <div>
    <a href="{{route('students.index')}}" class="btn btn-primary"><i class="fa fa-angle-left">
    </i> Back
    </a>
    <a class="btn btn-primary" href="{{route('students.create')}}"><i class="fa fa-plus"></i> Add New Student</a>
  </div>

  <br>
  <div>
    {{-- Start of Section --}}
    <section class="page-section">
      
      {{-- Search Bar --}}
      <form action="{{  route('students.search')  }}" method="GET" role="search">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="query"
                placeholder="Search students"> 
        
            <label for="search_by"></label>
                <select name="search_by" id="search_by">
                    <option value="" disabled>Select Category</option>
                    <option value="Nickname">Nickname</option>
                    <option value="FirstName">Firstname</option>
                    <option value="LastName">Lastname</option>
                </select>
            
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
      </form>
      <br>
      {{-- End of search bar --}}

      <table class="table table-bordered table-striped">

          <tr>
              <h4>
                Results for "{{$query}}"
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
          
                <div>
                    <a href="{{route('students.show', $student->Id)}}" class="btn btn-info"><i class="fa fa-eye"></i> Details</a>
                    <a href="{{route('students.edit', $student->Id)}}" class="btn btn-primary"><i class="fa fa-edit"> Edit</i></a>
              
                    <button type="button" title="delete" class="btn btn-danger" data-toggle="modal" data-target="#studentDelete">
                      <i class="fa fa-window-close"></i>
                    </button>
                    
                </div>
                
              </td>
              <!-- Delete Modal -->
              <div class="modal fade" id="studentDelete" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="deleteModal">Delete Confirmation</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="POST" id="delete-form" action="{{route('students.destroy', $student->Id)}}">
                    
                    <div class="modal-body">
                      @csrf
                      @method('DELETE')
                      <p>
                        Are you sure you want to delete?
                      </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No, go back</button>
                      <button type="submit" class="btn btn-danger">Yes, delete it</button>
                    </div>
                    
                    </form>
                  </div>
                </div>
              </div>
          </tr>
          @endforeach   
      </table>
      {{ $students->links() }} 
    </section> 
  </div>
</div>

@endsection