



    <?php
    # include 'connect.php';
?>
<?php
			$Firstname=$Lastname=$Username=$Email=$Password=$Confirmpassword="";
		if(isset($_REQUEST['submit']))
{
			$Firstname=$_REQUEST['fname'];
			$Lastname=$_REQUEST['lname'];
			$Username=$_REQUEST['username'];
			$Email=$_REQUEST['email'];
			$Password=$_REQUEST['password'];
			$Confirmpassword=$_REQUEST['confirmpassword'];
			$passhash=crypt($Password);
			
			
		   $insert=mysql_query("insert into account values('$Firstname', '$Lastname', '$Username','$Email', '$Password',1)") or die ("Error:".mysql_error());
		if($insert)
	{
	
		echo "Record inserted successfuly";
    }
	       
				// insert user options
		
		
			//echo $Firstname.$Lastname.$Username.$Email.$Password.$passhash;
			
}
?>			






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

  <form action="connect.php" method="post"id="back">
	<h4 align="center"style="color:white">CREATE ADMIN ACCOUNT</h4>

	<div class="back">
    
           <input type="text" class="input_text" name="fname" placeholder="First name"value="<?php echo $Firstname;?>" required/>
            </label>
			<br>
			
			

            <input type="text" class="input_text" name="lname" placeholder="Last name"value="<?php echo $Lastname;?>" required />
            </label>
			<br>
           
            <input type="text" class="input_text" name="username" placeholder="username or Id"value="<?php echo $Username;?>" required/>
			</label>
			<br>
            
            <input type="text" class="input_text" name="email" placeholder="Email"value="<?php echo $Email;?>" required />
            </label>
			<br>
			
            <input type="password" class="input_text" placeholder="Password"name="password" value="<?php echo $Password;?>"
			 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
			 title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
			 required />
			</label>
			<br>
			
            <input type="password" class="input_text" name="confirmpassword" placeholder="Confirm password"value="<?php echo $Confirmpassword;?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number 
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