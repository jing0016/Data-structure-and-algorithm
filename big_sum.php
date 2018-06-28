<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2018/6/28
 * Time: 7:59 AM
 */

function aVeryBigSum($ar) {
    $length = count($ar);
    $sum =0;
    for($i =0;$i<$length;$i++)
    {
        $sum += $ar[$i];
    }
    return $sum;
}


$ar = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];
$result = aVeryBigSum($ar);

echo $result;