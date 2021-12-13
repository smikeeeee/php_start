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
        session_start();
        $task2 = $_POST['number'];
        $_SESSION['number2'] = $task2;
    ?>


                <form class="form" action="result.php"method="post">
                    <p>2 + 1 = ?</p>
                        <input type="radio" name="number" value="ichi">1<br>
                        <input type="radio" name="number" value="ni">2<br>
                        <input type="radio" name="number" value="san">3<br>
                        <input type="radio" name="number" value="qu">4<br>
                        <input type="submit" value="Submit" name="submit">
                </form>
</body>
</html>