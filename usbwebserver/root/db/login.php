<?php
    include_once 'connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = "SELECT * FROM customer WHERE email='$email';";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $login)) {
        header('Location: ../index.php?login=error');
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, 'i', $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($result)) {
            if($password != $row['password']) {
                header('Location: ../index.php?login=error');
                exit();
            } else {
                session_start();

                $_SESSION['customer_id'] = $row['customer_id'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['last_name'] = $row['last_name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['phone_number'] = $row['phone_number'];

                header('Location: ../index.php?login=success');
                exit();
            }
        } else {
            header('Location: ../index.php?login=error');
            exit();
        }
    }