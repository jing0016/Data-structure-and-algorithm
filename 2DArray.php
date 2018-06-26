<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2018/6/26
 * Time: 9:31 AM
 */

function hourglassSum($arr) {

    for($i = 1; $i < 5; $i++)
    {
        for($j = 1; $j<5;$j++)
        {
            $temp = $arr[$i][$j] + $arr[$i-1][$j-1] + $arr[$i-1][$j] + $arr[$i-1][$j+1] +
                $arr[$i+1][$j-1] + $arr[$i+1][$j] + $arr[$i+1][$j+1];

            if(!isset($max) || $temp > $max)
            {
                $max = $temp;
            }
        }
    }
    return $max;
}

$arr = array(
    array(-1, -1, 0, -9, -2, -2),
    array(-2, -1, -6, -8, -2, -5),
    array(-1, -1, -1, -2, -3, -4),
    array(-1, -9, -2, -4, -4, -5),
    array(-7, -3, -3, -2, -9, -9),
    array(-1, -3, -1, -2, -4, -5)
);

$result = hourglassSum($arr);
echo $result;






