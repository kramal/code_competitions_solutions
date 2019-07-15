<?php
$result = [];

function isStringSuppliable($s,$t,$p)
{

    $sArr = str_split($s);
    sort($sArr);
    $s = implode("",$sArr);

    $tArr = str_split($t);
    sort($tArr);
    $s = implode("",$tArr);

    $pArr = str_split($p);
    sort($pArr);
    $p = implode("",$pArr);

    if(strlen($s) >= strlen($t))
    {
        $position = strpos($s,$t);

        echo $position.PHP_EOL;

        if($position)
        {
            $diff = substr($s, $position);

            $positionAtT = strpos($t, $diff);

            if($positionAtT)
                return "YES";
        }

        return "NO";
    }

    if(strlen($s) < strlen($t))
    {
        $position = strpos($t,$s);

        echo $position.PHP_EOL;

        if($position)
        {
            $diff = substr($t, $position);

            $positionAtT = strpos($t, $diff);

            if($positionAtT)
                return "YES";
        }

        return "NO";
    }

    return "NO";

}

$n = explode(" ", trim(fgets(STDIN)));

$nRequestNumber = $n[0];

echo "Read from input $nRequestNumber times ".PHP_EOL;

if( !is_nan($nRequestNumber) )
{
    for($i = 0; $i < $nRequestNumber; $i++)
    {
        $s = trim(fgets(STDIN));
        $t = trim(fgets(STDIN));
        $p = trim(fgets(STDIN));

        array_push($result, isStringSuppliable($s,$t,$p));
        
    }

    echo " End of reading".PHP_EOL;
}

foreach($result as $value)
{
    echo $value.PHP_EOL;
}