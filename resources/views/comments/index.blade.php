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
    <a class="btn btn-primary" href="{{route('comments.create')}}">Create Comment</a>
  </div>

  <br>
  {{-- Start of Section --}}
  <section class="page-section" id="englishComments">
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
            <td style="width:140px;">{{ $comment->Criteria }}</td>
            <td style="width:140px;">{{ $comment->subject['Subject'] }}</td>
            <td style="width:700px;">{{ $comment->Comment }}</td>
            <td style="width:160px;">
              {{-- <a href="/admin/content/{{$main_code[$index]}}/edit" class="btn btn-info">Edit</a>
              {!!Form::open(['action' =>  ['AdminController@destroy', $main_code[$index]], 'method' => 'POST', 'class' => 'float-right', 'onsubmit' => 'return confirm("Are you sure?")'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
              {!!Form::close()!!} --}}
            </td>
        </tr>
        @endforeach   
    </table>
    {{ $comments->links() }} 
  </section> 
</div>


