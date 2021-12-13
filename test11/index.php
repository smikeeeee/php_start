<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    
        $con = mysqli_connect("localhost", "root", "", "testsite2");
        mysqli_set_charset($con, "utf-8");

        if (!$con){
            echo ("Failed" . mysqli_connect_error());
        }else{
            echo ("Normalno!");
        }

        $query = "SELECT * FROM news";
        $info = mysqli_query($con, $query);
        // var_dump($info);

        // echo mysqli_affected_rows($con);
        echo '<br>';
        echo mysqli_num_rows($info);
        echo '<br>';
        $row1 = mysqli_fetch_array($info);
        $row2 = mysqli_fetch_array($info);
        echo '<pre>';
        print_r($row1);
        echo '</pre>';
        echo '<hr>';
        echo '<pre>';
        print_r($row2);
        echo '</pre>';
    ?>
</body>
</html>