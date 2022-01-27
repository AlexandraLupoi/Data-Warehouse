<?php

include_once 'connection.php';
session_start();

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];

$register = "INSERT INTO customer(first_name, last_name, email, password, phone_number) VALUES ('$first_name', '$last_name', '$email', '$password', '$phone_number');";

mysqli_query($conn, $register);

header('Location: ../index.php?signup=success');