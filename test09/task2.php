
<?php
if(isset($_COOKIE['timer'])){
    $str = 'Последний визит был ' . $_COOKIE['timer'];
}else{
    $str = 'Вы тут впервые!';
}
setcookie("timer", date('Y-m-d h:i:s'));
//последнее посещение
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p align="center"><?php echo $str; ?></p>

</body>
</html>