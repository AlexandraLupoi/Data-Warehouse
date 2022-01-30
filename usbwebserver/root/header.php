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
        <nav class="menu" id="categoryList">
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
                <li><i class="fa fa-shopping-cart" aria-hidden="true" onClick="document.location.href=\'cart.php\'"></i></li>
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
<!-- The LOGIN Modal -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="md-form mb-5" style="margin-top: 35px;">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
            <input type="email" id="defaultForm-email" class="form-control validate">
        </div>
        <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Password</label>
            <input type="password" id="defaultForm-pass" class="form-control validate">
        </div>
        <div class="modal-footer d-flex justify-content-center">
             <button class="btn btn-primary">Login</button>
            <a id="registerRedirect" style="color: #007bff;text-decoration: underline;position: absolute;margin-top: 23%;cursor: pointer;">Looking to create an account?</a>
         </div>
    </div>
</div>
<!-- The LOGIN Modal stop -->

<!-- The SIGN UP Modal -->
<div id="signupModal" class="modal">
    <div class="modal-content" id="signupModalContent">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="md-form mb-5" style="margin-top: 35px;">
            <i class="fas fa-user"></i>
            <label data-error="wrong" data-success="right" for="first-name">First Name</label>
            <input type="name" id="firstNameId" class="form-control validate">
        </div>
        <div class="md-form mb-5">
            <i class="fas fa-user"></i>
            <label data-error="wrong" data-success="right" for="last-name">Last Name</label>
            <input type="name" id="lastNameId" class="form-control validate">
        </div>
        <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="email">Email</label>
            <input type="email" id="email" class="form-control validate">
        </div>
        <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="pass">Password</label>
            <input type="password" id="pass" class="form-control validate">
        </div>
        <div class="modal-footer d-flex justify-content-center">
             <button style="background-color: orange;color: white;" class="btn btn-deep-orange">Sign Up</button>
         </div>
    </div>
</div>
<!-- The SIGN UP Modal stop -->

<script>
//    $(document).ready(function() {
//	$("body").on('click', '.top', function() {
//		$("nav.menu").toggleClass("menu_show");
//	});
//});

//LOGIN MODAL
var modal = document.getElementById("loginModal");
var modal2 = document.getElementById("signupModal");
var btn = document.getElementById("login");
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close")[1];
var link = document.getElementById("registerRedirect");

btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
  modal2.style.display = "none";
}
span2.onclick = function() {
  modal2.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
link.onclick = function() {
    modal.style.display = "none";
    modal2.style.display = "block";
}
//FINISH LOGIN MODAL

//LOGIN/LOGOUT - https://www.webslesson.info/2016/11/make-login-form-by-using-bootstrap-modal-with-php-ajax-jquery.html

</script>

