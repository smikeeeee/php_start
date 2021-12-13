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
        Сегодня <?php print date("d:m:y H:i:s");
        ?></p>

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
                <h1>Страница index.php</h1>
                <a href="page.php">Страница page.php</a>
            <br><br>
                <p>Привет <?php echo $name; ?>!</p>
            <form method="post">
                <input type="text" name="name">
                <input type="submit">
            </form>
            <?php 
                $str = $_COOKIE['arr'];
                $result = unserialize($str);
                echo '<pre>';
                print_r ($result);
                echo '</pre>';
            ?>
</body>
</html>