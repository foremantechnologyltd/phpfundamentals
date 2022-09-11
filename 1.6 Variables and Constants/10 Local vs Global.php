<?php
    /* 
        There are two ranges of influence over a program, that variable can have. Global and local.

        Global variables have presence throughout the entire program. Once you declare them you can access
        the information they hold in any object, class, function and the main body of the program. These globals
        have been what we've created so far. By creating $variable names in the main code of the PHP script
        we created variables that are accessible for as long as the program is running. Only being lost once
        the program stops running.

        A local variable is one created within a function. When the function stops working, the data in that variable
        is lost, unless you pass it into a global variable using the return command from within the function.


    */
?>

<!doctype html>

<html lang=en>

<head>
    <title>Variables can be updated</title>
    <style>
        mark { background: red; color: white; padding: 5px; line-height: 2em; }    
    </style>
</head>

<body>
    <head>
        <h1>Variables can be updated</h1>
    </head>
    <main>
        <p>
            <?php
                $globalValue = "This \$globalValue works just fine, because the entire program can access it."; //Let's create the global.
                echo $globalValue, "<br>"; // We display the global with a line break.
                //We create a function that creates a local value and then displays it from within the function.
                function setMyValue() {
                    $localValue = "Yep \$localValue local works just fine from inside the function!";
                    echo $localValue, "<br>";
                    return $localValue; // We have the option of returning a local variable back into the main program using return.
                }
                setMyValue();
                // This echo is designed to present an error, because the $localValue can not be called from outside the function.
                echo "<mark>","Calling \$localvalue otherside the function will not work! See the error below this line", $localValue, "</mark><br>";
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