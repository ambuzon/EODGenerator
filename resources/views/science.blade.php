<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Science</h1>
        </div>
    </div>
    <div class="container">
      
    <form action="/science/submit" method="post">
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
          <option>He has approached all aspects of science work with enthusiasm and interest.</option>
          <option>He really enjoys science and has approached all aspects of our work with interest and enthusiasm.</option>
          <option>He has really enjoyed all aspects of the science work we have covered this term and is developing good investigational techniques.</option>
          <option>He has really enjoyed science and is developing good investigational techniques.</option>
          <option>He has a questioning and inquisitive mind and can offer suggestions and ideas in class discussions.</option>
          <option>He has a fantastic attitude, good general knowledge and is willing to share this with others during class discussions.</option>
          <option>He has a positive attitude, participates well during class discussions and can always be relied on to offer ideas and suggestions.</option>
          <option>[student], your attitude in class continues to impress me. You always arrive in a positive frame of mind, and I can see that you are eager to learn new things. Throughout this quarter you have remained focused during lessons. You listen carefully to instructions and to other students' ideas and opinions, which you use to help make your own conclusions.</option>
          <option>[student], you have a great attitude in science and always arrive to class eager to learn and succeed. You always listen carefully to instructions and I can rely on you to carry out experiments safely and reliably. It is pleasing to see how you often help others when they are unsure, and you will share your ideas and opinions too.</option>
          <option>[student], you have continued to maintain a positive attitude to learning in science. It is clear how you want to succeed and you are trying to take more responsibility for your learning. When you are unsure you ask for help, and I am encouraged with the way you take time to improve your work at home.</option>
          <option>[student], each lesson I can always trust you to work responsibly, and you should be congratulated on the positive way you can collaborate with others.</option>
          <option>He has shown a quiet interest in the areas we have covered in science.</option>
          <option>He has shown a quiet interest in the areas we have covered in science and is developing good investigational techniques.</option>
          <option>[student], you appear to be enjoying science, and I am pleased that you arrive to class in a positive frame of mind. Sometimes, you will offer your answers during discussions, which demonstrates your eagerness to succeed.</option>
          <option>This quarter I can see that you are enjoying science. ……, you have continued to remain inquisitive and sometimes you will offer your answers and ideas. On the whole you seem focused, but I would like you to concentrate on using your time in class wisely, and to not let yourself get distracted.</option>
          <option>I can see that you are interested in the subject, and I am pleased that you have continued to offer your ideas and opinions. It is fantastic that you are eager to participate, but try to always remember to raise your hand rather than calling out when you want to share.</option>
          <option>On the whole you have continued to maintain a positive attitude to learning. When you arrive to class you will usually settle quickly ready for the lesson, and I can see that you are enthusiastic about science with the answers you sometimes offer.</option>
          <option>He has a good work ethic and rarely needs prompting from the teacher when working on a task.</option>
          <option>He has a good attitude to science and is able to work independently on the tasks assigned to him/her.</option>
          <option>He enjoys working in all areas of science and shows good application. ……………..has made good progress as a result.</option>
          <option>He has shown good application in science, making steady progress in all areas.</option>
          <option>He enjoys work in all areas of science and has responded well to tasks set, making good progress as a result.</option>
          <option>He enjoys work in all areas of science and has responded well to tasks set.</option>
          <option>He attitude to learning new scientific concepts is positive and he has developed a fair understanding of them.</option>
          <option>He is a competent scientist who works quickly and diligently on the tasks assigned to him.</option>
          <option>He is working steadily and understands basic concepts.</option>
          <option>He is a hard-working student who is making good progress. He is eager to learn and always tries to do his best in every lesson.</option>
          <option>He is making a conscientious effort, but he sometimes finds it difficult to apply new concepts learnt.</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">2 -Strengths</label>
        <select class="form-control" id="level2" name="level2" oninput="getResults()">
          <option>[None]</option>
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
        <label for="exampleFormControlSelect2">3 -How they went on mid-term/end of term test</label>
        <select class="form-control" id="level3" name="level3" oninput="getResults()">
          <option>[None]</option>
          <option>He performed exceptionally well on the end of term test. This is testament to his hard work in class and this highlights his excellent understanding of the concepts that were covered.</option>
          <option>He achieved an excellent score on the term test. This highlights his excellent understanding of the  concepts that were covered.</option>
          <option>His assessment results were outstanding and are indicative of his broad range of skills and knowledge across the curriculum.</option>
          <option>His assessment results were excellent. He continues to respond to teacher feedback when given, and demonstrates high levels of maturity and self-efficacy in his learning approach.</option>
          <option>His excellent assessment results are a reflection of his preparation and diligence, and he should be commended for this.</option>
          <option>I was extremely pleased with his exam results. He has worked very hard and has reaped the rewards.</option>
          <option>He should be very happy with his examination results. He has worked very hard this term  and deserves them.</option>
          <option>His exam performance was a splendid effort. It clearly showed that everything we have covered so far in class has been understood and that a lot of effective revision had been completed.</option>
          <option>He performed very well on the end of term test. He has worked very well in class and he very good grade reflects a very thorough understanding of the concepts that were covered.</option>
          <option>He test score was very good and this confirms that he has mastered and can apply the various  concepts that were introduced this term.</option>
          <option>His assessment results were very high, indicating a strong level of understanding and skills in all domains.</option>
          <option>His exam result was a very pleasing effort with the vast majority of questions answered maturely and correctly. This positive performance bodes well for future academic results in this subject area.</option>
          <option>This was a very encouraging result in the end of term examination and I was pleased that clearly some effective revision had been undertaken. A little more attention to detail in a few areas, would have improved on this result, but generally, this was a very strong performance.</option>
          <option>I was very pleased to mark [student]. exam paper as it showed that a lot of revision had been done and he was able to deal with all the questions effectively. This effective approach to exam preparation is to be praised and encouraged for all future tests and exams. Well done!</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">4 -Areas that need to be improved/How to Improve Them</label>
        <select class="form-control" id="level4" name="level4" oninput="getResults()">
          <option>[None]</option>
          <option>The ability of him to comprehend what a question is asking him to do is the single biggest factor holding him back in science. He needs to read lots of books in English and do as much comprehension work as he can.</option>
          <option>His limited reading comprehension skills often interferes with his ability to perform well on science tests. He needs to learn science vocabulary and other technical terms about the topics that were covered.</option>
          <option>His limited vocabulary has impeded his progress to date. He often struggles interpreting what a question or task is demanding. He needs to improve the range of his English vocabulary in general as well as acquiring scientific and other technical terms about the topics that were studied.</option>
          <option>He has worked hard in science this term, however; his limited vocabulary means that he often has difficulty interpreting what a question is asking. This is a shame as he generally understands new concepts when they are introduced. He needs to broaden his science vocabulary and other technical terms about the topics that were studied.</option>
          <option>He always tries his best during the science lessons. Unfortunately his progress to date has been hampered by his lack of vocabulary and he rather weak comprehension skills. It is essential that he puts a lot of effort into broadening his vocabulary and improving his reading comprehension skills. Utilising the Raz-Kids website will enable him to make steps towards remedying this area of weakness.</option>
          <option>He needs to acquire science and technology vocabulary and use it in both oral and written responses</option>
          <option>He needs to continue working on his experimental write ups, particularly the conclusion and evaluation of experiments. He also needs to ensure that he fully explains himself using the correct language when he is answering questions. At times he will put a brief answer down and expect that I will understand what he means. With a little more depth in his answers, he will continue to improve next term.</option>
          <option>He needs to make sure that he applies this knowledge in giving more detailed written and verbal answers.</option>
          <option>His written work has been rather variable, sometimes he work shows the required detail, while other work is missing important information. I am looking forward to his writing more detailed responses in all of his work in the coming term.</option>
          <option>Although the quality of his answers is usually excellent, he needs to work on the presentation of his written work. I am looking forward to him setting his work out neatly and using a ruler when drawing diagrams or charts.</option>
          <option>He does periodically need to be reminded to keep his own standards and expectations for written work high and not be satisfied with anything but his best work. When he has been engaged and focused on the task this has improved.</option>
          <option>He to write more thoughtful explanations for observations made during scientific investigations and to include evidence to support his ideas.</option>
          <option>He needs to describe his observations more fully and link them clearly to the purpose of the experiment.</option>
        </select>
      </div>
      <div class="form-group">
        <label for="result">Result</label>
        <textarea class="form-control" id="result" rows="3"></textarea>
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
</body>
</html>