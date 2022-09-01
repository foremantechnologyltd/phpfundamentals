<?php
/*
     We demonstrate that a single echo can output a complete multiline HTML document by replacing
     semi-colons with comma's. This technique passes mutliple strings into echo, reducing the need
     for an echo on every line.
*/
     echo "<!doctype html>",
     "<html lang=en>",
     "<head>",
     "<title>HTML5 Boilerplate</title>",
     "</head>",
     "<body>",
     "<head>",
     "<h1>HTML5 Boilerplate</h1>",
     "</head>",
     "<main>",
     "<p>Welcome to this simple HTML5 boilerplate</p>",
     "</main>",
     "<footer>",
     "<p>Copyright &copy, [persons name] 2022, all rights reserved</p>",
     " </footer>",
     "</body>",
     "</html>"
?>