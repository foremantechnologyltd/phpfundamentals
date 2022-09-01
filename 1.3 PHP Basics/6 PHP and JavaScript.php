<!-- 
     We can insert behavioral JavaScript into a HTML document through PHP demonstrating that we are
     not limited to HTML elements, attributes and text. It will function as if we had written the 
     document as a simple HTML document.

     What we demonstrate here, is that PHP doesn't care what it puts into the web browser, HTML,
     scripts, nor does it care what language or framework is being used. It is all simply being
     pushed into the browser as instructions.

     If you view the code in the browser, you will never see a single line of PHP. This is all
     executed by the server, and the result is seen by the browser. Allowing us to hide how a 
     program works from the user, instead simply displaying the result of that program.
-->
<!doctype html>

<html lang=en>

<head>
    <title>HTML5 Boilerplate</title>
    <script><?= "alert('This Alert message was inserted with PHP!')" ?></script>
</head>

<body>
    <head>
        <h1>HTML5 Boilerplate</h1>
    </head>
    <main>
        <p>Welcome to this simple HTML5 boilerplate</p>
    </main>
    <footer>
        <p>Copyright &copy; [persons name] 2022, all rights reserved</p>
    </footer>
</body>

</html>