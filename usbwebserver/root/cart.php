<body>
    <?php include 'header.php';?>

    <h2 style="margin-left: 36px;margin-top: 30px;color: black;font-weight: 500;">SHOPPING LIST</h2>
    <?php
        echo '
        <table class="table table-hover" style="margin-left: 2%;width: 50%;margin-top: 3%;">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
        ';

        $total_cost = 0;
        $index = 1;

        $customer = $_SESSION['customer_id'];
        
        $sql1 = "SELECT book_id, cost FROM orders WHERE customer_id = $customer AND status = 'in cart';";
        $result1 = mysqli_query($conn, $sql1);
        while($value = mysqli_fetch_array($result1)) {
            $id = $value['book_id'];
            $price = $value['cost'];
            $total_cost += $price;

            $sql = "SELECT title FROM book WHERE book_id = $id;";
            $result = mysqli_query($conn, $sql);
            $value = mysqli_fetch_array($result);
            $title = $value['title'];

            echo '
                <tr>
                    <th scope="row">' . $index . '</th>
                    <td>' . $title . '</td>
                    <td>' . $price . '$</td>
                </tr>
            ';

            $index++;
        }

        echo '</tbody></table><h2 style="margin-top: 3%;margin-left: 2%;font-size: 21px;">TOTAL: ' . $total_cost . '$</h2>';
    ?>
    <form action="db/add_address.php" method="post">
        <div class="row">
            <div class="column" style="margin-left: 3%; margin-right:3%">
                <label style="display:none; margin-left:3%; font-weight: bolder;" for="country" id="labelCountry">Country:</label>
                <input style="display:none; margin-left:3%;" type="text" id="country" name="country" class="form-control" required><br>
                <label style="display:none; margin-left:3%; font-weight: bolder;" for="city" id="labelCity" >City:</label>
                <input style="display:none; margin-left:3%;" type="text" id="city" name="city" class="form-control" required><br>
            </div>
            <div class="column">
                <label style="display:none; margin-left:3%; font-weight: bolder;" for="city" id="labelStreet">Street:</label>
                <input style="display:none; margin-left:3%;" type="text" id="street" name="street_name" class="form-control" required><br>
                <label style="display:none; margin-left:3%; font-weight: bolder;" for="city" id="labelNumber">Number:</label>
                <input style="display:none; margin-left:3%;" type="text" id="number" name="street_number" class="form-control" required>
            </div>
        </div>
        <button type="submit" id="finishComand" class="btn btn-success" style="font-size: large; margin-left:2%;">Send</button>
    </form>
</body>

<script>
    document.getElementById("categoryList").style.display = "none";

    document.getElementById('labelCountry').style.display="block";
    document.getElementById('country').style.display="block";
    document.getElementById('labelCity').style.display="block";
    document.getElementById('city').style.display="block";
    document.getElementById('labelStreet').style.display="block";
    document.getElementById('street').style.display="block";
    document.getElementById('labelNumber').style.display="block";
    document.getElementById('number').style.display="block";
    document.getElementById('address').style.display="block";
    document.getElementById('shopAddress').style.display="none";
</script>