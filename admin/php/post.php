<?php 
    $title = $_POST['title'];
    $seo_title = $_POST['seo_title'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $author = $_POST['author'];



    $db = mysqli_connect('localhost', 'root', '', 'website_articles');

    $query = "INSERT INTO article (title, seo_title, content, author) VALUES ('$title', '$seo_title', '$content', '$author')";

    mysqli_query($db, $query);

    $query = "SELECT id FROM article WHERE seo_title='$seo_title'";
    $result = mysqli_query($db, $query);

    $row = mysqli_fetch_array($result);
    $post_id = $row[0];
    
    $category_array = explode(" ", $category);

    foreach($category_array as $element)
    {
        $query = "INSERT INTO has_category (post, category) VALUES ($post_id, $element)";
        mysqli_query($db, $query);
    }

    header('Location: http://localhost/admin/index.php')

?>