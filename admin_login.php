<?php

include('server.php')




?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel = "stylesheet" type = "text/css" href = "Admin.css">
    <title>
      Admin Log_in page
</title>

</head>
<body id = "backimg">

  <strong><h1 align="center"class="colorr">TECHNOMOBIZ</h1></strong>


<button onclick="document.getElementById('id01').style.display='block'" style="width:250px; align-items:center;">Login</button>

<div id="id01" class="modal">

<form class="modal-content animate" action="server.php" method="POST">


  <div class="container">
    
    <label for="UserMail"><b>UserMail</b></label>
  
    <input type="text" placeholder="Enter Usermail" name="UserMail" required>

    <br>

    <label for="Password"><b>Password</b></label>
    <input type="Password" placeholder="Enter Password" name="Password" required>

    <br>
      

      <input type="checkbox" checked="checked" name="remember"> Remember me 

    </label>

    <br>
      <br>

    <button type="submit">Login</button>

    <br>
    <label>
</div>

  
    <div id =" Loginfailed" >



          <p> invalid usermail and password! create account? </p>




</div>

<br>

  <div class="container">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    <a href="CreateAccount.php"><button type="button"  class="cancelbtn">Create Account</button></a>

    <br>
    <br>
    <br>
    <span col= "4" class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>

<div class = "myfooter">


<p style = " Margin-left:15%;"> 
<br>

Welcome administrator!    feel free to login,     create account or update anything in the system as 
an    Administrator..


         <br>

</p>


<hr style = "color : red;"> <br>
<p style = "font-size: 75%;"> .......c..f..y..  
@DEVELOPER BEN_ALWANGE__&@DEVELOPER PROFESSEUR LEVIS CHISIRA
<br>
tel: +254768743827 mail- @gmail.com
</P>




</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }
}
</script>
<script src="curtains.js"></script>
<script>
// JavaScript Document
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
if (prevScrollpos > currentScrollPos) {
  document.getElementById("navbar").style.top = "0";
} else {
  document.getElementById("navbar").style.top = "-50px";
}
prevScrollpos = currentScrollPos;
}

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it


window.onclick = function(event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }
}
</script>
<script src="curtains.js"></script>
<script>
// JavaScript Document

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
if (prevScrollpos > currentScrollPos) {
  document.getElementById("navbar").style.top = "0";
} else {
  document.getElementById("navbar").style.top = "-50px";
}
prevScrollpos = currentScrollPos;
}

</script>

</body>
</html>