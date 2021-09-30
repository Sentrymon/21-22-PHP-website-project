<?php

    session_start();
    
    $db = mysqli_connect('localhost', 'root', '', 'website_articles');

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $contact_info = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $query = "INSERT INTO `author` (`id`, `name`, `contact_info`, `password`, `reputation`, `account_date`) VALUES (NULL, 'pog', 'poggers@gmail.com', 'poggerino', '0', current_timestamp());

    $result = mysqli_query($db, $query);

    /*
    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['author'] = mysqli_fetch_array($result)[0];
        header("Location: http://localhost/admin/index.php");
    }
    else
    {
        header("Location: http://localhost/admin/index.php?error=1");
    }
    */
?>
