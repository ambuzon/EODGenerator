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

    <a class="btn btn-primary" href="{{route('comments.create')}}"><i class="fa fa-plus"></i> Create Comment</a>
  </div>

  <br>
  <div>
    {{-- Start of Section --}}
    <section class="page-section">
      {{-- Search Bar --}}
      <form action="{{  url('comments/search')  }}" method="GET" role="search">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="query"
                placeholder="Search comments"> 
        
            <label for="search_by"></label>
                <select name="search_by" id="search_by">
                    <option value="" disabled>Select Category</option>
                    <option value="Comment">Comments</option>
                    <option value="Subject">Subject</option>
                    <option value="Criteria">Question</option>
                  
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
                
                  <div>
                    <a href="{{route('comments.edit', $comment->Id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                    <button data-id="{{$comment->Id}}" type="button" title="delete" class="btn btn-danger delete" data-toggle="modal" data-target="#commentDelete">
                      <i class="fa fa-window-close"></i>
                    </button>
                    </a>
                  </div>
              </td>
          </tr>
          
          @endforeach   
        <!-- Delete Modal -->
        <div class="modal fade" id="commentDelete" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteModal">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form method="POST" id="delete-form" action="{{route('comments.destroy', 'deleteId')}}">
                @csrf
                @method('DELETE')
                <input type="hidden" id="deleteId" name="deleteId">
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
        <!-- End of Delete Modal -->
      </table>
      {{ $comments->links() }} 
    </section> 
  </div>
<script type="application/javascript">
  $(document).on('click','.delete',function(){
    let id = $(this).attr('data-id');
    $('#deleteId').val(id);
  });
</script>
@endsection

