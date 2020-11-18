@extends('layouts.report')
@section('content')

<div class="container">
    <h1>New Comment</h1>
</div>

<div class="container">
    <form method="POST" action="{{ route('comments.update', $comment->Id) }}">
        @csrf

        @method('PUT')
        <div class="form-group">
            <label for="comment"><h4>Comment<h4></label>
            <textarea class ="form-control" id="comment" name="comment" type="text" rows="4" cols="150" placeholder="Type the comment here">{{$comment->Comment}}</textarea>
        </div>   

        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>

@endsection