<!DOCTYPE html>
<html lang="en">
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
		<?php include 'header.php';?>

        <div style="margin: 50px 200px;">
            <h2>Order history</h2>
            <br><br>
            <h2>Orders in progress:</h2>
            <ul>
                <label>Products: </label><br>
                <label>Delivery address: </label><br>
                <label for="html">Online/In the store</label><br><br>
            </ul>
            <br><br>
            <h2>Previous orders</h2>
            <form action="/action_page.php">
                <label>Products: </label><br>
                <label>Delivery address: </label><br>
                <label for="html">Online/In the store</label><br><br>
            </form> 
        </div>
    </body>
</html>