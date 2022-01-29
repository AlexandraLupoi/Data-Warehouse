<?php
    include_once '../db/connection.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Library</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <style><?php include 'style.css';?></style>
    </head>
    <body>
        <div class="menu-bar">
        <nav class="menu">
            <a id=titleCategories class="item_menu">CATEGORIES</a>
            <div class="listcontainer">
            <label class="container">Fiction
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="container">History
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="container">Psychology
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="container">Religion
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            </div>
        </nav>
            <ul class="navtop">
                <!--<li><div class="top">
                    <a href="#" class="menu_icon"><i class="fa fa-bars" aria-hidden="true"></i></a>
                </div></li>-->
                <li id="homeBtn"><i class="fa fa-home" aria-hidden="true" onClick="document.location.href='index.php';"></i></li>
                <img src="images/logo.svg" alt="Logo" style="width: 60px; height: 60px; margin-bottom: -15px; "/>
                <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                <?php
                    if(isset($_SESSION['customer_id'])) {
                        echo '<li><i class="fa fa-user" onClick="document.location.href=\'profile.php\';"></i></li>';
                    } else {
                        echo '<li><button class="btn btn-primary" type="button" name="login" id="login" data-toggle="modal" data-target="#loginModal">Login</button></li>';
                    }
                ?>
            </ul>
        </div>
    </body>
</html>

<script>
//    $(document).ready(function() {
//	$("body").on('click', '.top', function() {
//		$("nav.menu").toggleClass("menu_show");
//	});
//});

$(function(){
     $(".btn-primary").click(function(){
     
          //document.getElementById('loginModal').style.display = "block";
          //$('#loginModal').modal('show');
     })
})
//LOGIN/LOGOUT - https://www.webslesson.info/2016/11/make-login-form-by-using-bootstrap-modal-with-php-ajax-jquery.html

</script>

