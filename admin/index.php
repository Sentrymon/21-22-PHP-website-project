<?php 
    $title = "Admin";
    require_once "../includes/header.php" ?>

<html>
<body>

<form action="./php/post.php" method="post">
    <input type="hidden" name="author" value="1">
    Title: <input type="text" name="title"><br>
    seo_title: <input type="text" name="seo_title"><br>
    category: <input type="text" name="category"><br>
    content: <input type="text" name="content"><br>
    <input type="submit">
</form>

</body>
</html>
    
<?php require_once "../includes/footer.php" ?>