<?php

function getMainPosts()
{
    $db = mysqli_connect('localhost', 'root', '', 'website_articles');
    $query = "SELECT * FROM article";
    //LIMIT 20 ORDER BY date DESC
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