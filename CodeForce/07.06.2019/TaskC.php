<?php

$n = explode(" ", trim(fgets(STDIN)))[0];
$inMyHand = explode(" ", trim(fgets(STDIN)));
$inTheCard = explode(" ", trim(fgets(STDIN)));

function minCountOfOperation($n, $inMyHand, $inTheCard)
{
    $minOpCount = 0;
    $card = new SplQueue();
    $hand = new SplDoublyLinkedList();
    foreach($inTheCard as $value)
    {
        $card->push($value);
    }

    foreach($inMyHand as $value)
    {
        $hand->push($value);
    }

    print_r($card);
    print_r($hand);

    return $minOpCount;
}

minCountOfOperation($n, $inMyHand, $inTheCard);