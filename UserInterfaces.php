<?php


























?>






<!DOCTYPE html>
<html lang="en" id= "loadEveryTime">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
    <link rel = "stylesheet" type= "text/css" href = "user_inter.css">



</head>



<body>
<span>

<div class="dropdown" id = "droping-positions">
<button class="dropbtn">Post product</botton>
<div class="dropdown-content">
<a href="#link1">Electronics</a>
<a href="#link2">House Holds</a>
<a href="#link3">Clothes</a>
<a href="#link4">Shoes</a>
</div>
</div>
<div class= "dropdown">
<button class= "dropbtn">View cart</button>
<div class= "dropdown-content">
<a href= "#name1">View added items</a>
<a href= "#name2">Drop item(s)</a>
<a href= "#name3">Clear Cart</a>
</div>
</div>

<div class= "dropdown">
<button class= "dropbtn">View products</button>
<div class= "dropdown-content">
<a href= "#country1">View currently posted</a>
<a href= "#countr2"> View all</a>
<a href= "#country3">Rate website</a>
</div>
</div>
</span>

<div class= "navbar">
<a href= "index.php"target="_self">Home</a>
</div>

<div class= "myheight">

<h1 style = "top:0%;"> ONLINE AUCTION SYSTEM </h1>
</div>
<h3> WE ENABLE YOU ADVERTISE YOUR PRODUCTS AND TRANSACT ONLINE </h3>

<br>
<h3>
<marquee  behavior="alternate"> <a><font color="RED">WELCOME ALL! LETS TALK BUSINESS</font></a></marquee>
</h3>

                <div class= "usebody">
                    <div class = glow>
                   <p>    
                        WE BUY AND SELL HERE TO ANYONE, CREATE ACCOUNT FOR NEW MEMBERS OR LOGIN AND EXPLORE THE WORLD OF BUSINESS HERE

</p>
</div>
</div>


<div class= "item1">

<img src = "/pic/phones" alt = "mobile phone" width = "0 " height = "0 " >

</div>


<div class = "item2">



<img src = "phones.jpg" alt = "mobile phone" width = " " height = " " >



</div>


<div class = "item3">



<img src = "phones.jpg" alt = "mobile phone" width = " " height = " " >



</div>


<div class = "item4">
    

<img src = "phones.jpg" alt = "mobile phone" width = " " height = " " >



</div>



<div class = "mylinks">
        <a href = "index.php" target = "_blank" title = "Online Auction System">login? </a>
            <br>
        <a href = "index.php" target= "_blank" title = "Online Auction System">click here to create account </a>
        <br>
</div>


<div class = "myfooter">

<p style = "padding-left:130px;">

  <br> 
Developper Ben-Alwanga&Levis Chisira, c- Tel +25468743827   Nairobi. <span> Email-- bensonmakokha25@gmail.com& levischisira@gmail.com</span>

</p>

</div>



<script type= "text/javascript">
    exports.userInterface = function firstPageAlways()
    {
    const container;
    document.getElementById('loadEveryTime') = container;
window.addeventlistener('load,container')
    }

    </script>
</body>
</html>