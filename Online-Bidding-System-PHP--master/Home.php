

<?php
     $Server="localhost";
     $username="root";
     $psrd="";
     $dbname = "Bidding";
     $connection= mysqli_connect($Server,$username,$psrd,$dbname); 


     $query = "SELECT * FROM Product WHERE ProductStatus = 'No' ";

     $result=mysqli_query($connection,$query);

	while ($row=mysqli_fetch_array($result))
	{
		$datenow = date("Y-m-d");
        
		$duedate = $row['EndDate'];
			
		$prodid = $row['ProductID'];
		if($datenow >= $duedate){


           $buyer=$row['Buyer'];


			if($buyer=="Null")
			{
				$seller=$row['UserName'];
				 $ProductName=$row['ProductName'];

				 $message="Sorry Mr.".$seller.", Your Product ".$ProductName." Remain Unsold  No one bid your product";
                 $query1="insert into Notification values('$seller','$message','No')";
                  mysqli_query($connection,$query1);

			}
            else
            {

			$qry="UPDATE Product SET ProductStatus = 'Yes' WHERE ProductID = '$prodid'";
			mysqli_query($connection,$qry);

			$seller=$row['UserName'];
			$buyer=$row['Buyer'];
            $ProductName=$row['ProductName'];

			$qry1="select * from User where UserName='$seller'";
			$result1=mysqli_query($connection,$qry1);
	        $row1=mysqli_fetch_array($result1);
	        $sname=$row1['Name'];
	        $semail=$row1['Email'];
	        $sphone=$row1['Phone'];

	        $qry2="select * from User where UserName='$buyer'";
			$result2=mysqli_query($connection,$qry2);
	        $row2=mysqli_fetch_array($result2);
	        $bname=$row2['Name'];
	        $bemail=$row2['Email'];
	        $bphone=$row2['Phone'];
            
            $message="Congratulation Mr.".$sname.", Your Product ".$ProductName." has been sold and Buyer is ".$bname." You can contact with Buyer by Email:".$bemail." or You can use phone:".$bphone.".";
            $query1="insert into Notification values('$seller','$message','No')";
            mysqli_query($connection,$query1);

            $message="Congratulation Mr.".$bname.", Your are the final and highest bidder of  Product ".$ProductName.". Now This is Your Product. Product Seller is ".$sname.", You can contact with Seller by Email:".$semail." or You can use phone: ".$sphone.".";
            $query2="insert into Notification values('$buyer','$message','No')";
            mysqli_query($connection,$query2);
           }



		}
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bidding System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/Home.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<style>
.usebody{
      background-color:black;
    background-size: cover;
      font-family:cursive;
      font-size:300%; 
  }
  .glow{
       color:#ffff;
       text-align:center;
       -webkit-animation: glow 1s ease-in-out infinite alternate;
      -moz-animation: glow 1s ease-in-out infinite alternate;
       animation: glow 0.5s ease-in-out infinite alternate;
  }
  @-webkit-keyframes glow{
      
      from{
          text-shadow:0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #e60073,
          0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
   
      to{
          text-shadow: 0 0 20px #ffffff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6,
          0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
  }
  .back{
    background-color: black;
  }
  .back2{
      background-color: #ddd;
  }
  .about{
    background-color: #ddd;
  padding-left: 15px;
  padding-right: 10px;
  
  }
  <style>

 body {
  
font-family: Agency FB;
}
.footer{
  
  text-align: center;
 padding-top: 35px;
 
 padding-bottom: 30px;
  border-radius: 5px;
 
  
   background-color: white;
 }
 .team{
  
  margin-top: 0px;
  padding-left: 15px;
padding-right: 10px;
padding-top: 40px;
padding-bottom: 40px;;
}
.column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
  }
  @media screen and (max-width: 650px) {
    .column {
      width: 100%;
      display: block;
    }
  }
  
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }
  
  .container {
    padding: 0 16px;
  }
  
  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }
  .footer{
  
  text-align: center;
 padding-top: 35px;
 padding-bottom: 30px;
  border-radius: 5px;
  
   background-color:black;
 }
 .back{
   background-color: black;
 }


</style>

<script type="text/javascript">

