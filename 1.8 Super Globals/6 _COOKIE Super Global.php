<?php
    /*
        Cookies are small files that exist on the users PC, they expire after a certain period.
        To create a cookie we use the setcookie function.

        setcookie( cookie name, value stored, expiry time, file path, domain, secure )

        Cookie name, is the name of the cookie you are creating.
        Value stored, is the data you want the cookie to contain.
        Expiry time, is when you wish the cookie to be removed from the users machine.
        File path, defines where the cookie can be accessed on the server / will make it available site wide.
        Domain specifies where the cookie is available, www.example.com for example.
        Secure means the cookie can only be sent if the user is using a HTTPS connection.

    */
    setcookie( 'name', 'Daniel', time()+(60*60*24) );
    setcookie( 'age', '42', time()+(60*60*24) );
    setcookie( 'message', 'I am Cookie Man!', time()+(60*60*24) );
?>

<a href="6 _COOKIE reader.php">The cookie data is set, click here to read it on the next page</a>