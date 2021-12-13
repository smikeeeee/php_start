<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_1</title>
</head>
<body>
    <?php
    // Проверка пользователя на посещение страницы
        if(empty($_COOKIE['name'])){
                echo("Добро пожаловать, новичок!");
                setcookie('name', '$name', time()+10);
        }else{
            echo("С возвращением, дружище!");
        }    
    ?>

</body>
</html>