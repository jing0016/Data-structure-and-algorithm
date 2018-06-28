<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2018/6/28
 * Time: 11:30 AM
 */

function timeConversion($s) {

    $sub = substr($s,0,2);
    if(substr($s,8,2)=='PM') {
        $hour = (int)$sub +12;
        if($sub=='12') $hour = $hour -12;
        $format = (string)($hour) . substr($s,2,6);
    }
    else{

        if($sub=='12')$sub = '00';
        $format = $sub. substr($s,2,6);
    }
    return $format;

}

$s = '12:40:22AM';
$result = timeConversion($s);
echo $result;