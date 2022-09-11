<?php
/*
    We have experimented with index based arrays, but instead of using simple numerical index's we can use a key
    based index instead. This allows us to view index's by associative names, rather than unfriendly values.

    For example, $days[3] means we have to mentally count Sunday, Monday, Tuesday, Wednesday... We are associative
    by nature and will have an easier time reading $days['mon'] rather than $days[1].

    The disadvantage is that the array will not automatically generate an index value for us to count through,
    but it does create an array that is easy to read the meaning of in code.

    To create a key, simply replace the [] with ['value'] for example:

        $days['sun'] = 'Sunday';

*/
    $days['sun'] = 'Sunday';
    $days['mon'] = 'Monday';
    $days['tue'] = 'Tuesday';
    $days['wed'] = 'Wednesday';
    $days['thur'] = 'Thursday';
    $days['fri'] = 'Friday';
    $days['sat'] = 'Saturday';

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
            echo $days['sun'], "<br>";
            echo $days['mon'], "<br>";
            echo $days['tue'], "<br>";
            echo $days['wed'], "<br>";
            echo $days['thur'], "<br>";
            echo $days['fri'], "<br>";
            echo $days['sat'], "<br>";
        ?>
    </main>
    <footer>
        <p>Copyright &copy; Daniel Foreman 2022, all rights reserved</p>
    </footer>
</body>

</html>