<?php
/*
    We can reduce the amount of code we need to type with the array() method, which will allow us to one-line
    our whole array creation.

    In the previous method we used the following code:

    $days[] = 'Sunday'; // This will be assigned as index 0 automatically, because every index begins at 0.
    $days[] = 'Monday'; // This will be assigned as index 1 automatically.
    $days[] = 'Tuesday'; // This will be assigned as index 2 automatically.
    $days[] = 'Wednesday'; // This will be assigned as index 3 automatically.
    $days[] = 'Thursday'; // This will be assigned as index 4 automatically.
    $days[] = 'Friday'; // This will be assigned as index 5 automatically.
    $days[] = 'Saturday'; // This will be assigned as index 6 automatically.
    $days[] = 'Octeday'; //The missing 8th day of the week is assigned to index 7.

    But in the new one, we can put it all on the same line, and it will behave in the same way as before.

*/

    $days = array( 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Octeday' );

?>

<!doctype html>

<html lang=en>

<head>
    <title>Getting the value of index</title>
</head>

<body>
    <head>
        <h1>Getting the value of index</h1>
    </head>
    <main>
        <?php 
            for ( $n = 0; $n <= sizeof($days)-1; $n++ ) {
                echo $days[$n], "<br>";
            }
        ?>
    </main>
    <footer>
        <p>Copyright &copy; Daniel Foreman 2022, all rights reserved</p>
    </footer>
</body>

</html>