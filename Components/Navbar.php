<!DOCTYPE html>
<body>
<?php include_once ("Components/Html_Head.php"); ?>
<script src = "./Javascript/Navbar.js"></script>

<!--External links-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Navbar style and design-->
<div class= "Navbar" id="MyNavbar">
    <a class="logo" href="Home.php">Template</a>
    <?php
    if(!isset($_SESSION['id'])){
    echo" <a class='Nav_button' href='SignUp.php'>Register</a>";
    } else {
    echo" <a class='Nav_button' href='Logout.php'>Logout</a>";
    }
    ?>
    <a href="#">Blank</a>
    <a href="#">Blank</a>
    <a href="#">Blank</a>
    <a href="javascript:void(0);" class="icon" onclick="navFunction()">
    <i class="fa fa-bars"></i>
    </a>
</div>

</body>
</html>