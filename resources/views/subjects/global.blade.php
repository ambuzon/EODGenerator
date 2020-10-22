@extends('layouts.report')
@section('content')

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Global</h1>
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
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" oninput="getResults()" checked>
        <label class="form-check-label" for="inlineRadio1">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="gender" value="Female" oninput="getResults()">
        <label class="form-check-label" for="inlineRadio2">Female</label>
      </div>
      <br>
      <br>




      <label for="exampleFormControlSelect2">0 -Level of Overall Achievement</label>
      <br>
      <label for="exampleFormControlSelect2">Demonstrates achievement of <span style="color:red">[input]</span> of the expected learning standards addressed during the current reporting period.</label>
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
          <option>He has shown a positive attitude towards the subject and involves him to the best of his ability</option>
          <option>He is an extremely able and enthusiastic member of the group, who takes a keen interest in the subject.</option>
          <option>He is an enthusiastic member of the class and asks great questions.</option>
          <option>He is a very conscientious student and puts effort into everything he does.</option>
          <option>He can be relied upon to complete all his class work to the best of his ability and is an enthusiastic participant in class discussions.</option>
          <option>He is a reliable and conscientious student who meets all deadlines and demonstrates an aptitude for this subject.</option>
          <option>He is a pleasant, courteous and cooperative student. He generally participates actively in class discussions and activities, contributing ideas and solutions.</option>
          <option>He is an outstanding student who has worked very hard throughout the term and has performed well on his assessment tasks </option>
          <option>He has a questioning and inquisitive mind and can offer suggestions and ideas in class discussions.</option>
          <option>He has a fantastic attitude, good general knowledge and is willing to share this with others during class discussions.</option>
          <option>He has a positive attitude, participates well during class discussions and can always be relied on to offer ideas and suggestions.</option>
          <option>[student], your attitude in class continues to impress me. You always arrive in a positive frame of mind, and I can see that you are eager to learn new things. Throughout this quarter you have remained focused during lessons. You listen carefully to instructions and to other students' ideas and opinions, which you use to help make your own conclusions</option>
          <option>[student], you have a great attitude in Global Perspectives and always arrive to class eager to learn and succeed. You always listen carefully to instructions and I can rely on you to carry out the assigned tasks responsibly. It is pleasing to see how you often help others when they are unsure, and you will share your ideas and opinions too</option>
          <option>[student], you have continued to maintain a positive attitude to learning in Global Perspectives. It is clear how you want to succeed and you are trying to take more responsibility for your learning. When you are unsure you ask for help, and I am encouraged with the way you take time to improve your work at home</option>
          <option>[student], each lesson I can always trust you to work responsibly, and you should be congratulated on the positive way you can collaborate with others.</option>
          <option>[student], you appear to be enjoying Global Perspectives, and I am pleased that you arrive to class in a positive frame of mind. Sometimes, you will offer your answers during discussions, which demonstrates your eagerness to succeed.</option>
          <option>This quarter I can see that you are enjoying Global Perspectives. [student], you have continued to remain inquisitive and sometimes you will offer your answers and ideas. On the whole you seem focused, but I would like you to concentrate on using your time in class wisely, and to not let yourself get distracted.</option>
          <option>I can see that you are interested in the subject, and I am pleased that you have continued to offer your ideas and opinions. It is fantastic that you are eager to participate, but try to always remember to raise your hand rather than calling out when you want to share</option>
          <option>On the whole you have continued to maintain a positive attitude to learning. When you arrive to class you will usually settle quickly ready for the lesson, and I can see that you are enthusiastic about Global Perspectives with the answers you sometimes offer</option>
          <option>He has a good attitude to Global Perspectives and is able to work independently on the tasks assigned to him/her.</option>
          <option>He enjoys working in all areas of Global Perspectives and shows good application. He has made good progress as a result.</option>
          <option>He enjoys work in all areas of Global Perspectives and has responded well to tasks set, making good progress as a result.</option>
          <option>His attitude to learning new facts and concepts is positive and he has developed a fair understanding of them.</option>
          <option>He is a hard-working student who is making good progress. He is eager to learn and always tries to do his best in every lesson.</option>
          <option>He is an able member of the group, who generally shows an interest in the subject.</option>
          <option>He is a fairly able member of the group, who has shown some interest in the subject.</option>
          <option>He is a pleasant, courteous and cooperative student. He generally participates actively in class discussions and activities, contributing ideas and solutions to global issues.</option>
          <option>He is a cheerful student. While he struggles to maintain focus, he responds positively to a gentle reminder to return to the task at hand.</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">2 -Strengths</label>
        <select class="form-control" id="level2" name="level2" oninput="getResults()">
          <option>[None]</option>
          <option>He is a strong leader in group activities and is great at helping everyone come up with great solutions to difficult problems.</option>
          <option>He works extremely well in a group situation as he is always prepared to consider the opinions and suggestions of the other members.</option>
          <option>He works cooperatively in a group situation and encourages others to contribute.</option>
          <option>He has a quiet conscientious approach to his work in Global Perspectives and is sensitive to the thoughts and opinions of others in the group.</option>
          <option>He has worked hard on the group projects and I have been impressed with the leadership qualities that have emerged.</option>
          <option>He is getting better at working co-operatively in a small group but sometimes needs to remember to listen carefully to others' suggestions and ideas.</option>
          <option>He usually works cooperatively in a group situation, but sometimes he needs extra encouragement to share his bulk of the responsibility.</option>
          <option>He works well in a group situation as he is always prepared to consider the opinions and suggestions of the other members.</option>
          <option>He works well in a group situation but needs to ensure that he does his fair share of work.</option>
          <option>He has good general knowledge and is willing to share this with others during class discussions.</option>
          <option>He participates well during class discussions and can always be relied on to offer ideas and suggestions.</option>
          <option>He has good general knowledge and can always be relied on to offer ideas and suggestions during class discussions.</option>
          <option>He has very good general knowledge and is willing to share this with others during class discussions.</option>
          <option>He has excellent general knowledge and is willing to share this with the rest of the class during discussions.</option>
          <option>He has very good general knowledge, but sometimes lacks the confidence to share this with the class during discussions.</option>
          <option>He has  good general knowledge, and uses this well to think about what he is learning.</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">3 -Projects/Units of Work</label>
        <select class="form-control" id="level3" name="level3" oninput="getResults()">
          <option>[None]</option>
          <option>Approached the unit on his with enthusiasm and did a lot of his own research to find further information about the topic. He produced/delivered an excellent he which highlighted his excellent understanding and application of the concepts that were covered.</option>          He worked enthusiastically and diligently on the unit about. He produced an excellent ( whatever the piece of work was)  which highlighted his excellent understanding and application of the concepts that were covered.</option>
          <option>He worked enthusiastically and diligently on the unit about. He produced a very good ( whatever the piece of work was)   which highlighted his good  understanding and application of the concepts that were covered.</option>
          <option>He worked reasonably well on the unit about. He produced a good( whatever the piece of work was) which highlighted his a good  understanding and application of the concepts that were covered.</option>
          <option>He sometimes worked well on the unit about but _____ occasionally needs prompting from the teacher to stay on task.</option>
          <option>He worked rather erratically on the unit about ______ Somedays he was well focused and engaged whilst on others, he required constant prompting from the teacher to complete the assigned tasks.</option>
          <option>Approached the unit on ______ with enthusiasm and did a lot of his own research to find further information about the topic.</option>
          <option>He enjoyed the unit on _____ and often was able to contribute some insightful comments about the topics and issues that were discussed.</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">4 -Areas that need to be improved/How to Improve Them</label>
        <select class="form-control" id="level4" name="level4" oninput="getResults()">
          <option>[None]</option>
          <option>Unfortunately he only participates occasionally during whole class discussions. When he does so, his comments and questions are thoughtful and show engagement with the material.</option>
          <option>He participates rarely. I would encourage him to participate more often since when he does participate, he comments and questions are thoughtful.</option>
          <option>He does not participate in class discussions. This is a shame since I am convinced that he has much to contribute to class discussions.</option>
          <option>He is always attentive in class, but does not participate often. This is a shame since I am convinced that he has much to contribute to class discussion.</option>
          <option>He participates occasionally in class discussion. I would encourage him to participate more often since when he does participate, he comments and questions are thoughtful.</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4 -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Work Habits/Attitude</label>

        <select class="form-control" id="level4a" name="level4a" oninput="getResults()">
          <option>[None]</option>
          <option>He should focus on completing all tasks to the best of his ability in order to lift his overall performance.</option>
          <option>He should focus on completing all his tasks before engaging in discussions with his peers in order to improve his overall performance.</option>
          <option>In order to improve, he should focus completing his tasks and not allow him to be distracted by others.</option>
          <option>He should focus on completing all tasks on time and to the best of his ability in order to improve his overall performance.</option>
          <option>His project work has been done to a minimum standard and is often handed in late.</option>
          <option>He generally works well, however at times he can be distracted by other members of the class.</option>
          <option>He finds it difficult to keep on task within the lesson, and as a result he can be a disruptive influence in the class.</option>
          <option>He needs to recognise the value of concentration in class, and not allow #h attention to wonder too easily.</option>
          <option>He is capable of achieving good results when concentrating but must avoid the tendency to daydream.</option>
          <option>He needs to be more assertive and develop the self-confidence to express opinions and ideas more readily.</option>
          <option>He must try to develop a more positive attitude towards work rather than attempting to distract other members of the class </option>
          <option>He needs to realise that homework assignments are important and be prepared to give these more time and attention.</option>
          <option>He has a slow work rate and must make a greater effort to work more quickly.</option>
          <option>He must avoid the tendency to become involved in idle talk and needs to recognise the value of concentrated attention.</option>
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

      function getLevel4a(){
        var level4a = document.getElementById("level4a");
        level4a = level4a.options[level4a.selectedIndex].value;
        return level4a;
      }

      function getResults(){
        var result = getName() + " " + 
                     getLevel0() + " " + 
                     getLevel1() + " " + 
                     getLevel2() + " " + 
                     getLevel3() + " " + 
                     getLevel4() + " " + 
                     getLevel4a();

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