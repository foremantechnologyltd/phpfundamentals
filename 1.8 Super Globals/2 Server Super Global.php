<!-- 
    The $_SERVER Super Global is used to get information about the server your PHP is running on, it can
    collect a wide range of data.

    $_SERVER is presented as an array with keys, the keys will link to different values containing the information you need.

    'SERVER_SOFTWARE' will give you your Web Server software, SSL and PHP version.
    'SERVER_ADDR' will get the servers IP address.
    'SERVER_PROTOCOL' will get the type of protocol your server is using.
    'REQUEST_METHOD' will return what method was used to access the page 'GET', 'HEAD', 'POST', 'PUT'.

    There are over 40 queries you can make about your server, a full list can be found at:
    https://www.php.net/manual/en/reserved.variables.server.php

    These values are useful, for example. If you are writing an eCommerce system, and need to ensure the platform
    is using the HTTPS protocol then 'HTTPS'

-->

<!doctype html>

<html lang=en>

<head>
    <title>Server Information</title>
</head>

<body>
    <head>
        <h1>Server Information</h1>
    </head>
    <main>
        <p><?= "Server software: ".$_SERVER[ 'SERVER_PROTOCOL' ] //We echo out the server software key. ?></p> 
    </main>
    <footer>
        <p>Copyright &copy; Daniel Foreman 2022, all rights reserved</p>
    </footer>
</body>

</html>