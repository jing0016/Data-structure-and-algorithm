<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2018/6/28
 * Time: 9:18 AM
 */

function miniMaxSum($arr) {
    $length = count($arr);
    $sum =0;
    $result = [];
    for($i =0; $i<$length;$i++){
        for($j=0;$j<$length;$j++){
            if($j!= $i)
            $sum += $arr[$j];
        }

        $result[] = $sum;
        $sum =0;
    }
    $max = max($result);
    $min = min($result);
    echo $min . ' '. $max;

}

$arr =[1,2,3,4,5];
miniMaxSum($arr);