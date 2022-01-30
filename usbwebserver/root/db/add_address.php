<?php
    include_once 'connection.php';
    session_start();

    $shipping_date = date('Y-m-d', time() + 86400);

    $street_name = $_POST['street_name'];
    $street_number = $_POST['street_number'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $customer = $_SESSION['customer_id'];
    $shipping_cost = 7;

    $address = "INSERT INTO address(street_name, street_number, city, country, customer_id) VALUES ('$street_name', '$street_number', '$city', '$country', $customer);";

    mysqli_query($conn, $address);

    $sql = "SELECT order_id FROM orders WHERE customer_id = $customer";
    $result = mysqli_query($conn, $sql);
    $value = mysqli_fetch_array($result);
    while($value = mysqli_fetch_array($result)) {
        $order = $value['order_id'];

        $order = "UPDATE orders SET status = 'in progress' WHERE order_id = $order;";
        mysqli_query($conn, $order);

        $sql1 = "SELECT book_id FROM orders WHERE order_id = $order;";
        $result1 = mysqli_query($conn, $sql1);
        $value1 = mysqli_fetch_array($result1);
        $book = $value1['book_id'];
        
        $sql2 = "SELECT price FROM book WHERE book_id = $book;";
        $result2 = mysqli_query($conn, $sql2);
        $value2 = mysqli_fetch_array($result2);
        $price = $value2['price'];

        $total_cost = $price + $shipping_cost;

        $sql3 = "SELECT address_id FROM address WHERE customer_id = $customer;";
        $result3 = mysqli_query($conn, $sql3);
        $value3 = mysqli_fetch_array($result3);
        $address = $value3['address_id'];        

        $shipping = "INSERT INTO shipping(shipping_cost, total_cost, shipping_date, order_id, address_id) VALUES($shipping_cost, $total_cost, $shipping_date, $order, $address);";
        mysqli_query($conn, $shipping);
    }

    header('Location: ../index.php?shipping=success');