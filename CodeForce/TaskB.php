<?php

$data= explode(" ", trim(fgets(STDIN)));
$a1= explode(" ", trim(fgets(STDIN)));
$b1= explode(" ", trim(fgets(STDIN)));

$n = $data[0];
$m = $data[1];
$ta = $data[2];
$tb = $data[3];
$k = $data[4];

$a_moments = [];
$b_moments = [];
$r_moments = [];

foreach($a1 as $v)
{
    $a_moments[] = $v + $ta;
}

foreach($b1 as $v)
{
    $b_moments[] = $v + $tb;
}

for($i = 0; $i < count($b1); $i++)
{
    for($j = 0; $j < count($a_moments); $j++)
    {
        if($b1[$i] > $a_moments[$j])
        {
            $r_moments[] = $b_moments[$i];
        }
    }
}



if(count($r_moments) == 0) echo -1;

sort($r_moments);


print_r($r_moments);

array_splice($r_moments, 0, $k);

print_r($r_moments);exit;

if(count($r_moments) > 0) echo $r_moments[0];
echo -1;


