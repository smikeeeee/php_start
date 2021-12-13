<?php

require_once 'classes.php';

$publications = array();

// $news1 = new NewsPublication;
// $news2 = new NewsPublication;
// $article = new ArticlePublication;
// $photo = new PhotoReportPublication;

// $publications = array($news1, $news2, $article, $photo);



$con = mysqli_connect("localhost", "root", "", "testsite2");
if (mysqli_connect_errno()){
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM publication");

while($row = mysqli_fetch_array($result)){
        $publications[] = new $row['type']($row);
    }
