<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

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
          <option>He is an enthusiastic student who is making steady progress.</option>
          <option>He is a diligent, capable student who is making excellent progress in all of his English skills.</option>
          <option>He is a diligent, capable student who is making good progress in all of his English skills</option>
          <option>He has worked very hard this term in all aspects of English and is making commendable progress.</option>
          <option>He works enthusiastically and tries to do his best even though he sometimes finds the subject rather challenging.</option>
          <option>He approaches the lessons with a great attitude and is often able to make insightful contributions during class discussions.</option>
          <option>While he has worked very hard this semester and has made commendable progress, his literacy skills are still not yet up to the standard required for independent work at this year level.</option>
          <option>His maturity, attitude and organisational skills have enabled him to consistently produce work of a high standard in English this term.</option>
          <option>[student], your attitude in class continues to impress me. You always arrive in a positive frame of mind, and I can see that you are eager to learn new things. Throughout this quarter you have remained focused during lessons. You listen carefully to instructions and to other students' ideas and opinions, which you use to help make your own conclusions.</option>
          <option>He has worked extremely hard in English this term and /him her weekly test scores are testament to him/her diligence and perseverance</option>
          <option>He has a very positive attitude to English. This is evident through his questioning, responses to teacher feedback and through a diligent approach to the work set.</option>
          <option>He has a true enthusiasm and gift for English. his effort is reflected in his high grades in this subject. He is also an excellent class member, as he frequently assists the less able students in the class.</option>
          <option>He works steadily and the quality of his work has shown a marked improvement this semester.</option>
          <option>He has a good attitude and generally works well on the tasks assigned to him</option>
          <option>He approaches English lessons with a good attitude and is making steady progress in all areas of English.</option>
          <option>He has a good attitude and sound literacy skills which enable him to complete most tasks at an acceptable standard.</option>
          <option>He is making a conscientious effort, but he sometimes finds it difficult to apply new concepts learnt.</option>
          <option>He has a good work ethic and rarely needs prompting from the teacher when working on a task.</option>
          <option>He has a good attitude to English and is able to work independently on the tasks assigned to him.</option>
          <option>He enjoys working in all areas of English and shows good application. He has made good progress as a result.</option>
          <option>He is a hard-working student who is making good progress. He is eager to learn and always tries to do his best in every lesson</option>
          <option>I can see that you are interested in the subject, and I am pleased that you have continued to offer your ideas and opinions. It is fantastic that you are eager to participate, but try to always remember to raise your hand rather than calling out when you want to share.</option>
          <option>On the whole you have continued to maintain a positive attitude to learning. When you arrive to class you will usually settle quickly ready for the lesson, and I can see that you are enthusiastic about English with the answers you sometimes offer.</option>
        </select>
      </div>
      <br>
      <div class="form-group">
        <label for="level2"><b>2 -Strengths</b></label>
        <select class="form-control" id="level2" name="level2" oninput="getResults()">
          <option>[None]</option>
          <option>He has made excellent progress on the independent comprehension tasks and can make sound inferences from the materials he reads in the lessons.</option>
          <option>He has excellent comprehension skills and is able to use a wide range of strategies to make accurate and astute responses. One area of comprehension that could be further developed is using contextual clues to make informed guesses about the meaning of unknown words</option>
          <option>He has very good comprehension skills and is able to use a wide range of strategies to make accurate and astute responses. One area of comprehension that could be further developed is using contextual clues to make informed guesses about the meaning of unknown words</option>
          <option>He has good comprehension skills and is able to use a wide range of strategies to make accurate and informed responses to a variety of different text types.</option>
          <option>In reading comprehension he is able to make simple and logical interpretations as well as use specific evidence from a text. He finds the more difficult comprehension skills of identifying the author's purpose and comparing and contrasting more challenging. He needs to think more deeply about what he has read so that he can ascertain the implied meaning of a text.</option>
          <option>While he literal comprehension is good, he could develop his inferential skills further by answering 'How do you know?' and 'Why?' questions and giving evidence from the text to support his answers.</option>
          <option>He literal understanding is good and he is now beginning to make connections between the text and his prior knowledge.</option>
          <option>He has satisfactory comprehension skills and is able to answer literal questions confidently and give supporting evidence from the text. The higher order comprehension skill of identifying the implied meaning of a text is more challenging for him. Further guided practice as well as his thinking more deeply about what was written should help her improve this demanding aspect of reading comprehension.</option>
          <option>He level of comprehension is good; he can answer literal questions about a text with ease. He finds inferential questions a bit harder to answer as this is due to the increasing complexity of the texts he reads.</option>
          <option>He has very good comprehension skills and can ascertain the implied meaning of a story as well as using contextual clues to work out the meaning of words that he doesn't know.</option>
        </select>
      </div>
      <br>
      <div class="form-group">
        <label for="level3"><b>3 -How they went on mid-term/end of term test</b></label>
        <select class="form-control" id="level3" name="level3" oninput="getResults()">
          <option>[None]</option>
          <option>He performed exceptionally well on the end of term test. This is testament to his hard work in class and this highlights his excellent understanding of the concepts that were covered.</option>
          <option>He achieved an excellent score on the term test. This highlights his excellent understanding of the  concepts that were covered.</option>
          <option>He assessment results were outstanding and are indicative of his broad range of skills and knowledge across the curriculum.</option>
          <option>His assessment results were excellent. He continues to respond to teacher feedback when given, and demonstrates high levels of maturity and self-efficacy in his learning approach.</option>
          <option>His excellent assessment results are a reflection of his preparation and diligence, and he should be commended for this.</option>
          <option>I was extremely pleased with his exam results. He has worked very hard and has reaped the rewards.</option>
          <option>He should be very happy with his examination results. He has worked very hard this term  and deserves them.</option>
          <option>His exam performance was a splendid effort. It clearly showed that everything we have covered so far in class has been understood and that a lot of effective revision had been completed.</option>
        </select>
      </div>
      <br>
      <div class="form-group">
        <label for="level4"><b>4 -Areas that need to be improved/How to Improve Them</b></label>
        <select class="form-control" id="level4" name="level4" oninput="getResults()">
          <option>[None]</option>
          <option>In reading comprehension, he is able to answer literal questions but struggles when making inferences from a text. He needs to become aware that reading is not just a mechanical task and that it involves thinking about the text at a much deeper level.</option>
          <option>He does not perform well on reading comprehension tasks as often his answers do not contain enough detail. To develop his comprehension skills, he should be encouraged to use evidence from the text to justify his answers and begin to identify distinctive language, structural and presentational features and show how these help the reader draw meaning from the text.</option>
          <option>He experiences some difficulties in reading comprehension as he struggles to make inferences from a text. To improve his reading comprehension further, he must try to slow down and focus on developing his inferential skills by answering questions such as 'how do you know?' and 'why?'.</option>
          <option>He finds it quite difficult at times to interpret a text. He would benefit from developing his inferential skills further by answering 'How do you know?' and 'Why?' questions and giving evidence from the text to support his answers.</option>
          <option>His comprehensions skills have only improved marginally as he is often unwilling to show enough detail in his written responses. To move his comprehension skills on to the next level, he should be encouraged to use evidence from the text to justify his answers and begin to identify distinctive language, structural and presentational features and show how these help the reader draw meaning from the text.</option>
          <option>One area of comprehension that could be further developed is his ability in deciphering the meaning of unknown words. He needs to use contextual clues from sentences to help him make a more informed guess as to the meaning of an unknown words.</option>
          <option>He has difficulty in making predictions, interpretations or drawing conclusions from a text. Further guided practice as well as he thinking more deeply about what was written should help him improve in this area.</option>
          <option>When given a comprehension piece he often goes straight to the answers without reading the text first. This ultimately results in him getting very few of the questions correct. When pressured by the teacher, he will reluctantly read through the entire passage. He is then able to answer a lot more successfully the questions posed. He needs to show a lot more perseverance if there is to be any development in this area. I am looking forward to him approaching reading comprehension with a much more positive attitude in the next term.</option>
          <option>He is generally only able to make predictions, interpretations or draw conclusions from a text with considerable support from the teacher. He needs to read a great deal more if he is to reach the required grade level standard.</option>
          <option>He has satisfactory comprehension skills and is able to answer literal questions confidently and give supporting evidence from the text. The higher order comprehension skill of identifying the implied meaning of a text is more challenging for him. Further guided practice as well as he thinking more deeply about what was written should help him improve in this area.</option>
          <option>His limited vocabulary makes comprehending a text difficult. It is imperative that he reads as much as he can from both fiction and non-fiction texts.</option>
          <option>He really struggles with reading comprehension due to his limited range of vocabulary. It is essential that he reads as many books as he can from The Raz-Kids website. This will put him in a far better position to be able to interpret a text.</option>
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