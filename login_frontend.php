<?php 
    $title = "Admin";
    require_once "includes/header.php" ?>

<html>
<body>

<form action="./php/login.php" method="post"; style="margin: 100px;">
    Username: <input type="text" name="username"><br>
    Password: <input type="text" name="password"><br>
    <input type="submit">
</form>

</body>
</html>
    
<?php require_once "includes/footer.php" ?>