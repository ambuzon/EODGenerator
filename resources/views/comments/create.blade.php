@extends('layouts.report')
@section('content')

<div class="container">
    <h1>New Comment</h1>
</div>

<div class="container">
    <form method="POST" action="{{route('comments.store')}}">
        @csrf
        
        <div class="form-group">
            <label for="subject"><h4>Subject</h4></label>
            <select class="form-control" id="subject" name="subject">
            @foreach ($subjects as $subject)
                <option value = "{{$subject->Id}}">{{$subject->Subject}}</option>   
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="criteria"><h4>Criteria</h4></label>
            <select class="form-control" id="criteria" name="criteria">
            @foreach ($criteria as $c)
                <option value = "{{$c}}">{{str_replace('Q', 'Question ' , $c)}}</option>   
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="comment"><h4>Comment<h4></label>
            <textarea class ="form-control" id="comment" name="comment" type="text" rows="4" cols="150" placeholder="Type the comment here"></textarea>
        </div>   

        <div class="form-group">
            <a href="{{ route('comments.index') }}" class="btn btn-primary"><i class="fa fa-angle-left">
            </i> Back
            </a>
            <input class="btn btn-success" type="submit" value="Submit">
        </div>
    </form>
</div>

@endsection