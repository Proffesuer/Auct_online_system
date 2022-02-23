




<?php
# my connect to online aauction system database; administrators table

session_start();
//initial variables


	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "online auction system";

	//connect to database
	
	$db = mysqli_connect($host, $user, $pass, $database);

	
	if($db)

		echo"connected to web_sever";

		else
		echo"connection to web_server failed";

		//Register users; retrieving data from the form using php

		$FirstName = mysqli_real_escape_string($db, $_POST['firstname']); 

		$SecondName =mysqli_real_escape_string($db, $_POST['SecondName']);
		
		$UserName = mysqli_real_escape_string($db, $_POST['UserName']);
		
		$Email =  mysqli_real_escape_string($db, $_POST['Email']);
		
		$Password_1 = mysqli_real_escape_string($db, $_POST['Password']);
		
		$Password_2 =  mysqli_real_escape_string($db, $_POST['ConfirmPassword']);


		// Form validation statements

		$errors =  array();

		if(empty($FirstName))

		{
			array_push($errors, "First Name required");

		}

		if(empty($SecondName))

		{
			array_push($errors, "Second Name required");
		}


		if(empty($UserName))

		{
			array_push($errors, "User Name required");
		}


		if(empty($Email))

		{
			array_push($errors, "Email required");
		}


		if(empty($Password_1))

		{
			array_push($errors, "Password is required");
		}



		if(empty($Password_2))

		{
			array_push($errors, "Confirm password is required");



		}


		if($Password_1 != $Password_2)
		{

			array_push($errors, "Password dont match");

		}


		// Check existing user with the same user Name


		$user_check_query = "SELECT * FROM administrators where UserName = '$UserName' or Email = ' $Email' limit 1";

		$results = mysqli_query($db, $user_check_query);
		$user = msqli_fetch_assoc($results);

		if($user)
		{

		if($user['UserName'] === $UserName)

		{

			array_push($errors, "User Name already exist");
		}

		if($user['Email'] === $Email)
		{

			array_push($errors, "This email has already registered a user name");

		}

	}



	//register the user if no errors and encrypt the passoword

	if(count($errors) == 0)

	{

		$Password = md5($Password_1); # encrypts password

	    $query= " INSERT INTO administrators( Firstname, SecondName, UserName, Email, Password) VALUES = ('$FirstName', '$SeconName', '$UserName', '$Email', '$Password_1')";

			   mysqli_query($db, $query);

				$results = $mysqli_query($db, $query);{

					if(mysqli_num_raws($results))

					$_SESSION[ 'FirstName'] = $FirstName;
					$_SESSION['success'] = "LOGED IN";

					#login page 

					header('location: index.php');
				}


	}

	if(count($errors) >=1)
	{
	foreach($errors as $output)
	{
		echo $output . "<br>";


	}
}


#LEVIS CODE

/*

sssss
	

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

// it ends heree...Levis code on php
  
   */
?>			


<?php include("server.php"); ?>


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

  <form method = "POST" action= "#CreateAccount.php id="back">
	<h4 align="center"style="color:white">CREATE ADMIN ACCOUNT</h4>

	<div class="back">
    
           <input type="text" class="input_text" name="FirstName" placeholder="First name"value="<?php echo $FirstName;?>" required/>
            </label>
			<br>
			
			

            <input type="text" class="input_text" name="SecondName" placeholder="Last name"value="<?php echo $SecondName;?>" required />
            </label>
			<br>
           
            <input type="text" class="input_text" name="UserName" placeholder="username or Id"value="<?php echo $UserName;?>" required/>
			</label>
			<br>
            
            <input type="text" class="input_text" name="Email" placeholder="Email"value="<?php echo $Email;?>" required />
            </label>
			<br>
			
<<<<<<< HEAD
            <input type="password" class="input_text" placeholder="Password"name="Password" value="<?php echo $Password;?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required />
=======
            <input type="password" class="input_text" placeholder="Password"name="password" value="<?php echo $Password;?>"
			 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
			 title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
			 required />
>>>>>>> 11bae820a4358b91fb0ede7a60b7800cbe4ecf48
			</label>
			<br>
			
            <input type="password" class="input_text" name="ConfirmPassword" placeholder="Confirm password"value="<?php echo $ConfirmPassword;?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number 
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