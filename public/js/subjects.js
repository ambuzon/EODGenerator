function getName() {
    var firstName = document.getElementById('firstName').value;
    return firstName;
} 

function getGender(){
  var gender = document.querySelector("input[name=gender]:checked").value;
  return gender;
}

function getForm(question){
  var level = document.getElementById(`${question}`);
  if (level){
    level = level.options[level.selectedIndex].value;
    return level;
  }
  level = "";
  return level;
}

function getLevel0(){
  var level0 = document.querySelector("input[name=level0]:checked").value;
  var level0_value = "demonstrates achievement of " + level0 + " of the expected learning standards addressed during the current reporting period."
  return level0_value;
}

function getLevel2b(){
  var level2b = document.getElementById("level2b");
  var level2b_value = ""
  if (level2b){
  level2b = document.querySelector("input[name=level2b]:checked").value;
    level2b_value = "He demonstrates "+ level2b +" understanding of the topics that we have covered this semester he is readily able to recall the taught strategies with a high degree of accuracy. He is always able to apply his maths knowoledge to suit a particular problem or situation.";   
    }
    return level2b_value;
}

function getResults(){
  var result = getName() + " " + 
              getLevel0() + " " + 
              getForm(level1) + " " + 
              getForm(level2) + " " +
              getForm(level2a) + " " + 
              getLevel2b() + " " + 
              getForm(level2c) + " " + 
              getForm(level3) + " " +
              getForm(level3a) + " " + 
              getForm(level3b) + " " + 
              getForm(level3c) + " " + 
              getForm(level4) + " " +
              getForm(level4a) + " " + 
              getForm(level4b) + " " + 
              getForm(level4c) + " " + 
              getForm(level4c1) + " " + 
              getForm(level4c2) + " " + 
              getForm(level4c3);

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