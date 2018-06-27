<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2018/6/26
 * Time: 11:11 AM
 */

function arrayManipulation($n, $queries) {
    $m = count($queries);
    $arr = array_fill(1,$n,0);

    for($i = 0;$i<$m;$i++)
    {
//        for($j = $queries[$i][0];$j<=$queries[$i][1];$j++)
//        {
//            $arr[$j] += $queries[$i][2];
//        }

        $a = $queries[$i][0];
        $b = $queries[$i][1];
        $k = $queries[$i][2];
        $arr[$a] += $k;
        if(($b+1)<=$n){
            $arr[$b+1] -= $k;
        }
    }
//    $result = max($arr);
    $tempMax = 0;
    $result = 0;
    for($i = 1; $i <= $n;$i++)
    {
        $tempMax += $arr[$i];
        if($tempMax>$result) $result = $tempMax;
    }
    return $result;
}

$n = 4;
$queries = array(
    array(2, 3, 603),
    array(1, 1, 286),
    array(4, 4, 882),
);

$result = arrayManipulation($n, $queries);
echo $result;