function bid(id)
{
  if(confirm('Sure Participate?'))
  {
    alert('You Are Not Sign in, Please Sign In For Bid');
    window.location='BidProduct.php?bid='+id
  }
}
</script>


</head>
<body>

<!--animation at the topp of the home page-->
<div class="back">
<div class="usebody">
<h2 class="glow">WELCOME TO E-SOKONI<br> WELCOME ALL!!</h2>
</div>

<!--navigation Bar-->


<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-Sokoni.Com</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Home.php"><b>&nbsp&nbsp&nbsp&nbspHome</b></a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>&nbsp&nbspProducts</b><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Car.php"><b>Car</b></a></li>
          <li><a href="Mobile.php"><b>Mobile</b></a></li>
          <li><a href="Computer.php"><b>Computer</b></a></li>
        </ul>
		     
      </li>
      

      <form class="navbar-form navbar-left" action="Search.php" method="POST">
      <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Search" size="40">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    </ul>
	
	
   <ul class="nav navbar-nav navbar-right">
   <li><a href="About Project.php"><b>About site</b></a></li>
      <li><a href="Contact Us.php"><b>Contact Us</b></a></li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="UserLogin.php"><b>Login</b><span class="caret"></span></a>
        <ul class="dropdown-menu">
         <li><a href="UserLogin.php"><b>User Login</b></a></li>
          <li><a href="AdminLogin.php"><b>Admin Login</b></a></li>
        </ul>
      </li>
      <li><a href="Registration.php"><span class="glyphicon glyphicon-user"></span> <b>Sign Up</b></a></li>
     
    </ul>
  </div>
</nav>
</div>
<video width="100%"autoplay muted loop id="myVideo">
  <source src="video/Pexels Videos 2229907.mp4" type="video/mp4">
</video>

</div>

<div class="about">
<center>
    <bold>
<h2>
About Us
</h2>
</bold>

 

<p>Launched in 2022, <b>E-SOKONI </b>is a <b>virtual</b> office that creates that nice impression 
on the ready market to serve everyone efficiently whatever you want all over Kenya -remotely.

 With focus on buying and selling product efficiently over internet,we believe in customers needs all over from Electonics,
 Top-Fashion,Machineries to furnitures.
</p>

<p>
  E-Sokoni is commited to quility
   services with fifteen offices within five counties and three regions in Kenya ;Eldoret ,Kisumu,Nairobi and Nakuru City with our main offices and stores located in the Capital city Nairobi.
   We also have diffferent transport companies as our partners to trasport the items or order to the intended destination example G4S,NorthRift ,and 
   RoyalRift to whom we are garanteed safety.
</p>
<p>
  Service full of <b>Integrity,Transparent and Honest</b> is what we believe in as a Company.
</p>
<br>
<br><marquee type="scroll">
  <font color="green">
<h2>LogIn TO Bid Below Products ,,!!</h2>
</font>
</marquee>
</div>
</div>
<?php
if (isset($_GET['message'])) {
    print '<script type="text/javascript">alert("' . $_GET['message'] . '");</script>';
}

if (isset($_GET['loginmessage'])) {
    print '<script type="text/javascript">alert("' . $_GET['loginmessage'] . '");</script>';
}


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  echo "<script> alert('name'); </script>";
}

?>

<div class="bodysection templete clear">

<div class="mainsection templete clear">

<form action="" method="POST">

<table>


<?php
   $Server="localhost";
     $username="root";
     $psrd="";
     $dbname = "Bidding";
     $connection= mysqli_connect($Server,$username,$psrd,$dbname); 

    $query="select * from product where ProductStatus='No'";
    $Result=mysqli_query($connection,$query);
    $break=0;


    while ($row=mysqli_fetch_array($Result)) {

      if($break==2){
        echo "<tr>";
        $break=0;
      }
   
   $datenow = date("Y-m-d");
        
  $sdate = $row['StartDate'];
  if($sdate<=$datenow){
    echo'<td>';
    echo"<img src='".$row['Image']."' width='170px' height='220px'><br>";
    echo'</td>';
    echo'<td>';
    echo "<h2> Description</h2>";
     
    echo "<h4>";
    echo "<b>";
    $name=$row['ProductID'];
    echo $row['ProductName'];
    echo "</b>";
    echo "</h4>";
    
    echo $row['Description'];
    echo "<br>";
    echo "<b>";
    echo "Price: ";
    echo $row['Price'];
    echo "</b>";

    echo "<br>";
    
?>
   <a href="javascript:bid(<?php echo $row[0]; ?>)"> <img src="Image/bidnow.png"  width="50px" height="50px"  alt="Bid" /> <span style="color: green;font-size: 20px"><b>Running</b></span> </a>
<?php 
      $break++;
      echo "<hr>";

echo'</td>';

    }
}
?>
 
