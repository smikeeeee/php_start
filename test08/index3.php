<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="form" action="index3.php"method="post">
                <p>Ваше имя:</p>
                    <input type="text" name="name"><br>
                <p>Ваш пол:</p>
                    <input type="radio" name="gender" value="male">Мужчина<br>
                    <input type="radio" name="gender" value="female">Женщина<br>
                    <input type="submit" value="Submit" name="submit">
            </form>
    <?php
    $name = $_POST["name"];
    $sex = $_POST["gender"];
    if(isset($_POST['submit'])){
        if($sex === "male"){
            echo"Добро пожаловать, мистер $name!";
        }else{
            echo"Добро пожаловать, миссис $name!";
        }
    }
    ?>
</body>
</html>