<?php
    /*
        A multidimensional array, is an array with multiple index's. These can also be called 2D, 3D, 4D arrays etc.

        This example creates the most common multidimensional array.
        
        We will start by creating a standard single index array, this will contain our start and end tags.
        The second array will consist of arrays within arrays. We create a general array, in the usual way
        then we create arrays inside that. This effectively creates a row and column system that can be 
        useful for constructing table data, or recording the position of elements like a game of battleship,
        or a game of chess.

    */
    $td = array( "<td>", "</td>"); // This is a normal array, it has a single index with two values inserted.

    //This is a multidimensional array, it has two keys.
    $data = array (
        array( "Peter", 36, "Enjoys custard" ),
        array( "Daniel", 42, "Enjoys crisps" ),
        array( "Joseph", 29, "Enjoys pasta"),
        array( "Thomas", 34, "Enjoys pasta and tuna")
    );
?>

<!doctype html>

<html lang=en>

<head>
    <title>Fav food study</title>
    <style>
        table {
            border: 2px solid black;
        }
        th { 
            border-bottom: 1px solid darkgray;
        }
        td {
            border: 1px silver solid;
        }
    </style>
</head>

<body>
    <head>
        <h1>Fav food study</h1>
    </head>
    <main>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Fav food</th>
            </tr>
            <tr>
                <!-- You will notice that $td has a single index, and $data has two indexes, as we build
                     the data into a table we have rows and columns, the first index references the rows,
                     while the second index references the column allowing us to choose data by X and Y
                     coordinates. This can be used as a spacial system. But in this case we use it to
                     build a table. This is an example of a 2D array.
                -->
                <?= $td[0], $data[0][0], $td[1], $td[0], $data[0][1], $td[1], $td[0], $data[0][2], $td[1] ?>
            </tr>
            <tr>
                <?= $td[0], $data[1][0], $td[1], $td[0], $data[1][1], $td[1], $td[0], $data[1][2], $td[1] ?>
            </tr>
            <tr>
                <?= $td[0], $data[2][0], $td[1], $td[0], $data[2][1], $td[1], $td[0], $data[2][2], $td[1] ?>
            </tr>
            <tr>
                <?= $td[0], $data[3][0], $td[1], $td[0], $data[3][1], $td[1], $td[0], $data[3][2], $td[1] ?>
            </tr>
        </table>
    </main>
    <footer>
        <p>Copyright &copy; Daniel Foreman 2022, all rights reserved</p>
    </footer>
</body>

</html>