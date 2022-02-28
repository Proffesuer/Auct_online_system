		
<?php include('server.php') ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin account</title>
	<link rel= "stylesheet" type= "text/css"  href= "Admin.css" />
</head>
<body>



<div class="container">
<strong><h1 align="center"class="colorr">TECHNOMOBIZ</h1></strong>
<center>

  <form method = "POST" action= "CreateAccount.php" id="back">
  <?php include('AdminErrors_File.php') ?>
	<h4 align="center"style="color:white">CREATE ADMIN ACCOUNT</h4>

	<div class="back">


           <input type="text"  class="input_text" name="FirstName" placeholder="FirstName"value="<?php ?>" required/>
			<br>
			

            <input type="text" class="input_text" name="SecondName" placeholder="LastName"value="<?php ?>" required />
			<br>
           
            <input type="text" class="input_text" name="UserName" placeholder="UserName"value="<?php ?>" required/>
			</label>
			<br>
            
            <input type="text" class="input_text" name="Email" placeholder="Email"value="<?php ?>" required />
            </label>
			<br>
			
            <input type="password" class="input_text" placeholder="Password"name="Password" value="<?php ?>"
			 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
			 title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
			 required />
			</label>
			<br>
			
            <input type="password" class="input_text" name="ConfirmPassword" placeholder="Confirm password"value="<?php ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number 
			and one uppercase and lowercase letter, and at least 8 or more characters" required />
			<br>           
			<input type="submit" name="submit" class="button" value="Register" /><br>
		   <div class="login">
		 <p><font color="#FFFF00"><b><h3>Already Registered Login?<a href="admin_login.php"></h3></b></font><input type="button" class="button" value="Login" /></a></p>
            </label>
		</div>
          </div>
</div>
        </form>

</center>
	</div>

	<footer>


	
   </footer>



</body>
</html>