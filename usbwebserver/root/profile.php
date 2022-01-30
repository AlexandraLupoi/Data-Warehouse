<body>
    <?php include 'header.php';?>

    <div style="margin: 50px;">
        <h2 style="margin-bottom: 50px;">User profile</h2>
         <b>First name: </b>
        <?php
            echo '<p>' . $_SESSION['first_name'] . '</p>';
        ?>
        <br>
        <b>Last name: </b>
        <?php
            echo '<p>' . $_SESSION['last_name'] . '</p>';
        ?>
        <br>
        <b>Email: </b>
        <?php
            echo '<p>' . $_SESSION['email'] . '</p>';
        ?>
        <br>
        <b>Phone number: </b>
        <?php
            echo '<p>' . $_SESSION['phone_number'] . '</p>';
        ?>
        <br>
        <button type="button" class="btn btn-primary" onClick="document.location.href='order_history.php';" style="float:left;margin:30px;">Order history</button>
    </div>
</body>

<script>
    document.getElementById("categoryList").style.display = "none";
</script>