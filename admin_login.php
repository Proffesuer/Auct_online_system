<?php






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
<body>

  <strong><h1 align="center"class="colorr">TECHNOMOBIZ</h1></strong>


<button onclick="document.getElementById('id01').style.display='block'" style="width:250px; align-items:center;">Login</button>

<div id="id01" class="modal">

<form class="modal-content animate" action="#" method="post">


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



  <div class="container">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    <a href="CreateAccount.php"><button type="button"  class="cancelbtn">Create Account</button></a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>
<footer>





</footer>

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