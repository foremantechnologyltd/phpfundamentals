<!-- 
    Please look inside the PHP code, to find the multiline comment, please 
    note this operates in the same way JavaScript and CSS multiline comments do.  
-->
<?php
    /*
        This is a multiline comment, it gets ignored by PHP in the same way that
        JavaScript, HTML, and CSS comments get ignored. Remember that these comments
        never make it to the web browser so you will only ever be able to see them
        inside your PHP file, located on the server. Never in the browser by viewing
        the source code. Despite this you should never store secure information like
        passwords inside a PHP file, as there may be other ways users can reach the
        code inside your PHP file.

        In addition other members of your team, who might not need that information
        but could misuse it, will able to see any information inside the PHP they 
        have access too.
    */
    echo 'Hello World';
    echo '<br>';
    echo "I'm learning PHP!"

?>