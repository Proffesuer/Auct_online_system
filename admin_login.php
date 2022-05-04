<?php include('server.php') ?>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin_login</title>
  <link rel= "stylesheet" type= "text/css"  href= "admin_login.css" />
</head>
<<<<<<< HEAD
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
=======
<body>
<center>
  <div class="container"align="center">
>>>>>>> fa43d583d5813d8b05423305f1aa404dcf96fd50

  
  <lable>
LOG IN
</lable>
<form method="POST"action= "admin_login.php">

<br>

<lable>
Email:
</lable >
<br><input type="text"name="Email"placeholder="Enter Email"required>

<br><br>
<lable>
Password:
</lable>
<br>
<input type="password"name="password"placeholder="Password"required>
<br><br>
<input type="submit" name="button"class="Button1"value="LOGIN" />

</form>
</div>
</center>

</body>
</html>