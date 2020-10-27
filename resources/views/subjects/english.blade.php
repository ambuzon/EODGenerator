@extends('layouts.report')
@section('content')

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">English</h1>
        </div>
    </div>
    <div class="container">
      
    <form action="/english/submit" method="post">
      {{ csrf_field() }}
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Student Name" name="firstName" id="firstName" oninput="getResults()" required>
        </div>
      </div>
      <br>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="gender" oninput="getResults()" value="Male" checked>
        <label class="form-check-label" for="inlineRadio1">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="gender" oninput="getResults()" value="Female">
        <label class="form-check-label" for="inlineRadio2">Female</label>
      </div>
      <br>
      <br>
      <label for="exampleFormControlSelect2"><b>0 -Level of Overall Achievement</b></label>
      <br>
      <label for="exampleFormControlSelect2"><i>"demonstrates achievement of <span style="color:red">[input]</span> of the expected learning standards addressed during the current reporting period."</i></label>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="level0" id="level0" oninput="getResults()" value="all" checked>
        <label class="form-check-label" for="inlineRadio2">all</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="level0" id="level0" oninput="getResults()" value="most">
        <label class="form-check-label" for="inlineRadio2">most</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="level0" id="level0" oninput="getResults()" value="some">
        <label class="form-check-label" for="inlineRadio2">some</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="level0" id="level0" oninput="getResults()" value="few">
        <label class="form-check-label" for="inlineRadio2">few</label>
      </div>
      <br>
      <br>
      <div class="form-group">
        <label for="level1"><b>1 -Attitude/Approach</b></label>
        <select class="form-control" id="level1" name="level1" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments1 as $index => $value)
            {{-- For adding numbers later, {{$index+1}}) --}}
            <option>{{$comments1[$index]}}</option>   
          @endforeach
        </select>
      </div>
      <br>
      <div class="form-group">
        <label for="level2"><b>2 -Strengths</b></label>
        <select class="form-control" id="level2" name="level2" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments2 as $index => $value)
            <option>{{$comments2[$index]}}</option>   
          @endforeach
          
        </select>
      </div>
      <br>
      <div class="form-group">
        <label for="level3"><b>3 -How they went on mid-term/end of term test</b></label>
        <select class="form-control" id="level3" name="level3" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments3 as $index => $value)
          <option>{{$comments3[$index]}}</option>   
        @endforeach
        </select>
      </div>
      <br>
      <div class="form-group">
        <label for="level4"><b>4 -Areas that need to be improved/How to Improve Them</b></label>
        <select class="form-control" id="level4" name="level4" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments4 as $index => $value)
          <option>{{$comments4[$index]}}</option>   
        @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="result">Result (Please Edit Only Once Finished Placing Comments)</label>
        <textarea class="form-control" id="result" rows="15"></textarea>
      </div>
      <div class="col-auto my-1">
        <a href="/" class="btn btn-primary"><i class="fa fa-angle-left">
          </i> Back
        </a>
        <button type="button" class="btn btn-warning" onclick="myFunction()">Copy text</button>
      </div>  
    </form>
    </div>
<script src="{{ asset('js/subjects.js') }}">
  
</script>
@endsection