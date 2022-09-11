<?php
    // Variables can be updated, we set count to the value of 0.
    $count = 0;
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
            <?php
                // Then we echo a paragraph, the count value and a line break tag for HTML.
                echo "<p>", $count, "<br>";
                $count = 1; // We set count to 1
                echo $count, "<br>"; // We echo the new count, and throw in a new line.
                $count = 2; // We update the count again.
                echo $count, "</p>"; // We print out the final value, and end the paragraph.
            ?>
        
    </main>
    <footer>
        <p>Copyright &copy; Daniel Foreman 2022, all rights reserved</p>
    </footer>
</body>

</html>