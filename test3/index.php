<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <p>
        Сегодня <?php print date("y-m-d");
        ?></p>

            <?php
        $arr1 = array(1, 2, 3, 4, 5);
        $arr2 = array(6, 7, 8, 9, 0);
        $arr1[element] = '10';

        echo '<pre>';
        print_r($arr1);
        echo '</pre>';

        unset($arr2[0]);

        echo '<pre>';
        print_r($arr2);
        echo '</pre>';

        echo '<pre>';
        print_r($arr1[2]);
        echo '</pre>';

        echo '<pre>';
        print_r($arr2[2]);
        echo '</pre>';

        $count = array (count($arr1), count($arr2));
        echo '<pre>';
        print_r($count);
        echo '</pre>';
        ?>

</body>
</html>