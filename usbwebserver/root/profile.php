<!DOCTYPE html>
<html lang="en">
<style>
header {
  background-color: rgb(233, 117, 8);
  padding: 30px;
  font-size: 35px;
  color: white;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header id="header">
    <div class="header_top"><!--header_top-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="" width="80" height="80" class="center"/></a>
                <button type="button" class="btn btn-primary" onClick = document.location.href='index.php'; style="float:left;margin:30px;">Home</button>
                <?php include 'header1.php';?>
            </div>
             </div>
        </nav>
    </div>
    
</header>
<body>
    
    <h2>User profile</h2>
    <form action="/action_page.php">
         <label>First name: </label><br><br>
         <label>Last name: </label><br><br>
         <label>Email: </label><br><br>
         <label>Phone number: </label><br><br>      
    </form> 
    <br><br><br><br>  
    
    <button type="button" class="btn btn-primary" onClick = document.location.href='order_history.php'; style="float:left;margin:30px;">Order history</button>

</body>
</html>