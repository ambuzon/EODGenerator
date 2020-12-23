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
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#commentCreate">
                <i class="fa fa-paper-plane"></i> Submit
            </button>
        </div>

        <!-- Create Modal -->
        <div class="modal fade" id="commentCreate" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="deleteModal">Add Comment Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    
                    <div class="modal-body">
                    <p>
                        Add new comment?
                    </p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Wait, no</button>
                    <button type="submit" class="btn btn-success">Yes, do it</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
</div>

@endsection