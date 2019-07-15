<?php

$countOfLines = explode(" ", trim(fgets(STDIN)))[0];
$results = [];


for($i = 0; $i < $countOfLines; $i++)
{
    $line = explode(" ", trim(fgets(STDIN)));
    
    $n = $line[0];
    $k = $line[1];

    $operations = getMinOperationCount($n,$k);

    array_push($results, $operations);
}

function getMinOperationCount($n, $k)
{
    if($n < $k)
        return $n;
    else if($n == $k)
        return 2;
    else 
    {
        $mod_sum = 0;
        $count = 0;

        while( $n >= $k )
        {
            $mod = $n%$k;
            $mod_sum += $mod;

            $n -= $mod;
            $n /= $k;
            $count++;
        }


        return $mod_sum > 0 
            ? ($n + $count +$mod_sum)
            : ($count);
    }
}

foreach($results as $val){
    echo $val.PHP_EOL;

}

// echo getMinOperationCount(26,3);

// echo getMinOperationCount(6,10).PHP_EOL;
// echo getMinOperationCount(59,3).PHP_EOL;
// echo getMinOperationCount(1000000000000000000,10).PHP_EOL;
// echo getMinOperationCount(6,10).PHP_EOL;
// echo getMinOperationCount(10,3).PHP_EOL;
// echo getMinOperationCount(1001,2).PHP_EOL;





