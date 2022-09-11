<?php
/*
    We used the For Loop to count through numerical index's but that's not going to work when we use keys, so instead we use
    the foreach() method.

    

*/
    $days = array( 'sun' => 'Sunday', 'mon'=> 'Monday', 'tue' => 'Tuesday', 'wed' => 'Wednesday', 'thur' => 'Thursday', 'fri' => 'Friday', 'sat' => 'Saturday' );
    
?>

<!doctype html>

<html lang=en>

<head>
    <title>Getting the value of index</title>
    <style>
        table { border: 4px solid black }
        th { border-bottom: 2px solid black }
        td { border: 1px solid lightgrey }
    </style>
</head>

<body>
    <head>
        <h1>Getting the value of index</h1>
    </head>
    <main>
        <?php 
            echo "<table><tr><th>Key</th><th>Data</th></tr>";
            foreach ( $days as $key => $value ) {
                echo "<tr><td>", $key, "</td>", "<td>", $value, "</td></tr>" ;
            }
            echo "</table>";
        ?>
    </main>
    <footer>
        <p>Copyright &copy; Daniel Foreman 2022, all rights reserved</p>
    </footer>
</body>

</html>