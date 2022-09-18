<?php
/*
    The _GET Super global contains a keyed array of parameters passed through the URL of the webpage, meaning
    you can append data to a hyperlink or generate data from JavaScript and pass it into the URL of a PHP page.
    The _Get Super Global allows you get access this data using a keyed array.

    $_GET['data'] the data variable must be created in the URL, we do this by entering the address of the PHP
    page, then separating it from the rest of the content using a question mark symbol.

    <li><a href="3 _GET Super Global.php?name=Daniel&age=42&message=How%20are%20you?">Get variables from script</a></li>

    

    The 

*/
    echo "Your name is ", $_GET['name'], " you are ", $_GET['age'], " years old. Your message is ", $_GET['message']
?>