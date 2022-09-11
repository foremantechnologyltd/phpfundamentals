<?php
    /* 
        There are two ranges of influence over a program, that variable can have. Global and local.

        Global variables have presence throughout the entire program. Once you declare them you can access
        the information they hold in any object, class, function and the main body of the program. These globals
        have been what we've created so far. By creating $variable names in the main code of the PHP script
        we created variables that are accessible for as long as the program is running. Only being lost once
        the program stops running.

        A local variable is one created within a function. When the function stops working, the data in that variable
        is lost, unless you pass it into a global variable.

    */
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
        <p>
            <?php
                $globalValue = "Yep this global works!";
                echo $globalValue, "<br>";
                function setMyValue() {
                    $localValue = "Yep this local works inside the function!";
                    echo $localValue, "<br>";
                    return $localValue;
                }
                setMyValue();
                echo "Calling \$localvalue otherside the function will not work!", $localValue, "<br>";
                $localValueIsGlobal = setMyValue();
                echo "Passing \$localValue into \$localValueIsGlobal ", $localValueIsGlobal, " now works fine!<br>";
            ?>
        </p>
    </main>
    <footer>
        <p>Copyright &copy; Daniel Foreman 2022, all rights reserved</p>
    </footer>
</body>

</html>