</table>
</div>

<div class="sidebar clear">

    <div class="Semisidebar clear">


      <h2>Sold Product Here</h2>

     <?php


    $query="select * from product where ProductStatus='Yes'";
    $Result=mysqli_query($connection,$query);
    $break=0;

    while ($row=mysqli_fetch_array($Result)) {

      if($break==1){
        echo "<tr>";
        $break=0;
      }

    echo'<td>';
    echo"<img src='".$row['Image']."' width='285px' height='220px'><br>";
    echo'</td>';

    echo'<td>';
     
    echo "<h4>";
    echo "<b>";
    echo $row['ProductName'];
    echo "</b>";
    echo "</h4>";
    
    echo $row['Description'];

    echo "<br>";
    echo "<b>";

    echo "Sold Price: ";
    echo $row['Price'];
    echo "</b>";

    echo "<br>";
                ?>
     <a href="#"> <img src="Image/sold.jpg"  width="285px" height="100px"  alt="Bid" /> </a>
<?php 

      $break++;
      echo'</td>';
    echo "<hr>";

    }
  
?>

  
   </div>
   

 </div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <div class="team">
  <center>
    <bold>
<h2>
Our Team
</h2>
</bold>
</center>
 
<div class="row">
  <div class="column">
    <div class="card">
      <img src="pic/image1.PNG"id="radius" alt="David Munyoki" style="width:100%">
      <div class="container">
        <h2>David Munyoki</h2>
        <p class="title">CEO & Founder</p>
        <p>He is a graduate of Bsc Computer science from <br>The Catholic University Of Eastern Africa <br>and the founder of E-SOKONI in 2022.</p>
        <p><a href="mailto:munywoki1735@yahoo.com">munywoki1735@gmail.com</a></p>
        <p><button class="button">Contact:+254716333716</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="pic/team1.jpg" id="radius"alt="Buhat" style="width:100%">
      <div class="container">
        <h2>Mc Lucy Buhat</h2>
        <p class="title">Marketing Director</p>
        <p>He is the marketing Director in charge of<br> marketing.He is also the Director Of SmartTech <br>solutions.</p>
        <p><a href="mailto:munywoki1735@gmail.com">munywoki1735@yahoo.com</a></p>
        <p><button class="button">Contact:+254716333716</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="pic/istockphoto-595158506-612x612.JPG" alt="Aaron Jackson" id="radius"style="width:100%">
      <div class="container">
        <h2>Aaron Jackson</h2>
        <p class="title">Sells Director</p>
        <p>He is in charge of sells and buying done<br>over the system.He actions on any inquiries ,complains and helpneeded over the system.</p>
        <p><a href="mailto:munywoki1735@yahoo.com">munywoki1735@yahoo.com</a></p>
        <p><button class="button">Contact:+254716333716</button></p>
      </div>
    </div>
  </div>
</div>

</div>
</div>

</form>

<br>


<footer class="footer">
<b>
<table cellpadding="15px"size="100%">

<tr>
  <td>
    <a href="Home.php">
    HOME
    </a>
</a>
</td>
<td>
<a href="login.html">
  LOGIN
  </a>
</td>
<td>
<a href="register.html">
SIGNUP
</a>
</td>

</tr>
<td>
<a href="login.html">
  ORDER
  </a>
</td>
<td>
<a href="contact.html">
CONTACT
</a>
</td>
<td>
<a href="AdminLogin.php">
  OvAL
</a>
</td>

  </tr>
  


</table>
</b>

</footer>
  </div>

</body>
</html>

