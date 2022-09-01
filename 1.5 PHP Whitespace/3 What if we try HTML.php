<?= "Welcome to the PHP command line processor, this example demonstrates that you can run PHP directly from a command line, terminal, or linux BASH." ?>
<?php
    /*
        We know that outputting HTML from PHP to a web browser means that those elements are rendered.
        But what if we run it from the command line? In this case, we will see all the raw text.
        This occurs because web browsers have a rendering engine but the command line does not. So
        instead we get the raw code.
    */
    echo "<!doctype html><html lang=en><head><title>HTML5 Boilerplate</title></head>",
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
     "</html>";

     /* 
        It is common practice for developers to run PHP like this, and check the output. It can also be used to 
        generate internal troubleshooting, test and calculation tools that can run from the command line. For
        example, if you wish to test the fetch and output of a database without being distracted by all the
        HTML you are generating, then test tools like this can help troubleshoot problems and ensure basic
        functions are working the way you imagine they should.
    /*