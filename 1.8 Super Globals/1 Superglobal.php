<?php
/*
    The Super Globals are pre-defined PHP variables that are accessible by any part of the program. Each Super Global has
    it's own purpose and function. The first, is the $GLOBALS super global. It is an array that contains

*/
    $Test = "test";
    foreach ( $GLOBALS as $key => $var ) echo "$key", "<br>";
?>