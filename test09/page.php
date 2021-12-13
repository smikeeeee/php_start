<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>
<body>
    <?php
    if(isset($_POST['name']) && (!empty($_POST['name']))){
        $name = $_POST['name'];
        setcookie('name', $name);
    }elseif(isset($_COOKIE['name'])) {
        $name = $_COOKIE['name'];
    }else{
        $name = 'Гость';
    }
    ?>
    <h1>Страница page.php</h1>
    <p>Опять ты, <?php echo $name; ?>!</p>
    <a href="index.php">Страница index.php</a>

    <?php
    $arr = ['name' => 'Anton', 'age' => '31', 'city' => 'Kovrov'];
    $result = serialize($arr);
    setcookie('arr', $result);
    ?>
</body>
</html>