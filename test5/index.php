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
<!--Task №1-->
            <?php
            //Решение с помощью цикла for
            $x = 0;
           for ($i = 1; $i < 26; $i++){
                $x += $i;
                echo $x;
               echo "<hr>";
           }
        ?>
    <p>Пробел между циклами</p>
    <br>
        <?php
        //Решение с помощью цикла while
        $x = 0;
        $i = 1;
        while ($i < 26){
            echo $x += $i;
            $i++;
        }
        ?>
<!--Task №2-->
        <?php
        //Выводим на экран все квадраты чисел по порядку до указанного числа
        $x = 0;
        for($i = 1; $i <= 12; $i++){
            $x = $i * $i;
            echo $x;
            echo "<br>";
        }
        ?>
<!--Task №3-->
        <?php
        //Создаём массив кнопок
        for ($i = 10; $i > 0; $i--) {
            $arr[] = "Кнопка $i";
            natsort($arr);
        }
        echo '<ul';
        foreach($arr as $element){
            echo "<li><a href=\"#\">$element</li>";
        }
        echo '</ul>';
        ?>


</body>
</html>