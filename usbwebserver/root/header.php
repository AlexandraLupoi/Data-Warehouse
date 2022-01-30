<?php
    include_once 'db/connection.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Library</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <style><?php include 'style.css';?></style>
    </head>
    <body>
        <div class="menu-bar">
            <nav class="menu" id="categoryList">
                <a id=titleCategories class="item_menu" style="margin-left:-5px;">CATEGORIES</a>
                <div class="listcontainer">
                    <?php
                        $sql = "SELECT genre FROM genre;";
                        $result = mysqli_query($conn, $sql);
                        while($value = mysqli_fetch_array($result)) {
                            $genre = $value['genre'];
                            echo '<label id="categ" class="container" style="margin-left: -10px; margin-bottom: 30px;">' . $genre . '</label>';
                        }
                    ?>
                    <script>
                        $(document).ready(function () {
                            $('#categ').on('click', function () {
                                $.ajax({
                                    url: 'categories.php',
                                    type: 'POST',
                                    data: {
                                        category: $(this).html()
                                    },
                                    success: function(html) {
                                        $('.bestSellerContainer').remove();
                                        $('.newsContainer').remove();
                                        $('body').append(html);
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </nav>
            <ul class="navtop">
                <!--<li><div class="top">
                    <a href="#" class="menu_icon"><i class="fa fa-bars" aria-hidden="true"></i></a>
                </div></li>-->
                <li id="homeBtn"><i class="fa fa-home" aria-hidden="true" onClick="document.location.href='index.php';"></i></li>
                <img src="images/logo.svg" alt="Logo" style="width: 60px; height: 60px; margin-bottom: -15px; "/>
                <li><i class="fa fa-shopping-cart" aria-hidden="true" onClick="document.location.href='cart.php'"></i></li>
                <?php
                    if(isset($_SESSION['customer_id'])) {
                        echo '<li><i class="fa fa-user" style="padding-bottom: 14px;" onClick="document.location.href=\'profile.php\';"></i></li>';
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
        <form action="db/login.php"  method="post">
            <div class="md-form mb-5" style="margin-top: 35px;">
                <i class="fas fa-envelope prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                <input type="email" name="email" id="defaultForm-email" class="form-control validate">
            </div>
            <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Password</label>
                <input type="password" name="password" id="defaultForm-pass" class="form-control validate">
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" name="connect" class="btn btn-primary">Login</button>
                <a id="registerRedirect" style="color: #007bff;text-decoration: underline;position: absolute;margin-top: 23%;cursor: pointer;">Looking to create an account?</a>
            </div>
        </form>
    </div>
</div>
<!-- The LOGIN Modal stop -->

<!-- The SIGN UP Modal -->
<div id="signupModal" class="modal" style="padding-top: 30px;">
    <div class="modal-content" id="signupModalContent">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="db/register.php" method="post">
            <div class="md-form mb-5" style="margin-top: 35px;">
                <i class="fas fa-user"></i>
                <label data-error="wrong" data-success="right" for="first_name">First Name</label>
                <input type="name" name="first_name" id="firstNameId" class="form-control validate">
            </div>
            <div class="md-form mb-5">
                <i class="fas fa-user"></i>
                <label data-error="wrong" data-success="right" for="last_name">Last Name</label>
                <input type="name" name="last_name" id="lastNameId" class="form-control validate">
            </div>
            <div class="md-form mb-5">
                <i class="fas fa-phone-square"></i>
                <label data-error="wrong" data-success="right" for="phone_number">Phone number</label>
                <input type="text" name="phone_number" id="phoneNumberId" class="form-control validate">
            </div>
            <div class="md-form mb-5">
                <i class="fas fa-envelope prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control validate">
            </div>
            <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="password">Password</label>
                <input type="password" name="password" id="pass" class="form-control validate">
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" name="connect" style="background-color: orange;color: white;" class="btn btn-deep-orange">Sign Up</button>
            </div>
        </form>
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

