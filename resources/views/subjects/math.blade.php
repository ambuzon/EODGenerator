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
          <option>He has displayed great application in all aspects of Mathematics and demonstrates he is capable of working at a high level.</option>
          <option>He has worked extremely hard in Mathematics this term and his/her weekly test scores are testament to him diligence and perseverance.</option>
          <option>He is a very competent mathematician who works quickly and diligently on the tasks assigned to him.</option>
          <option>He has worked extremely conscientiously and with a pleasing enthusiasm this term.</option>
          <option>He has a very positive attitude to mathematics. This is evident through him questioning, responses to teacher feedback and through a diligent approach to the work set.</option>
          <option>He has a true enthusiasm and gift for Mathematics. His effort is reflected in his high grade. He is also an excellent class member, as He frequently assists other students with concepts, not answers.</option>
          <option>He has a high aptitude and motivation for Mathematics.</option>
          <option>He is an adept and hardworking mathematician who is able to make connections between skills, knowledge and prior learning experiences in order to explain mathematical concepts.</option>
          <option>He is an excellent participant in mathematics class.</option>
          <option>He is an engaged and inquisitive mathematics student.</option>
          <option>He is highly motivated to develop the Mathematics skills.</option>
          <option>He demonstrates excellent work habits in Mathematics class.</option>
          <option>He approaches learning opportunities with enthusiasm and is determined to master new skills.</option>
          <option>He is a hardworking and resilient student in Mathematics class.</option>
          <option>He tries really hard in Mathematics, but he is finding it challenging to grasp various concepts.</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">2a -Strengths</label>
        <select class="form-control" id="level2a" name="level2a" oninput="getResults()">
          <option>[None]</option>
          <option>He has excellent mental maths skills and is able to do calculations both quickly and accurately.</option>
          <option>He has excellent mental maths skills and readily acquires difficult concepts when introduced</option>
          <option>He has good mental maths skills and is usually able to do calculations both quickly and accurately.</option>
          <option>He has average mental maths skills and is generally able to do calculations reasonably quickly and accurately.</option>
          <option>He has good mental Maths skills and completes the assigned work with very little support from the teacher</option>
          <option>He knows his timetables but is somewhat slow in recalling these when doing maths calculations and problems. </option>
          <option>He lack of speed means that he sometimes does not complete the class tasks assigned to him or is unable to finish weekly and term tests.</option>
          <option>He is able to do mental calculations but is somewhat slow in doing these when working on maths calculations and problems. He lack of speed means that he sometimes does not complete the class tasks assigned to him or is unable to finish weekly and term tests.</option>
          <option>He knows his times tables, albeit quite slowly, and he is generally able to grasp new concepts when they are introduced. Unfortunately he is  slow at doing mental calculations and other simple computations. These limitations have impeded him progress in mathematics up until now. </option>
          <option>Although his confidence in recalling times tables is improving, he needs to keep working on these to build up speed and accuracy. This would enable him to complete more of the class work in the designated time</option>
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
          <option>He is usually able to work independently on the tasks but on occasions needs prompting from the teacher so that the tasks can be completed in the allotted time.</option>
          <option>He always approaches lessons with a positive learning attitude and has achieved excellent results on the weekly tests.</option>
          <option>He always approaches lessons with a positive learning attitude and has achieved good results on the weekly tests.</option>
          <option>He usually approaches lessons with a positive learning attitude and has achieved sound results on the weekly tests.</option>
          <option>He continues to try hard in maths and particularly enjoys the more practical and creative areas of the subject.</option>
          <option>He approaches the maths lessons with a positive mind set and always strives to do his best even though he finds the subject of maths quite challenging.</option>
          <option>He is attentive during maths lessons and always follows the required steps to the various problems. On occasions he needs support and further clarification and examples about the concept.</option>
          <option>He works reasonably well on the tasks assigned to him but on occasions he becomes distracted by those around him.</option>
          <option>He usually completes the tasks assigned to him but he is reluctant to follow the guidelines that were set out by the teacher. This results in him having difficulty in finding the solution to the problems that were posed.</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">3a -How they went on mid-term/end of term test</label>
        <select class="form-control" id="level3a" name="level3a" oninput="getResults()">
          <option>[None]</option>
          <option>He performed exceptionally well on the end of term test. This is testament to his hard work in class and this highlights his excellent understanding of the concepts that were covered.</option>
          <option>He achieved an excellent score on the term test. This highlights his excellent understanding of the  concepts that were covered.</option>
          <option>His assessment results were outstanding and are indicative of his broad range of skills and knowledge across the curriculum.</option>
          <option>His assessment results were excellent. He continues to respond to teacher feedback when given, and demonstrates high levels of maturity and self-efficacy in his learning approach.</option>
          <option>His excellent assessment results are a reflection of his preparation and diligence, and he should be commended for this.</option>
          <option>I was extremely pleased with his exam results. He has worked very hard and has reaped the rewards.</option>
          <option>He should be very happy with his examination results. He has worked very hard this term  and deserves them.</option>
          <option>His exam performance was a splendid effort. It clearly showed that everything we have covered so far in class has been understood and that a lot of effective revision had been completed.</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">3b -How they went on mid-term/end of term test</label>
        <select class="form-control" id="level3b" name="level3b" oninput="getResults()">
          <option>[None]</option>
          <option>He performed very well on the end of term test. He has worked very well in class and his very good grade reflects a very thorough understanding of the concepts that were covered.</option>
          <option>His test score was very good and this confirms that he has mastered and can apply the various concepts that were introduced this term.</option>
          <option>His assessment results were very high, indicating a strong level of understanding and skills in all domains.</option>
          <option>His exam result was a very pleasing effort with the vast majority of questions answered maturely and correctly. This positive performance bodes well for future academic results in this subject area.</option>
          <option>I was very pleased to mark [student]'s exam paper as it showed that a lot of revision had been done and He was able to deal with all the questions effectively. This effective approach to exam preparation is to be praised and encouraged for all future tests and exams. Well done!</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">3c -How they went on mid-term/end of term test</label>
        <select class="form-control" id="level3c" name="level3c" oninput="getResults()">
          <option>[None]</option>
          <option>His examination result was very encouraging as it showed a solid level of understanding and reasonable examination techniques. With continued effort and application his long term prospects in this subject area are looking good.</option>
          <option>His exam performances were very encouraging and it confirmed that he is clearly understanding the material we have covered so far and that adequate revision had be done in the weeks prior to the examination.</option>
          <option>He achieved a good result on the end of term test. He usually works well in class and his exam score reflects a sound understanding of the concepts that were covered. Some of the areas that were not done all that well were ………………… and ………………………………..   He should review these topics to ensure that there are no gaps in his learning.</option>
          <option>He achieved a solid result on the end of term test. Unfortunately his performance was marred by a lack of concern for accuracy and a reluctance to read questions and instructions carefully. He struggled with ……… and ……………….., and it is essential that he reviews these topics.</option>
          <option>He has produced quite satisfactory results in the mid-term examination, however, they also indicate that he will need to work on time-management and being able to complete questions within a set time.</option>
          <option>Although his exam results were acceptable, I believe he could have done better with a more committed approach.</option>
          <option>He did not appear to take exam study very seriously and the grade he earned reflects this.</option>
          <option>His assessment results are mixed. This indicates that he understands how to prepare for and succeed on tests, but does not always put forward his best effort.</option>
          <option>His exam performances were very encouraging and it confirmed that he is clearly understanding the material we have covered so far and that adequate revision had be done in the weeks prior to the examination.</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4a -Areas that need to be improved/How to Improve Them</label>
        <select class="form-control" id="level4a" name="level4a" oninput="getResults()">
          <option>[None]</option>
          <option>I would like him to improve the speed and accuracy of mental computations as well as reviewing concepts that were introduced in class. He would benefit by practicing his timetables and number bonds at home.</option>
          <option>An area of concern is the very slow recall of basic number facts, number bonds and the timetables. This has severely hampered his progress in mathematics to date. I am looking forward to him  practicing these at home as it will allow him to achieve much greater success in maths.</option>
          <option>Unfortunately he is slow at doing mental calculations and other simple computations. These limitations have impeded his progress in mathematics up until now. Reviewing his times tables and number bonds at home will place him in a much better position to achieve well in maths.      </option>
          <option>Unfortunately he is very slow at doing mental calculations and other simple computations. These limitations have impeded him progress in mathematics up until now. Reviewing his times tables and number bonds at home will place him in a much better position to achieve well in maths.</option>
          <option>He knows his basic number facts but is somewhat slow in recalling these when required. This lack of speed with basic computational skills means that he has difficulty completing the set work and tests in the required time. He would benefit by practicing his timetables and number bonds at home.</option>
          <option>He is slow at doing basic computations and as such this results in his being unable to complete much of the set work. This means that he does not get as much practice in mastering the various strategies that were introduced. I would like him to  practice his timetables and number bonds at home. I am confident that an improvement in his computational ability will allow him to achieve much better grades in this subject.</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4b -Areas that need to be improved/How to Improve Them</label>
        <select class="form-control" id="level4b" name="level4b" oninput="getResults()">
          <option>[None]</option>
          <option>He has made some progress with respect to problem solving this term but this is an area that she has to work hard on to master. He would profit by first trying to identify the most appropriate strategy to tackle the problem as well as showing a lot more detailed working. If he adopted this more structured approach she should have a much higher degree of success with this challenging area of Maths.</option>
          <option>He has made some progress with respect to problem solving this term but this is still a difficult area of mathematics for him. He would benefit by first trying to identify the most appropriate strategy as well as showing a lot more detailed working.</option>
          <option>He has weak problem solving skills as him fails to draw the necessary diagram or bar model. If he did this when faced with a challenging problem, I am confident that he would have a much greater chance of finding the solution. I am looking forward to him including the required working when he is doing problem solving in maths.</option>
          <option>He is struggling with the problem solving component of the curriculum. He sometimes fails to draw the necessary diagram or bar model despite being constantly reminded about this. He needs to realize that much of the maths at the Grade his level cannot be done mentally and requires following some set procedures. If he is willing to adopt the necessary detail in his working out, he will undoubtedly be able to achieve much better grades in this subject.</option>
          <option>He has made little progress with the problem solving component of the course as this requires perseverance and he at this stage doesn’t want to place him outside her comfort zone. I am looking forward to him adopting a far most positive attitude towards maths next term.</option>
          <option>He finds the problem solving element of mathematics rather challenging. He could address this issue by following the taught procedures as well as by setting his work out more neatly and in more detail. If he adopts this approach, I am confident that he will be able to make good progress in the problem solving component of this subject.</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4c -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Making Careless Mistakes</label>
        <select class="form-control" id="level4c" name="level4c" oninput="getResults()">
          <option>[None]</option>
          <option>He likes to do things quickly and he is often lazy to set his work out properly or go through the necessary required steps that a particular problem demands.  This results in him either making careless errors or being unable to solve a problem. Next term, I would like him to show all his working and well as approach his work in a far more methodical way. This more structured approach will enable Reagan to achieve results which truly reflect his capabilities in this subject.</option>
          <option>Next term, I would like to him to work more slowly on the tasks to ensure a higher degree of accuracy in his work. This will enable him to achieve grades that truly reflect his ability in this subject.  </option>
          <option>One area that he needs to improve is the speed in which he completes tasks. On occasions he is to busy socializing rather than focusing on completing the assigned tasks. I am looking forward to him being more diligent and focused in the coming term.</option>
          <option>An area of concern is the speed at which he completes set tasks and exams he often requires constant prompting from the teacher before he makes a start on his work. Next term, I would like to see him become far more independent in the learning process.</option>
          <option>Next term, I would like him to work at a slower pace in order to read the questions more thoroughly and to review him completed work.</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4c -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Setting Out/Book Work</label>
        <select class="form-control" id="level4c1" name="level4c1" oninput="getResults()">
          <option>[None]</option>
          <option>One area that he needs to improve is the setting out of his work. He has a tendency to be a little messy and disorganized and this result in careless errors being made. I am looking forward to an improvement in his bookwork in the coming term.</option>
          <option>He needs to set his work out much more neatly and to ensure that all the working is shown. This will result in his achieving a much higher success rate with problems when they are posed.</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4c -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Attitude</label>
        <select class="form-control" id="level4c2" name="level4c2" oninput="getResults()">
          <option>[None]</option>
          <option>He has a very negative view of Maths as a subject and he also believes that he has no aptitude for Maths. If he were to adopt a much more positive attitude to the subject and have more belief in his ability , I believe he would be capable of achieving much better results.</option>
          <option>He has a very poor attitude and often seeks teacher support when he doesn’t really need it. He gives up very easily when faced with a task that is slightly challenging and needs constant motivation to stay on task. He has made little progress with the problem solving component of the course as this requires perseverance and ………… at this stage doesn’t want to place him outside his comfort zone. He needs to make a much more concerted effort in the next term if she is to make any real progress in mathematics.</option>
          <option>He has a poor attitude and often seeks teacher support when he doesn’t really need it. He gives up very easily when faced with a task that is slightly challenging and needs constant motivation to stay on task. Next term I would like him to display a lot more perseverance as well as being far more independent in the learning process.</option>
          <option>He must realize that optimum learning involves making mistakes in a safe classroom environment, asking clarifying questions and reflecting on these learning experiences to help develop a strong understanding.</option>
          <option>He needs to continue to work on following the directions given to prevent the loss of valuable learning time. This is particularly true when entering the room at the beginning of the lesson when start-up directions are written on the board.</option>
          <option>He generally works well in maths, however; he has sometimes found it a challenge to remain focused for extended periods of time and he can easily be distracted by social influences</option>
          <option>I encourage him to continue to take risks when sharing ideas and thoughts with the class as this will help him to make further connections with the concepts being studied.</option>
          <option>He needs to continue to focus on instructions, ask questions when he is unsure of a concept and review material studied in preparation for tests and quizzes on course content.</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">4c -Areas that need to be improved/How to Improve Them</label>
        <label for="exampleFormControlSelect2">Category: Understanding /Mastery of the Curriculum</label>
        <select class="form-control" id="level4c3" name="level4c3" oninput="getResults()">
          <option>[None]</option>
          <option>He demonstrates only a very rudimentary understanding of the topics that we have covered this semester. He struggles applying his maths knowledge in a wide variety of situations. Frequent support needs to be provided to enable him to complete his maths tasks. It is imperative that he reviews the concepts that were covered in class at home.</option>
          <option>He finds the curriculum extremely challenging and requires significant teacher support for the majority of work. he has a great deal of difficulty in applying his maths knowledge to suit a particular problem or situation. He  needs continual teacher support and guidance while is working on all maths activities. It is essential that he reviews the concepts that were covered in class at home.</option>
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