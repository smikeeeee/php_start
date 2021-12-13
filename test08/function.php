<?php
function quadratic ($a, $b, $c){
    $d = (($b * $b)-4*$a*$c);
        if ($d > 0){
            $x1 = (-$b+(sqrt(($b*$b)-4*$a*$c)))/(2 * $a);
            $x2 = (-$b-(sqrt(($b*$b)-4*$a*$c)))/(2 * $a);
            return array('X1' => $x1, 'X2' => $x2);
        }elseif($d == 0){
            return ((-$b + sqrt($d))/(2 * $a));
        }else{
            return false;
        }
}

?>