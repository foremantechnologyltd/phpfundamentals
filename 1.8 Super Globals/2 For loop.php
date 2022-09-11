<?php
/*
    Using For Loops is a quick and easy way to display what is in an array.
    We know the number of items in tha array, to quickly print them all out we can use a for loop.
    
    A for loop, will count from a value to a value, and repeat an action every time it counts. We call this a loop.
    We use a condition in a for loop, such as reaching a specific count to end that loop.

    *** components ***
    for ( create variable with number; set condition for loop to run; adjust variable up or down ) {
        perform an action
    }

    *** example ***
    for ( $n = 0; $n <= 6; $n++ ) {
        echo $days[$n], "<br>";
    }

    The $n is a variable we create for the loop, I use n for number, we set it to 0, then we test if the $n value is lower than 6, and if it is 
    we add 1 to the $n value. Every time this loop occurs we then perform an action.

*/
    $days = []; // We create an array, then assign values to specific index's
    $days[0] = 'Sunday';
    $days[1] = 'Monday';
    $days[2] = 'Tuesday';
    $days[3] = 'Wednesday';
    $days[4] = 'Thursday';
    $days[5] = 'Friday';
    $days[6] = 'Saturday';

?>

<!doctype html>

<html lang=en>

<head>
    <title>Variables can be updated</title>
</head>

<body>
    <head>
        <h1>Variables can be updated</h1>
    </head>
    <main>
        <?php // This for loop counts through the array, then prints out the value of each index (day name) and adds a HTML line break.
            for ( $n = 0; $n <= 6; $n++ ) {
                echo $days[$n], "<br>";
            }
        ?>
    </main>
    <footer>
        <p>Copyright &copy; Daniel Foreman 2022, all rights reserved</p>
    </footer>
</body>

</html>