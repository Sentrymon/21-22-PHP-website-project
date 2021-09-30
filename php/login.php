<?php

    session_start();
    require_once("../server.php");

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $query = "SELECT 'id' FROM author WHERE name = '$username' AND password = '$password'";

    $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($db), E_USER_ERROR);;

    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['author'] = mysqli_fetch_array($result)[0];
        header("Location: http://localhost/login_frontend.php?loggedin=1");
    }
    else
    {
        header("Location: http://localhost/login_frontend.php?error=1");
    }
?>