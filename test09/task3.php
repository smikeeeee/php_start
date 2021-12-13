<?php
$count = 1;
if(isset($_COOKIE["count"])){
    $count = intval($_COOKIE["count"]);
    $count++;
    $str = "Количество посещений: $count";
}else{
    $str = 'Первое посещение';
}
setcookie("count", $count);
//количество посещений
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