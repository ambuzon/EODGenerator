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
      <label for="exampleFormControlSelect2">He demonstrates <span style="color:blue">[input]</span> understanding of the topics that we have covered this semester he is readily able to recall the taught strategies with a high degree of accuracy. He is always able to apply his maths knowoledge to suit a particular problem or situation.</label>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="level2b" id="level2b" value="an excellent" checked>
        <label class="form-check-label" for="inlineRadio2">Excellent</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="level2b" id="level2b" value="a very good">
        <label class="form-check-label" for="inlineRadio2">Very Good</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="level2b" id="level2b" value="a sound">
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
        <select class="form-control" id="level3a" name="level3a" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments3a as $index => $value)
            <option>{{$comments3a[$index]}}</option>   
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">3b -How they went on mid-term/end of term test</label>
        <select class="form-control" id="level3b" name="level3b" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments3b as $index => $value)
            <option>{{$comments3b[$index]}}</option>   
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">3c -How they went on mid-term/end of term test</label>
        <select class="form-control" id="level3c" name="level3c" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments3c as $index => $value)
            <option>{{$comments3c[$index]}}</option>   
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4a -Areas that need to be improved/How to Improve Them</label>
        <select class="form-control" id="level4a" name="level4a" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments4a as $index => $value)
            <option>{{$comments4a[$index]}}</option>   
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4b -Areas that need to be improved/How to Improve Them</label>
        <select class="form-control" id="level4b" name="level4b" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments4b as $index => $value)
          <option>{{$comments4b[$index]}}</option>   
        @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4c -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Making Careless Mistakes</label>
        <select class="form-control" id="level4c" name="level4c" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments4c1 as $index => $value)
            <option>{{$comments4c1[$index]}}</option>   
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4c -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Setting Out/Book Work</label>
        <select class="form-control" id="level4c1" name="level4c1" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments4c2 as $index => $value)
            <option>{{$comments4c2[$index]}}</option>   
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4c -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Attitude</label>
        <select class="form-control" id="level4c2" name="level4c2" oninput="getResults()">
          <option>[None]</option>
          @foreach ($comments4c3 as $index => $value)
            <option>{{$comments4c3[$index]}}</option>   
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4c -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Understanding /Mastery of the Curriculum</label>
        <select class="form-control" id="level4c3" name="level4c3" oninput="getResults()">
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

      function getLevel2a(){
        var level2a = document.getElementById("level2a");
        level2a = level2a.options[level2a.selectedIndex].value;
        return level2a;
      }

      function getLevel2b(){
        var level2b = document.querySelector("input[name=level2b]:checked").value;
        var level2b_value = "He demonstrates "+level2b+" understanding of the topics that we have covered this semester he is readily able to recall the taught strategies with a high degree of accuracy. He is always able to apply his maths knowoledge to suit a particular problem or situation.";
        return level2b_value;
      }

      function getLevel2c(){
        var level2c = document.getElementById("level2c");
        level2c = level2c.options[level2c.selectedIndex].value;
        return level2c;
      }

      function getLevel3a(){
        var level3a = document.getElementById("level3a");
        level3a = level3a.options[level3a.selectedIndex].value;
        return level3a;
      }

      function getLevel3b(){
        var level3b = document.getElementById("level3b");
        level3b = level3b.options[level3b.selectedIndex].value;
        return level3b;
      }

      function getLevel3c(){
        var level3c = document.getElementById("level3c");
        level3c = level3c.options[level3c.selectedIndex].value;
        return level3c;
      }
      
      function getLevel4a(){
        var level4a = document.getElementById("level4a");
        level4a = level4a.options[level4a.selectedIndex].value;
        return level4a;
      }

      function getLevel4b(){
        var level4b = document.getElementById("level4b");
        level4b = level4b.options[level4b.selectedIndex].value;
        return level4b;
      }

      function getLevel4c(){
        var level4c = document.getElementById("level4c");
        level4c = level4c.options[level4c.selectedIndex].value;
        return level4c;
      }

      function getLevel4c1(){
        var level4c1 = document.getElementById("level4c1");
        level4c1 = level4c1.options[level4c1.selectedIndex].value;
        return level4c1;
      }

      function getLevel4c2(){
        var level4c2 = document.getElementById("level4c2");
        level4c2 = level4c2.options[level4c2.selectedIndex].value;
        return level4c2;
      }

      function getLevel4c3(){
        var level4c3 = document.getElementById("level4c3");
        level4c3 = level4c3.options[level4c3.selectedIndex].value;
        return level4c3;
      }


      function getResults(){
        var result = getName() + " " + 
                    getLevel0() + " " + 
                    getLevel1() + " " + 
                    getLevel2a() + " " + 
                    getLevel2b() + " " + 
                    getLevel2c() + " " + 
                    getLevel3a() + " " + 
                    getLevel3b() + " " + 
                    getLevel3c() + " " + 
                    getLevel4a() + " " + 
                    getLevel4b() + " " + 
                    getLevel4c() + " " + 
                    getLevel4c1() + " " + 
                    getLevel4c2() + " " + 
                    getLevel4c3();

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