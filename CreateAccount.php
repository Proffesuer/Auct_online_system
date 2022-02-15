



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
	<link rel= "stylesheet" type= "text/css"  href= "css/signup.css" />
</head>
<body>



<div class="container">
<strong><h1 align="center"class="colorr">AUCTION ONLINE SYSTEM ADMINSTRATORS ACCOUNT</h1></strong>


  <form action="connect.php" method="post"id="back">
	<h4 align="center"style="color:white">CREATE ACCOUNT</h4>
            <label class="lable"> <span>Firstname:</span>
            <input type="text" class="input_text" name="fname" value="<?php echo $Firstname;?>" required/>
            </label>
			<br><br>
			<label class="lable"> <span>Lastname:</span>
            <input type="text" class="input_text" name="lname" value="<?php echo $Lastname;?>" required />
            </label>
			<br><br>
            <label class="lable"> <span>Username</span>
            <input type="text" class="input_text" name="username" value="<?php echo $Username;?>" required/>
			</label>
			<br><br>
            <label class="lable"> <span>Email:</span>
            <input type="text" class="input_text" name="email" value="<?php echo $Email;?>" required />
            </label>
			<br><br>
			<label class="lable"> <span>Password:</span>
            <input type="password" class="input_text" name="password" value="<?php echo $Password;?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required />
			</label>
			<br><br>
			<label class="lable"> <span>Confirm Password</span>
            <input type="password" class="input_text" name="confirmpassword" value="<?php echo $Confirmpassword;?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
			<br><br>
           <input type="submit" name="submit" class="button" value="Register" />
		   <div class="login">
		 <p><font color="#FFFF00"><b><h3>Already Registered Login?<a href="admin_login.php"></h3></b></font><input type="button" class="button" value="Login" /></a></p>
            </label>
		</div>
          </div>
        </form>
	</div>
    
</body>
</html>