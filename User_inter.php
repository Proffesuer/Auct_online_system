<?php

include('server.php');

if(isset($_SESSION['$FirstName'])){

    $_SESSION['msg'] = "you must log in to view this page";
    header("location: admin_login");

}

if(isset($_GET['logout'])){


    session_destroy();
    unset($_SESSION['FirstName']);
    header("location: admin_login");


}


?>





<html lang="en">
<head>e
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet"href="Auct_style.css"type="text/css">
</head>
<body>

<h1> HOME PAGE</h1>


</h2>



</div>

     <h2> <strong> welcome</strong></h2> 

<?php if(isset($_SESSION['FirstName'])) : ?>

     <h2> <strong> welcome<?php   echo $_SESSION['FirstName'] ?> </strong></h2> 

     <button> <a href = "index.php?logout= '1'" </a></button>
     <?php endif ?>  

    
<p> animate </p>


<div>

<h1>HOME OF LEGIT BUSINESS</h1>
<div class="usebody">
<h2 class="glow">WELCOME TO MY BUSINESS <br> JOIN WITH US TODAY <br> WELCOME ALL</h2>
</div>

<p>Hello guys welcome to home page</p>



</div>
<h4>We have specialised on selling and buying items online, individuls anywhere can sell or buy online here<br>
With us we make it happen easly  for you, we are here because of you<br>
It is an open platform,fell free anytime!!</h4>


<h2> YOU CAN CREATE ACCOUNT WITH US TODAY TO BE ABLE TO BUY AND SELL PRODUCTS </h2>


<h3> checking </h3>

</div> 


</body>
</html>

