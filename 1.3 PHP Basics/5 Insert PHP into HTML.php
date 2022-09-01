<!-- 
     Rather than outputting the whole HTML document through PHP, we can use it to simply insert
     desired code into HTML element, allowing PHP to suppliment rather than replace HTML code
     generation. You will see that short notation, echo and print have been used to insert an
     entire element, the text inside a HTML element, and the attribute inside a HTML element.
     With this we demonstrate how PHP can be used to suppliment a document instead of replacing
     it.
-->
<!doctype html>

<html lang=en>

<head>
    <title>HTML5 Boilerplate</title>
</head>

<body>
    <head>
        <?= "<h1>HTML5 Boilerplate</h1>" ?>
    </head>
    <main>
        <p><?php echo "Welcome to this simple HTML5 boilerplate" ?></p>
    </main>
    <footer>
        <p <?php print "style='background: black; color: white'" ?>>Copyright &copy; [persons name] 2022, all rights reserved</p>
    </footer>
</body>

</html>