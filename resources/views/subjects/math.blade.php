@extends('layouts.report')
@section('content')


    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Math</h1>
        </div>
    </div>
    <div class="container">

      <div class="form-group">
        <label for="selectStudent"><b>Students In Database</b></label>
        <select class="form-control" id="selectStudent" name="selectStudent" oninput="selectStudent(); getResults()">
          <option value = "">--Select Student--</option>
          @foreach ($students as $student)
        <option value="{{$student->Nickname}}" data-gender="{{$student->Gender}}">{{$student->FirstName." ".$student->MiddleInitial." ".$student->LastName." "."(".$student->Nickname.")"}}</option>   
        @endforeach
        </select>
      </div>
      
      <form action="/math/submit" method="post">
        {{ csrf_field() }}
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Student Name" name="firstName" id="firstName" oninput="getResults()" required>
          </div>
        </div>
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="Male" oninput="getResults()" value="Male" checked>
          <label class="form-check-label" for="Male">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="Female" oninput="getResults()" value="Female">
          <label class="form-check-label" for="Female">Female</label>
        </div>
        <br>
        <br>

        <label for="level0"><b>0 -Level of Overall Achievement</b></label>
        <br>
        <label>Demonstrates achievement of <span style="color:blue">[input]</span> of the expected learning standards addressed during the current reporting period.</label>
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="level0" id="all" oninput="getResults()" value="all" checked>
          <label class="form-check-label" for="all">all</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="level0" id="most" oninput="getResults()" value="most">
          <label class="form-check-label" for="most">most</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="level0" id="some" oninput="getResults()" value="some">
          <label class="form-check-label" for="some">some</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="level0" id="few" oninput="getResults()" value="few">
          <label class="form-check-label" for="few">few</label>
        </div>
        
        <br>
        <br>
          
        <div class="form-group">
          <label for="level1"><b>1 -Attitude /Approach</b></label>
          <select class="form-control" id="level1" name="level1" oninput="getResults()">
            <option>[None]</option>
            @foreach ($comments1 as $index => $value)
              {{-- For adding numbers later, {{$index+1}}) --}}
              <option>{{$comments1[$index]}}</option>   
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="level2a"><b>2a -Strengths</b></label>
          <select class="form-control" id="level2a" name="level2a" oninput="getResults()">
            <option>[None]</option>
            @foreach ($comments2a as $index => $value)
              <option>{{$comments2a[$index]}}</option>   
            @endforeach
          </select>
        </div>

        <label><b>2b -Strengths</b></label>
        <br>
        <label>He demonstrates <span style="color:blue">[input]</span> understanding of the topics that we have covered this semester he is readily able to recall the taught strategies with a high degree of accuracy. He is always able to apply his maths knowledge to suit a particular problem or situation.</label>
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="level2b" id="excellent" oninput="getResults()" value="an excellent" checked>
          <label class="form-check-label" for="excellent">Excellent</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="level2b" id="very good" oninput="getResults()" value="a very good">
          <label class="form-check-label" for="very good">Very Good</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="level2b" id="sound" oninput="getResults()" value="a sound">
          <label class="form-check-label" for="sound">Sound</label>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label for="level2c"><b>2c -Strengths</b></label>
          <select class="form-control" id="level2c" name="level2c" oninput="getResults()">
            <option>[None]</option>
            @foreach ($comments2c as $index => $value)
              <option>{{$comments2c[$index]}}</option>   
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="level3a"><b>3a -How they went on mid-term/end of term test</b></label>
          <select class="form-control" id="level3a" name="level3a" oninput="getResults();">
            <option>[None]</option>
            @foreach ($comments3a as $index => $value)
              <option>{{$comments3a[$index]}}</option>   
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="level3b"><b>3b -How they went on mid-term/end of term test</b></label>
          <select class="form-control" id="level3b" name="level3b" oninput="getResults();">
            <option>[None]</option>
            @foreach ($comments3b as $index => $value)
              <option>{{$comments3b[$index]}}</option>   
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label form="level3c"><b>3c -How they went on mid-term/end of term test</b></label>
          <select class="form-control" id="level3c" name="level3c" oninput="getResults();">
            <option>[None]</option>
            @foreach ($comments3c as $index => $value)
              <option>{{$comments3c[$index]}}</option>   
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="level4a"><b>4a -Areas that need to be improved/How to Improve Them</b></label>
          <select class="form-control" id="level4a" name="level4a" oninput="getResults();">
            <option>[None]</option>
            @foreach ($comments4a as $index => $value)
              <option>{{$comments4a[$index]}}</option>   
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="level4b"><b>4b -Areas that need to be improved/How to Improve Them</b></label>
          <select class="form-control" id="level4b" name="level4b" oninput="getResults();">
            <option>[None]</option>
            @foreach ($comments4b as $index => $value)
            <option>{{$comments4b[$index]}}</option>   
          @endforeach
          </select>
        </div>

        <div>
          <label for="level4c"><b>4c -Areas that need to be improved/How to Improve Them</b></label>
          <label for="level4c">Category: Making Careless Mistakes</label>
          <select class="form-control" id="level4c" name="level4c" oninput="getResults();">
            <option>[None]</option>
            @foreach ($comments4c1 as $index => $value)
              <option>{{$comments4c1[$index]}}</option>   
            @endforeach
          </select>
        </div>
        <br>
        <div class="form-group">
          <label for="level4dCategories" id="level4dCategories"><b>4d -Areas that need to be improved/How to Improve Them</b></label>
          
          <div> 
            <label for="level4d1">Category: Setting Out/Book Work</label>
            <select class="form-control" id="level4d1" name="level4d1" oninput="getResults();formBlockMath4d();">
              <option>[None]</option>
              @foreach ($comments4c2 as $index => $value)
                <option>{{$comments4c2[$index]}}</option>   
              @endforeach
            </select>
          </div>
          
          <div>  
            <label for="level4d2">Category: Attitude</label>
            <select class="form-control" id="level4d2" name="level4d2" oninput="getResults();formBlockMath4d();">
              <option>[None]</option>
              @foreach ($comments4c3 as $index => $value)
                <option>{{$comments4c3[$index]}}</option>   
              @endforeach
            </select>
          </div>
          
          <div>  
            <label for="level4d3">Category: Understanding /Mastery of the Curriculum</label>
            <select class="form-control" id="level4d3" name="level4d3" oninput="getResults();formBlockMath4d();">
              <option>[None]</option>
              @foreach ($comments4c4 as $index => $value)
                <option>{{$comments4c4[$index]}}</option>   
              @endforeach
            </select>
          </div>
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