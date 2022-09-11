<?php
/*
    We do not have to specify the index in an array for it to work, by leaving the index blank it will automatically
    proceed to the last index place, for example sunday would insert at 0, and saturday inserts at 6. But we let PHP
    work out the specific index values.

    The old method added code we don't need to add, by getting rid of the first line, and the numbers in the index's
    we can create the same array with less code.

    $days = []; // We create an array.
    $days[0] = 'Sunday';
    $days[1] = 'Monday';
    $days[2] = 'Tuesday';
    $days[3] = 'Wednesday';
    $days[4] = 'Thursday';
    $days[5] = 'Friday';
    $days[6] = 'Saturday';

*/
    $days[] = 'Sunday'; // This will be assigned as index 0 automatically, because every index begins at 0.
    $days[] = 'Monday'; // This will be assigned as index 1 automatically.
    $days[] = 'Tuesday'; // This will be assigned as index 2 automatically.
    $days[] = 'Wednesday'; // This will be assigned as index 3 automatically.
    $days[] = 'Thursday'; // This will be assigned as index 4 automatically.
    $days[] = 'Friday'; // This will be assigned as index 5 automatically.
    $days[] = 'Saturday'; // This will be assigned as index 6 automatically.
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