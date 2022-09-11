<?php
/*
    We used a for loop to to print an array, but we had to manually specify how many values there were.
    As humans we can make mistakes, so it's better to ask PHP how many index's there are. We do this with
    one of two methods, count() and sizeof().

*/
    $days[] = 'Sunday'; // This will be assigned as index 0 automatically, because every index begins at 0.
    $days[] = 'Monday'; // This will be assigned as index 1 automatically.
    $days[] = 'Tuesday'; // This will be assigned as index 2 automatically.
    $days[] = 'Wednesday'; // This will be assigned as index 3 automatically.
    $days[] = 'Thursday'; // This will be assigned as index 4 automatically.
    $days[] = 'Friday'; // This will be assigned as index 5 automatically.
    $days[] = 'Saturday'; // This will be assigned as index 6 automatically.
    $days[] = 'Octeday'; //The missing 8th day of the week is assigned to index 7.

    // It is important to remember that both count() and sizeof() will count from 1, so we need to reduce both
    // results by 1 before we can use it, so count()-1 and sizeof()-1 will give the correct index value.
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
        <?php // This for loop counts through the array, then prints out the value of each index (day name) and adds a HTML line break.
            echo "<p>";
            echo "Then index size of the \$days array is ", count($days), " using count()", "<br>";
            echo "The actual index size of the \$days array is ", count($days)-1, " using count()-1", "<br>";
            echo "Then index size of the \$days array is ", sizeof($days), " using sizeof()", "<br>";
            echo "Then index size of the \$days array is ", sizeof($days)-1, " using sizeof()-1", "<br>";
            echo "</p>";
            // In the loop we replace the value 6 with sizeof() we can also use count().
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