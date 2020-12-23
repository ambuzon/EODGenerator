@extends('layouts.report')
@section('content')

<div class="container">
    <h1>Edit Comment</h1>
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
                        Submit Edit?
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