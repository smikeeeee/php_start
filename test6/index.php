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

//task #1
//подсчёт и вывод в массив общих количества товаров и суммы покупки в массив данных

$products = array(
    array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
    array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
    array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
);


function totalInfo($products)
{
    $totalPrice = 0;
    $totalQuantity = 0;
    foreach ($products as $value) {
        $totalQuantity += $value['quantity'];
        $totalPrice += ($value['price'] * $value['quantity']);
    }

    return array('totalPrice' => $totalPrice, 'totalQuantity' => $totalQuantity);

}

$result = totalInfo($products);

echo '<pre>';
print_r($result);
echo '</pre>';

echo '<hr>';

//task #2--------------------------------------------------------------------------------
//решение квадртного уравнения через функцию

function squad ($a, $b, $c){
    $d = (($b * $b)-4*$a*$c);
        if ($d > 0){
            $x1 = (-$b+(sqrt(($b*$b)-4*$a*$c)))/(2 * $a);
            $x2 = (-$b-(sqrt(($b*$b)-4*$a*$c)))/(2 * $a);
            return array('X1' => $x1, 'X2' => $x2);
        }elseif($d == 0){
            return ((-$b + sqrt($d))/(2 * $a));
        }else{
            return false;
        }
}

echo '<pre>';
print_r(squad(1, 26, 120));
echo '</pre>';

echo '<hr>';

//task #3------------------------------------------------------------------------
//удаление отрицательных значений массива

function deleteNegtives($arr)
{
    foreach ($arr as $key => $element){
        if ($element < 0){
            unset($arr[$key]);
        }
    }
    return $arr;
}

$digits = array(2, -10, -2, 4, 5, 1, 6, 200, 1.6, 95);

$results = deleteNegtives($digits);


echo '<pre>';
    print_r($results);
echo '</pre>';

echo '<hr>';

//task #4
//удаление отрицательных значений массива использую аргумент по ссылке

function deleteNegtive(&$arr)
{
    foreach ($arr as $key => $element){
        if ($element < 0){
            unset($arr[$key]);
        }
    }
    return $arr;
}

$digits = array(2, -10, -2, 4, 5, 1, 6, 200, 1.6, 95);

deleteNegtive($digits);


echo '<pre>';
    print_r($results);
echo '</pre>';


?>


</body>
</html>