<?php
/*
    An array stores multiple values, and types of values, under a single identifier.
    An array uses a index to reference that data, and keep track of how many items are contained within.
    An array is referenced by $variable name [ index ], and then accessed like individual variables, $vn[0], $vn[1], etc.
    An array index always begins at 0. If you want to store 7 items, use an index value of 6.

*/
    $days = []; // We create an array.
    $days[0] = 'Sunday';
    $days[1] = 'Monday';
    $days[2] = 'Tuesday';
    $days[3] = 'Wednesday';
    $days[4] = 'Thursday';
    $days[5] = 'Friday';
    $days[6] = 'Saturday';

    echo $days[0], " ", $days[1], " ", $days[2], " ", $days[3], " ", $days[4], " ", $days[5], " ", $days[6], " ";

?>