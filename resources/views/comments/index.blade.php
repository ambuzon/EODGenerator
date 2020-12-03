@extends('layouts.report')

@section('content')

{{-- Choose which subject comments to show --}}

<div class="container">
      <h1 class="display-4">Comments Index</h1>
</div>

<div class="container">
  <div>
    Filter:
    @foreach ($subjects as $subject)
      <a href = "/comments/?subject={{$subject}}">{{$subject}}</a> |
    @endforeach
    <a href = "/comments">Reset</a> 
  </div>
  <br>
  <div>
    <a href="/" class="btn btn-primary"><i class="fa fa-angle-left">
    </i> Back
    </a>

    <a class="btn btn-primary" href="{{route('comments.create')}}">Create Comment</a>
  </div>

  <br>
  <div>
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
          </tr>
          <tr>
              <th>Criteria</th>
              <th>Subject</th>
              <th>Comment</th>
              <th>Action</th>
          </tr>
          @foreach($comments as $comment)
          <tr>
              <td style="width:140px;">{{ str_replace("Q", "Question ", $comment->Criteria) }}</td>
              <td style="width:140px;">{{ $comment->subject['Subject'] }}</td>
              <td style="width:700px;">{{ $comment->Comment }}</td>
              <td style="width:160px;">
                
                <form method="POST" id="delete-form" action="{{route('comments.destroy', $comment->Id)}}">
                    @csrf
                    <a href="{{route('comments.edit', $comment->Id)}}" class="btn btn-primary">Edit</a>
                    @method('DELETE')
                    <button type="submit" title="delete" class="btn btn-danger" onclick='return confirm("Delete this comment?\nPress OK to confirm.")'>
                      Delete
                  </button>
                    </a>
                    
                </form>
              </td>
          </tr>
          @endforeach   
      </table>
      {{ $comments->links() }} 
    </section> 
  </div>
  
@endsection

