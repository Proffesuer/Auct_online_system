<?php






?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel = "stylesheet" type = "text/css" href = " css/signup.css">

</head>
<body>


   
  <strong><h1 align="center"class="color">ADMINSTRATORS ONLY LOG IN PORTAL </h1></strong>



  
<div class="navbar"id="navbar">
      
  <a href="index.html">HOME</a>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>


</div>

<br><br><br>

  
<h2 >~ADMINISTRATOR LOG IN~</h2>


<button onclick="document.getElementById('id01').style.display='block'" style="width:250px; align-items:center;">Login</button>

<div id="id01" class="modal">

<form class="modal-content animate" action="Record.html" method="post">

  <div class="container">
    <label for="uemail"><b>Usermail</b></label>
    <input type="text" placeholder="Enter Usermail" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
      

      <input type="checkbox" checked="checked" name="remember"> Remember me 
    </label>

    <button type="submit">Login</button>
    <label>
</div>

  
    <div id =" Loginfailed" >



          <p> invalid usermail and password! create account? </p>




</div>



  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    <a href="CreateAccount.php"><button type="button"  class="cancelbtn">Create Account</button></a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
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

    <title>Admin log in page</title>
    <link rel="stylesheet"type="text/css"href="css/loginStyle.css" />
</head>
<body>

<h1>
    hello guys am head
</h1>


</body>
</html>