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

    //The \" allows for a single quote within single quotes.
    echo 'He looked around, "This isn\'t possible" he said.';

    //We can make error messages and quotes stand out with a tab \t
    echo "\n\tError, no error found!\n";
