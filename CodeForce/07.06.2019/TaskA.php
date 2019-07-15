<?php

$votes = explode(" ", trim(fgets(STDIN)));

$x = $votes[0];
$y = $votes[1];
$z = $votes[2];

echo giveVerdict($x, $y, $z);

function giveVerdict($x, $y, $z){

    if( $z == 0 )
    {
        if($x == $y) return 0;
        return $x > $y ? "+" : "-";
    }
    else
    {
        if($x > $y + $z) return  "+";

        if($y > $x +$z) return "-";

        return "?";
    }

}

