<?php 
session_start();
//include_once "connection.php";
include_once "./Components/Navbar.php";
?>
<DOCTYPE html lang="en">
    <body>
        <div class="Home_Display_Container"></div><!--image here-->

        <div class="Products_Label"><h1>Products available</h1></div><!--Procuct label-->

        <div class="Home_scroll_flex_container"><!--scroll list-->
            <div class="item_container"></div><!--change this to a while loop at some point-->
            <div class="item_container"></div>
            <div class="item_container"></div>
            <div class="item_container"></div>
            <div class="item_container"></div>
            <div class="item_container"></div>
            <div class="item_container"></div>
        </div>

        <div class="Home_Text_Container">
            <h1>Header Here</h1>
            <div class="Inner_Text">Text Goes Here</div>
        </div>


        <div class="Info_Container">Info Here</div><!--include the footer Here-->
    </body>
</html>