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
        $question1 = $_POST['question1'];
        $_SESSION['question1'] = $question1;
    ?>
    
    <p>Вопрос №2</p>
    <p>3 + 1 = ?</p>
    <form action="question3.php" method="post">
        <input type="text" name="question2">
        <input type="submit">
    </form>
</body>
</html>