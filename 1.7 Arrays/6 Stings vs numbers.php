<?php
    // Variables can be inserted into strings. We will first create some.
    $name = "Daniel"; // String
    $age = 42; // Integer
    $exercise = "Jogging"; // String
    $weight = 95.6; // Float
    $loss = 0.6; // Float
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
                echo "<p>"; // We echo a paragraph start tag.
                print "Client name: $name <br>"; // Insert name into the print statement, along with a line break.
                print "Client age: $age <br>"; // Insert the age into the print statement, with a line break.
                print "Client hobby: $hobby <br>"; // Insert the clients hobby, with a line break.
                print "Hobby cost: \$$cost <br>"; // We want to represent dollars $ so we use an escape character before the variable.
                echo "</p>"; // We close the PHP tag.
            ?>
    </main>
    <footer>
        <p>Copyright &copy; Daniel Foreman 2022, all rights reserved</p>
    </footer>
</body>

</html>