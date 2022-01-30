<?php
    include_once 'depo-db/connection.php';
    session_start();
?>
<body>
    <?php include 'header.php';?>

    <div style="margin: 50px;">
        <h2>Order history</h2>
        <br><br>
        <?php
            $customer = $_SESSION['customer_id'];

            $sql = "SELECT book_id, address_id FROM orders WHERE customer_id = $customer;";
            $result = mysqli_query($connDepo, $sql);
            if(mysqli_fetch_array($result)) {
                echo '<h2>Orders in progress:</h2>';
            } else {
                echo '<h4>No order.</h4>';
            }
            while($value = mysqli_fetch_array($result)) {
                $book_id = $value['book_id'];

                $sql1 = "SELECT title FROM book WHERE book_id = $book_id;";
                $result1 = mysqli_query($connDepo, $sql1);
                $value1 = mysqli_fetch_array($result1);
                $book = $value1['title'];

                $address_id = $value['address_id'];

                $sql2 = "SELECT street_name, street_number, city, country FROM address WHERE address_id = $address_id;";
                $result2 = mysqli_query($connDepo, $sql2);
                $value2 = mysqli_fetch_array($result2);
                $address = $value2['street_name'] . ' ' . $value2['street_number'] . ', ' . $value2['city'] . ', ' . $value2['country'];

                echo '
                    <label>Products: ' . $book . '</label><br>
                    <label>Delivery address: ' . $address . '</label><br><br>
                ';
            }
        ?>
        <!-- <br><br>
        <h2>Previous orders</h2>
        <label>Products: </label><br>
        <label>Delivery address: </label><br> -->
    </div>
</body>

<script>
    document.getElementById("categoryList").style.display = "none";
</script>