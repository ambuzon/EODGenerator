@extends('layouts.report')
@section('content')

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Math</h1>
        </div>
    </div>
    <div class="container">
      
    <form action="/math/submit" method="post">
      {{ csrf_field() }}
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Student Name" name="firstName" id="firstName" oninput="getResults()" required>
        </div>
      </div>
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

      <label for="exampleFormControlSelect2">0 -Level of Overall Achievement</label>
      <br>
      <label for="exampleFormControlSelect2">Demonstrates achievement of <span style="color:blue">[input]</span> of the expected learning standards addressed during the current reporting period.</label>
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
        
      <div class="form-group">
        <label for="exampleFormControlSelect2">1 -Attitude /Approach</label>
        <select class="form-control" id="level1" name="level1" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments1 as $index => $value)
            {{-- For adding numbers later, {{$index+1}}) --}}
            <option>{{$comments1[$index]}}</option>   
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">2a -Strengths</label>
        <select class="form-control" id="level2a" name="level2a" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments2a as $index => $value)
            <option>{{$comments2a[$index]}}</option>   
          @endforeach
        </select>
      </div>

      <br>
      <br>

      <label for="exampleFormControlSelect2">2b -Strengths</label>
      <br>
      <label for="exampleFormControlSelect2">He demonstrates <span style="color:blue">[input]</span> understanding of the topics that we have covered this semester he is readily able to recall the taught strategies with a high degree of accuracy. He is always able to apply his maths knowledge to suit a particular problem or situation.</label>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="level2b" id="level2b" oninput="getResults()" value="an excellent" checked>
        <label class="form-check-label" for="inlineRadio2">Excellent</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="level2b" id="level2b" oninput="getResults()" value="a very good">
        <label class="form-check-label" for="inlineRadio2">Very Good</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="level2b" id="level2b" oninput="getResults()" value="a sound">
        <label class="form-check-label" for="inlineRadio2">Sound</label>
      </div>
      <br>
      <br>

      <div class="form-group">
        <label for="exampleFormControlSelect2">2c -Strengths</label>
        <select class="form-control" id="level2c" name="level2c" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments2c as $index => $value)
            <option>{{$comments2c[$index]}}</option>   
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">3a -How they went on mid-term/end of term test</label>
        <select class="form-control" id="level3a" name="level3a" oninput="getResults();formBlockMath3();">
          <option>[None]</option>
          @foreach ($comments3a as $index => $value)
            <option>{{$comments3a[$index]}}</option>   
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">3b -How they went on mid-term/end of term test</label>
        <select class="form-control" id="level3b" name="level3b" oninput="getResults();formBlockMath3();">
          <option>[None]</option>
          @foreach ($comments3b as $index => $value)
            <option>{{$comments3b[$index]}}</option>   
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">3c -How they went on mid-term/end of term test</label>
        <select class="form-control" id="level3c" name="level3c" oninput="getResults();formBlockMath3();">
          <option>[None]</option>
          @foreach ($comments3c as $index => $value)
            <option>{{$comments3c[$index]}}</option>   
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4a -Areas that need to be improved/How to Improve Them</label>
        <select class="form-control" id="level4a" name="level4a" oninput="getResults();formBlockMath4();">
          <option>[None]</option>
          @foreach ($comments4a as $index => $value)
            <option>{{$comments4a[$index]}}</option>   
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4b -Areas that need to be improved/How to Improve Them</label>
        <select class="form-control" id="level4b" name="level4b" oninput="getResults();formBlockMath4();">
          <option>[None]</option>
          @foreach ($comments4b as $index => $value)
          <option>{{$comments4b[$index]}}</option>   
        @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4c -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Making Careless Mistakes</label>
        <select class="form-control" id="level4c" name="level4c" oninput="getResults();formBlockMath4();">
          <option>[None]</option>
          @foreach ($comments4c1 as $index => $value)
            <option>{{$comments4c1[$index]}}</option>   
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4c -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Setting Out/Book Work</label>
        <select class="form-control" id="level4c1" name="level4c1" oninput="getResults();formBlockMath4();">
          <option>[None]</option>
          @foreach ($comments4c2 as $index => $value)
            <option>{{$comments4c2[$index]}}</option>   
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4c -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Attitude</label>
        <select class="form-control" id="level4c2" name="level4c2" oninput="getResults();formBlockMath4();">
          <option>[None]</option>
          @foreach ($comments4c3 as $index => $value)
            <option>{{$comments4c3[$index]}}</option>   
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4c -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Understanding /Mastery of the Curriculum</label>
        <select class="form-control" id="level4c3" name="level4c3" oninput="getResults();formBlockMath4();">
          <option>[None]</option>
          @foreach ($comments4c4 as $index => $value)
            <option>{{$comments4c4[$index]}}</option>   
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
    <script src="{{ asset('js/math.js') }}"></script>

@endsection