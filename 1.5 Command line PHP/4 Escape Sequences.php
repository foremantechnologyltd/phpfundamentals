    <?php

    /*
        Escape characters always begin with an \ backslash, they are designed to tell PHP that these characters have an alternative
        interpretation than usual. The \ is called an escaping character.

        What is the purpose of these? How do you write a new line? Where is the new line key on the keyboard? We know that HTML
        has <br> for a new line, or you can adjust the CSS to control the visual layout of something.

        \ - the escape character.
        \n - New Line.
        \t - Tab.
        \$ - Dollar Sign.
        \' - Single Quotes.
        \" - Double Quotes.
        \\ - Backslash.

    */

    // The \n creates a blank new line.
    echo "\n";

    //The \" allows for double quotes within double quotes.
    echo "He looked around, \"This isn't possible\" he said.\n";

    //The \" allows for single quotes within double quotes.
    echo 'He looked around, "This isn\'t possible" he said.';
    //We can make error messages and quotes stand out with a tab \t
    echo "\n\tError, no error found!\n";


    /* 
        The following line is not possible because it requires a mix of both double and single quotes
            echo "He looked around, "This isn't possible" he said.";
        To fix this we use an escape character, which avoids the standard interpretation of a symbol.
        The correct way to do it, follows.
     */



    /*
        Escape characters are particularly useful for command line scripts, because HTML formatting
        will not work with them.

        To get a new line, we use \n

        We use it at both ends of the line, showing we can add a new line to the beginning or end of a line.
    */

    

    /*
        An alternative to the new line, is the carriage return \r 
    */

    /*
        To help punctuate messages, or quote errors, we can use the TAB escape
    */




