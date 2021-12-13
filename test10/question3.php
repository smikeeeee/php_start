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
        $question2 = $_POST['question2'];
        $_SESSION['question2'] = $question2;
    ?>

    <p>Вопрос №3</p>
    <p>4 + 0 = ?</p>
    <form action="result.php" method="post">
        <input type="text" name="question3">
        <input type="submit">
    </form>
</body>
</html>