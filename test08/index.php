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
            
                include_once 'function.php';

                if(isset($_POST['submit'])){
                        $a = $_POST['a'];
                        $b = $_POST['b'];
                        $c = $_POST['c'];
                            if(!empty($a) && !empty($b) && !empty($c)){
                                $result = quadratic($a, $b, $c);

                                if($result != false){
                                    print_r($result);
                                }else{
                                    echo 'корней нет';
                                }
                            }
                            echo '<br>';
                        echo "форма отправлена a = $a, b = $b, c = $c";
                }
                            echo '<hr>';
            ?>

            <form action="index.php"method="post">
                A: <input type="text" name="a"><br>
                B: <input type="text" name="b"><br>
                C: <input type="text" name="c"><br>
                <input type="submit" value="Submit" name="submit">
            </form>
            
</body>
</html>