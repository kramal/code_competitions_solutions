<?php

$handle = fopen("./sample.in", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        
        echo getNumberOfPermutation($line).PHP_EOL;


    }

    fclose($handle);
} else {
    // error opening the file.
}

function getNumberOfPermutation($string)
{
    $simbols_arr = str_split(trim($string));

    print_r($simbols_arr);

    $simbols_counts = array_count_values($simbols_arr);

    $f = function($number){
        $res = 1;
        for($i = 1; $i < $number + 1; $i++)
        {
            $res *= $i;
        }

        return $res;
    };

    $sub_sum = 1;

    for($i = 0; $i < count($simbols_counts); $i++)
    {
        $sub_sum *= $f($simbols_counts[$i]);

    }

    return $f(array_sum($simbols_counts))/($sub_sum);
}