<body>
    <?php include 'header.php';?>

    <div style="margin: 50px 200px;">
        <h2>User profile</h2>
        <form action="/action_page.php">
             <label>First name: </label><br><br>
            <label>Last name: </label><br><br>
            <label>Email: </label><br><br>
            <label>Phone number: </label><br><br>      
        </form> 
        <br><br><br><br>
        <button type="button" class="btn btn-primary" onClick="document.location.href='order_history.php';" style="float:left;margin:30px;">Order history</button>
    </div>
</body>