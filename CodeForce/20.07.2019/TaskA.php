<?php
// $a = ['a','a'];
// $b = ['b'];
// $c = ['ab','ab'];

$result = [];

function getAlliesList($votes_list)
{
    $half_votes_count = array_sum($votes_list)/2;
    $allies = [];
    $cleansed_votes_list = [];


    // first steps
    foreach($votes_list as $k=>$v)
    {
        if($k == 0)
        {
            $cleansed_votes_list[0] = $v;
            continue;
        }
        if($votes_list[0]/2 >= $v)
            $cleansed_votes_list[$k] = $v;
    }
    
    $sum = 0;

    foreach($cleansed_votes_list as $k => $v)
    {
        $sum += $v;
        $allies[] = $k+1;

        if($sum > $half_votes_count)
            return $allies;
        
    }

    return false;
}

$n = explode(" ", trim(fgets(STDIN)));

$nPartiesCount = $n[0];
$aData = [];

if( !is_nan($nPartiesCount) )
{
        $aData = explode(" ", trim(fgets(STDIN)));  
}

$result = getAlliesList($aData);
if($result)
{
    echo count($result).PHP_EOL;
    echo implode(" ", $result);
}
else
    echo "0";


