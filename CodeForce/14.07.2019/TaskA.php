<?php
// $a = ['a','a'];
// $b = ['b'];
// $c = ['ab','ab'];

$result = [];

function getPointedElements($n, $x)
{
    return 2*$x;
}

$n = explode(" ", trim(fgets(STDIN)));

$nRequestNumber = $n[0];

if( !is_nan($nRequestNumber) )
{
    for($i = 0; $i < $nRequestNumber; $i++)
    {
        $line_data = explode(" ", trim(fgets(STDIN)));
        $n = $line_data[0];
        $x = $line_data[1];

        array_push($result, getPointedElements($n,$x));
        
    }
}

foreach($result as $value)
{
    echo $value.PHP_EOL;
}