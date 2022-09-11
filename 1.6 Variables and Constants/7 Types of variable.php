<!-- 
    There are five major types of data that can be stored in PHP, Null, Boolean, Integer, Float, and String
    
    A Null is a null value, which means "nothing". It is literally a variable with no data, other then a null to say it has nothing.
    Null is different from 0, because 0 is a number. Null is a way of saying nothing was ever stored in this variable it is empty.

    Boolean is a TRUE or FALSE state. It's data is just representative of a YES or NO response.

    An integer is a whole number, it has no calculation errors between the positive and negative ranges of 9223372036854775807
    to -9223372036854775807. You can not store fractions or decimal numbers.

    A float is a fractional number that can store up to 14 decimal points before becoming less accurate. Floating point calculations
    are always less accurate than integer calculations.

    A string is a string of characters symbols and numbers so can contain anything.

    The var_dump() method is used to identify what kind of data a variable is, which can be useful in troubleshooting as you do not
    define a variable by type, as you might in other stricter languages like C.

<?php
    $myString = "Hello World!"; // This is our example String value.
    $myInteger = 9223372036854775807; // this is our example Integer.
    $myOverInteger = 9223372036854775808; // This is our integer exceeding it's maximum value, it will lose accuracy.
    $myNegativeInteger = -9223372036854775807; // This is our smallest possible integer before losing accuracy.
    $myFloat = 99999999999999.0; // This is the largest possible float before losing accuracy.
    $mySmallestFloat = 0.1234567890123; // This is a fractional number with the most decimal points before losing accuracy.
    $myNull = null; // This is an empty value.
    $myBool = TRUE; // This is a boolean TRUE or FALSE, it only accepts these values.
    $B = "<br>"; // This is a string, that contains a HTML break element. 
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
                var_dump($myString); echo $B; // We use var_dump to identify the kind of information contained within, and echo $B for a new line break.
                var_dump($myInteger); echo $B;
                var_dump($myOverInteger); echo $B;
                var_dump($myNegativeInteger); echo $B;
                var_dump($myFloat); echo $B;
                var_dump($mySmallestFloat); echo $B;
                var_dump($myNull); echo $B;
                var_dump($myBool); echo $B;
                echo "</p>"; // We close the PHP tag.
            ?>
    </main>
    <footer>
        <p>Copyright &copy; Daniel Foreman 2022, all rights reserved</p>
    </footer>
</body>

</html>