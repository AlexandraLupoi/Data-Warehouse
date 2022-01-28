<html>
    <head>
        <title>Menu bar</title>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     </head>
    <body>
        <div class="menu-bar">
            <ul>
             <!--
                <li class="active" id="homeBtn"><i class="fa fa-home" aria-hidden="true"></i><a href="#">Home</a></li>-->
                <li><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="#">Cart</a></li>
                <li><button class="btn btn-primary" type="button" name="login" id="login" data-toggle="modal" data-target="#loginModal">Login</button></li>
            </ul>
        </div>
    </body>
</html>

<script>


$(function(){
     $(".btn-primary").click(function(){
     
          //document.getElementById('loginModal').style.display = "block";
          //$('#loginModal').modal('show');
     })
})
//LOGIN/LOGOUT - https://www.webslesson.info/2016/11/make-login-form-by-using-bootstrap-modal-with-php-ajax-jquery.html

</script>

