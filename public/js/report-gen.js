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

function getLevel3(){
    var level3 = document.getElementById("level3");
    level3 = level3.options[level3.selectedIndex].value;
    return level3;
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
              getLevel2() + " " +
              getLevel2a() + " " + 
              getLevel2b() + " " + 
              getLevel2c() + " " + 
              getLevel3() + " " +
              getLevel3a() + " " + 
              getLevel3b() + " " + 
              getLevel3c() + " " + 
              getLevel4() + " " +
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
