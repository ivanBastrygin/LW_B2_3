<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_row($check_user);

$_SESSION['id'] = $user[0];
        header('Location: ../article.php');

    } else {
        
         header('Location: ../index.php');
    }
    ?>


