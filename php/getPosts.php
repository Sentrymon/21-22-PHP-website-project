<?php

function getMainPosts()
{
    require_once("../server.php");
    $query = "SELECT * FROM article ORDER BY date DESC LIMIT 20";
    $result = mysqli_query($db, $query);
    while($row = mysqli_fetch_array($result))
    {
        $query = "SELECT name FROM category
                        INNER JOIN has_category ON category.id = has_category.category
                        WHERE has_category.post = " . $row['id'];
        $cat_result = mysqli_query($db, $query);
        $categories = "";
        while($category = mysqli_fetch_array($cat_result))
        {
            $categories .= '<span>'. $category['name'].'</span>';
        }

        echo '
        <div>
            <img class="postImg" alt="'. $row['title'].'">
            <div class="postContent">
                <h2>'. $row['title'].'</h2>
                <p>'. $row['date'].'</p>
                <p>'. $categories.'</p>
            </div>
        </div>
        ';
    }

}

?>