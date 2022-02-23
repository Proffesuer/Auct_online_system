<?php



session_start();

if(isset($_SESSION['FirstName'])){

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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet"href="Auct_style.css"type="text/css">
</head>
<body>

<h1> THIS IS HOME PAGE</h1>

<?php


if(isset($_SESSION['success'])) : ?>

<div>

<h2>


<?php

echo$_SESSION['success'];
unset($_SESSION['success']);


?>

</h2>



</div>
<?php endif ?>


<?php if(isset($_SESSION['FirstName'])); : ?>

     <h2> <strong> welcome <?php echo $_SESSION['FirstName'] ?> </strong></h2> 

     <button> <a href = "index.php?logout= '1'"</a></button>
     <?php endif ?>  
<p> animate </p>


<div>

<h1>ANIMATES</h1>
<div class="usebody">
<h2 class="glow">WELCOME TO MY BESINESS <br> JOIN WITH US TODAY <br> WELCOME ALL</h2>
</div>





</div>
    
<h>Hello  bro congrats now what we have done is what will be doing every day 
you edit your page you add and commit the push(when online bro) kama hauna 
net utakuwa una add commit alafu unapush tu ukiwa online  so use your vscode 
kama editing tool then  git bash kupush</h>

<h>Hello bro lets take this as the next challange</h>

<h2> OKAY BROO AVE SEEN LETS CODE,,TRYING  OU WEBPAGE SET OUT </h2>


<h3> checking </h3>

</div> 


</body>
</html>
