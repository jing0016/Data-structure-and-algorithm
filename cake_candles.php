<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2018/6/28
 * Time: 11:11 AM
 */

function birthdayCakeCandles($ar) {
    $length = count($ar);
    $max = max($ar);
    $count = 0;
    for($i = 0;$i<$length;$i++){
        if($max == $ar[$i]) $count++;
    }
    return $count;
}

$ar = [3,2,1,3];

$result = birthdayCakeCandles($ar);

echo $result;