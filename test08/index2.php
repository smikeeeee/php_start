<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test07-08</title>
</head>
<body>

<form action="index2.php" method="post">
                <!-- 0: <input type="text" name="0"><br>
                1: <input type="text" name="1"><br>
                2: <input type="text" name="2"><br>
                3: <input type="text" name="3"><br>
                4: <input type="text" name="4"><br>
                5: <input type="text" name="5"><br>
                6: <input type="text" name="6"><br> -->
                <?php
                for ($i = 1; $i < 8; $i++){
                    echo '<input type="text" name="numbers[]"><br>';
                }
                ?>
                <input type="submit" value="Submit" name="submit">
            </form>
    <?php

            $result = isset($_POST['numbers'])?$_POST['numbers']:[];
            echo '<pre>';
            print_r($result);
            echo'</pre>';

        $arr = $_POST['numbers'];
        sort($arr);// сортировка полченного массива
        echo '<br>';

        print_r($arr[0]);//вывод минимального числа
        echo '<br>';

        print_r($arr[count($arr) - 1]);//вывод максимального числа
        echo '<br>';

        
        print_r(array_sum($arr) / count($arr));//вывод среднего арифметического

    ?>
</body>
</html>