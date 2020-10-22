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
    <script>
      function getName() {
          var firstName = document.getElementById('firstName').value;
          return firstName;
      } 

      function getGender(){
        var gender = document.querySelector("input[name=gender]:checked").value;
        return gender;
      }

      function getLevel0(){
        var level0 = document.querySelector("input[name=level0]:checked").value;
        var level0_value = "demonstrates achievement of " + level0 + " of the expected learning standards addressed during the current reporting period."
        return level0_value;
      }

      function getLevel1(){
        var level1 = document.getElementById("level1");
        level1 = level1.options[level1.selectedIndex].value;
        return level1;
      }

      function getLevel2(){
        var level2 = document.getElementById("level2");
        level2 = level2.options[level2.selectedIndex].value;
        return level2;
      }

      function getLevel3(){
        var level3 = document.getElementById("level3");
        level3 = level3.options[level3.selectedIndex].value;
        return level3;
      }
      
      function getLevel4(){
        var level4 = document.getElementById("level4");
        level4 = level4.options[level4.selectedIndex].value;
        return level4;
      }

      function getResults(){
        var result = getName() + " " + getLevel0() + " " + getLevel1() + " " + getLevel2() + " " + getLevel3() + " " + getLevel4();
        if(getGender() === "Female"){
          result = result.replaceAll(" he ", " she ");
          result = result.replaceAll(" He ", " She ");
          result = result.replaceAll(" his ", " her ");
          result = result.replaceAll(" His ", " Her ");
        }
        result = result.replaceAll("[None]", "");
        result = result.replaceAll("[student]", getName());

        document.getElementById('result').value = result;
      }

      function myFunction() {
      /* Get the text field */
      var copyText = document.getElementById("result");

      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /*For mobile devices*/

      /* Copy the text inside the text field */
      document.execCommand("copy");

      /* Alert the copied text */
      alert("Copied the text: " + copyText.value);
    }
  </script>
@endsection