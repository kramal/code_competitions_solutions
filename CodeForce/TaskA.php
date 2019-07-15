<?php
// $a = ['a','a'];
// $b = ['b'];
// $c = ['ab','ab'];

function getMaxLength($a, $b, $c){

    $c_length = $c * 2;

    $b_size = $b;
    $a_size = $a;

    $w_left = 0;
    $w_right = 0;

    // When left 
    $l_length = 0;
    if($b_size > $a_size)
    {
        $l_length = 2 * $a_size + 1;
    }
    else if($b_size == $a_size)
    {
        $l_length = 2 * $a_size;
    }
    else
    {
        $l_length = 2 * $b_size;
    }
    //echo "L_length=".$l_length.PHP_EOL;
    $w_left = $l_length + $c_length;
    //echo "W_left=".$w_left.PHP_EOL;

    // When right
    $r_length = 0;
    if($a_size > $b_size)
    {
        $r_length = 2 * $b_size + 1;
    }
    else if( $a_size == $b_size)
    {
        $r_length = 2 * $a_size;
    }
    else
    {
        $r_length = 2 * $a_size;
    }
    //echo "R_length=".$r_length.PHP_EOL;
    $w_right = $r_length + $c_length;
    //echo "W_right=".$w_right.PHP_EOL;

    return max($w_right, $w_left);
}

$n = explode(" ", trim(fgets(STDIN)));

$a1 = $n[0];
$b1 = $n[1];
$c1 = $n[2];

echo getMaxLength($a1,$b1,$c1);