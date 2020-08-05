<!DOCTYPE html>
<html>

<head>
  <title> Quiz </title>
  <link rel="stylesheet" type="text/css" href="quizpage.css">
<style>
button{
background-color: orange;
font-size: 24px;
 border-radius: 50%;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
body
{
  background-image: url("thor2.jpg");

  background-size: contain;

}
</style>
</head>

<script>


var count = 300;
var interval = setInterval(function(){
  document.getElementById('count').innerHTML=count;
  count--;
  if (count === 0){
    clearInterval(interval);
    document.getElementById('count').innerHTML='Done';
    // or...
    alert("You're out of time!");
  }
}, 1000);

var s=0;
var x=0;
function sub()
{
   if(document.forms["myForm"]["inventors"].value=='A')
    { s+=1;}
 if(document.forms["myForm"]["o2"].value=='B')
    { s+=1;}

 if(document.forms["myForm"]["o3"].value=='D')
    { s+=1;}

 if(document.forms["myForm"]["o4"].value=='B')
    { s+=1;}


  if(document.forms["myForm"]["o5"].value=='A')
    { s+=1;}


  if(document.forms["myForm"]["o6"].value=='D')
    { s+=1;}
     if(document.forms["myForm"]["o7"].value=='A')
    { s+=1;}

     if(document.forms["myForm"]["o8"].value=='C')
    { s+=1;}

    if(document.forms["myForm"]["o9"].value=='D')
    { s+=1;}

    alert(s);
}
function sub1()
{
var x = document.getElementById("hello1").value;
if(x!=s)
{
alert("YOU ARE DISQUALIFIED FOR ENTERING THE WRONG SCORE");

}

}


</script>

<body>

<?php
  session_start();
  if (!isset($_SESSION['loggedin'])) {
	header('Location: starting.html');
	exit;
   }
 ?>

  <h1>
    <center>This is a MCQ Test.</center>
  </h1>

    <b><center>
      <br><div style="background-color:orange">Tick only one box. Upon clicking the submit, your marks will be evaluated.
      You cannot redo your test after this.<br>
      Please keep that in mind and click on the submit button
      only when you're done checking your answers.</div><br>
    </center></b>
<p style="color:orange; font-size:150%;">Time left!!</p>
<div id="count" style="background-color:orange">Start</div>

<form name="myForm" action="lat.php" method="post">
<label for="hello"><p>Registration number:</p></label>
    <input type="number" id="hello" name="hello">
    <br> <br>
<p>QUES 1. Who invented Computer?</p><br>
  <input type="radio" name="inventors" value="A" >CHARLES BABBAGE
  <input type="radio" name="inventors" value="B" >AT AND T BELL
  <input type="radio"  name="inventors"value="C" >GRAHAM BELL
  <input type="radio"  name="inventors" value="D" >MARCONI
  <br><br><br>
 <p>QUES 2. Who found html?</p><br>
  <input type="radio"  name="o2" value="A" >Larry Page
  <input type="radio"  name="o2" value="B" >Tim Berner's lee
  <input type="radio"  name="o2" value="C" >Eric Bina
  <input type="radio"  name="o2" value="D" >Karl Baker
    <br><br><br>
 <p>QUES 3. Which is not a datatype in js?</p><br>
  <input type="radio"  name="o3" value="A" >str
  <input type="radio"  name="o3" value="B" >number
  <input type="radio"  name="o3" value="C" >boolean
  <input type="radio"  name="o3" value="D" >int
   <br><br><br>
  <p>QUES 4. Which browser does not support js?</p><br>
  <input type="radio"  name="o4" value="A">chrome
  <input type="radio"  name="o4" value="B">linx
  <input type="radio"  name="o4" value="C">mozilla
  <input type="radio"  name="o4" value="D">explorer
  <br><br><br>
  <p>QUES 5. Which is not a version of html?</p><br>
  <input type="radio" name="o5" value="A" >1.01
  <input type="radio" name="o5" value="B" >2.0
  <input type="radio"  name="o5"value="C" >3.0
  <input type="radio"  name="o5" value="D" >4.01
  <br><br><br>
 <p>QUES 6. What tag is usd to enter into a newline in HTML?</p><br>
  <input type="radio"  name="o6" value="A" >body
  <input type="radio"  name="o6" value="B" >div
  <input type="radio"  name="o6" value="C" >p
  <input type="radio"  name="o6" value="D" >br
    <br><br><br>
 <p>QUES 7. What is the typing discipline of js?</p><br>
  <input type="radio"  name="o7" value="A" >dynamic
  <input type="radio"  name="o7" value="B" >static
  <input type="radio"  name="o7" value="C" >partially static
  <input type="radio"  name="o7" value="D" >partially dynamic
   <br><br><br>
  <p>QUES 8. Who invented javascript?</p><br>
  <input type="radio"  name="o8" value="A">gandhi
  <input type="radio"  name="o8" value="B">edison
  <input type="radio"  name="o8" value="C">brenden eich
  <input type="radio"  name="o8" value="D">ramanujam
<br><br><br>

<p>QUES 9. Which is the correct logo of python?</p><br>
<input type="radio"  name="o9" value="A"><img src="anaconda.jpg" height="100" width="100"><br>
<input type="radio"  name="o9" value="B"><img src="random.jpg" height="100" width="100"><br>
<input type="radio"  name="o9" value="C"><img src="json.jpg" height="100" width="100"><br>
<input type="radio"  name="o9" value="D"><img src="python.png" height="100" width="100"><br>
<br><br><br>
<button onclick=" sub()" type="button" value="button">SCORES</button><br><br>
<label for="hello1"><p style="color:orange; font-size:150%;">Enter your score</p></label>
    <input type="number" id="hello1" name="hello1" value="hello1">
<br> <br>
<button onclick=" sub1()" type="button" value="button">SUBMIT</button><br><br>
<button type="submit" name="submit" value="submit">SCOREBOARD</button>

 </form>
<a href="logout.php" style="color:white;">Click here to logout</a>

</body>
</html>
