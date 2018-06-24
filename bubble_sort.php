<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2018/6/24
 * Time: 8:30 AM
 */

function countSwaps($a) {
    $numSwaps = 0;
    $size = count($a) -1;
    for($i=0;$i<$size;$i++)
    {
        for($j=0;$j<$size- $i;$j++)
        {
            $k = $j + 1;
            if($a[$j]>$a[$k])
            {
                $temp = $a[$k];
                $a[$k] = $a[$j];
                $a[$j] = $temp;
                //list($a[$j], $a[$k]) = array($a[$k], $a[$j]);
                $numSwaps++;
            }
        }
    }

    echo 'Array is sorted in ' . $numSwaps . ' swaps.' . "\r\n";
    echo 'First Element: ' . $a[0] . "\r\n";
    echo 'Last Element: ' . end($a) . "\r\n";

}

$a = [3,2,1];
countSwaps($a);