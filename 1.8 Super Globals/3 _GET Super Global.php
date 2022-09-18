<?php
/*
    The _GET Super global contains a keyed array of parameters passed through the URL of the webpage, meaning
    you can append data to a hyperlink or generate data from JavaScript and pass it into the URL of a PHP page.
    The _Get Super Global allows you get access this data using a keyed array.

    $_GET['data'] the data variable must be created in the URL, we do this by entering the address of the PHP
    page, then separating it from the rest of the content using a question mark symbol.

    3 _GET Super Global.php?

    Once you have the ? in the URL you create a key, and a data point using a name and equals. You can add
    spaces between text using %20 and you can add additional keys using & as a separator

    "3 _GET Super Global.php?name=Daniel&age=42&message=I%20am%20Iron%20Man!"
    
    I threw this URL into the index.html file, you can see it there.

    I created 3 keys, name, age and message. The associated data was Daniel 42 and "I am Iron Man!".

*/
    echo "Your name is ", $_GET['name'], " you are ", $_GET['age'], " years old. Your message is ", $_GET['message']
?>