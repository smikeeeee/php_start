<?php
session_start();
$task1 = $_SESSION['number1'];
$task2 = $_SESSION['number2'];
$task3 = $_POST['number'];

if (($task1 == 'qu') && ($task2 == 'ichi') && ($task3 == 'san')){
    echo('Все ответы верны!');
}else{
    echo('Где-то ты наебался, Братан!');
}
?>