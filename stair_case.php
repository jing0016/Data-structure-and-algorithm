<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2018/6/28
 * Time: 8:53 AM
 */

function staircase($n) {
    for($i=1;$i<=$n;$i++){
        echo str_repeat(' ', $n - $i);
        echo str_repeat('#', $i);
        echo "\n";
    }

}

staircase(6);