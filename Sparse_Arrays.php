<?php
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2018/6/26
 * Time: 10:33 AM
 */

function matchingStrings($strings, $queries) {
    $n = count($strings);
    $q = count($queries);
    $result = array();
    for($i = 0; $i<$q;$i++)
    {
        $count = 0;
        for($j =0; $j < $n;$j++)
        {
            if(strcmp($strings[$j],$queries[$i])==0)
            {
                $count++;
            }
        }
        array_push($result,$count);
    }
    return $result;
}

$strings = array('aba','baba','aba','xzxb');
$queries = array('aba','xzxb','ab');

$result = matchingStrings($strings,$queries);

foreach ($result as $r)
{
    echo $r. "\n";
}

