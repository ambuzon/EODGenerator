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