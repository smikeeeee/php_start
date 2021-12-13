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
            //Сравниваем число на вхождение в интервал
        define('MIN', 10);
        define('MAX', 50);
        $x = 15;

        if ($x > MIN && $x < MAX){
            echo '+';
        }elseif($x == MIN || $x == MAX){
            echo "+-";
        }else{
            echo "-";
        }
        ?>

        <?php
        //ax2+bx+c=0
        $a = 2;
        $b = 1;
        $c = 3;

        $d = (($b * $b)-4*$a*$c);
        if ($d > 0){
            echo $x1 = (-$b+(sqrt(($b*$b)-4*$a*$c)))/(2 * $a);
            echo $x2 = (-$b-(sqrt(($b*$b)-4*$a*$c)))/(2 * $a);
        }elseif($d == 0){
            echo $x1 = (-$b/(2 * $a));
        }else{
            echo 'Корней нет!';
        }
        ?>

        <?php
        //Находим среднее арифметическое число и сравниваем не равны ли исходные данные между собой
        $a = 2;
        $b = 4;
        $c = 6;

        if($a == $b || $a == $c || $b == $c){
            echo 'Ошибка!';
        }else{
            echo $d = (($a + $b + $c)/3);
        }
        ?>



</body>
</html>