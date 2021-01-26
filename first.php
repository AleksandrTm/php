<?php

$ticket_main = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$ticket_secondary = [1, 2, 3, 4];

$count_number_main = 8;

for ($i = 0; $i <= 19; $i++) {
    echo $ticket[$i];
    if ($i >= 9) {
        echo "   ";
    } 
    if ($i < 9) {
        echo "    ";
    } 
    if ($i == 5 || $i == 11 || $i == 17) {
        echo "\n";
    }
}

