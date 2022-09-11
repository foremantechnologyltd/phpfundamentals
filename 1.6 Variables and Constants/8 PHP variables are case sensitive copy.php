<?php
    // PHP Variables are case sensitive, we will create three new same name variables with different capitalizations.
    $name = "Daniel"; // All lowercase variable contains Daniel.
    $Name = "Jack"; // First letter uppercase contains Jack.
    $NAME = "Bill"; // Complete uppercase contains bill.
?>

<!doctype html>

<html lang=en>

<head>
    <title>Case sensitive</title>
</head>

<body>
    <head>
        <h1>Case sensitive</h1>
    </head>
    <main>
            <?php
                echo "<p>"; // We echo a paragraph start tag.
                print "First name: $name <br>"; // We add the first lower case name, to get a result.
                print "Second name: $Name <br>"; // We add the second first character capitalization version.
                print "Third name: $NAME <br>"; // We add the uppercase version.
                echo "</p>"; // We close the PHP tag.
                // You will notice that despite using the same word, using different cases makes each unique.
            ?>
    </main>
    <footer>
        <p>Copyright &copy; Daniel Foreman 2022, all rights reserved</p>
    </footer>
</body>

</html>