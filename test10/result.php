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
               $question1 = $_SESSION['question1'];
               $question2 = $_SESSION['question2'];
               $question3 = $_POST['question3'];


               if (($question1 == 4) &&($question2 == 4) && ($question3 == 4)){
                   echo('Все ответы верны!');
               }else{
                   echo('Где-то ты наебался, Братан!');
               }
               echo '<br>';

               echo session_id();
            ?>
</body>
</html>