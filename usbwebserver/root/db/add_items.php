<?php
    include_once 'connection.php';
    session_start();

    $book = $_POST['book'];
    $price = $_POST['price'];
    $customer = $_SESSION['customer_id'];

    $sql = "SELECT book_id FROM book WHERE title = '$book'";
    $result = mysqli_query($conn, $sql);
    $value = mysqli_fetch_array($result);
    $id = $value['book_id'];

    $order = "INSERT INTO orders(quantity, cost, status, order_method, customer_id, book_id) VALUES (1, $price, 'in cart', 'online', $customer, $id);";

    mysqli_query($conn, $order);

    header('Location: ../index.php?addItem=success');