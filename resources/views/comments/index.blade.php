@extends('layouts.report')
@section('content')

{{-- Choose which subject comments to show --}}
<label><h1>Comments Index</h1></label>
<br>
<div>
  Filter:
  @foreach ($subjects as $subject)
    <a href = "/comments/?subject={{$subject}}">{{$subject}}</a> |
  @endforeach
  <a href = "/comments">Reset</a> 
</div>
<br>
<br>
{{-- Start of Section --}}
<section class="page-section" id="englishComments">
  <table class="table table-bordered table-striped">
    
      <tr>
          <h4>
            English
          </h4>
      </tr>
      <tr>
          <th>Question No.</th>
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



<script src="{{ asset('js/comments.js') }}"></script>