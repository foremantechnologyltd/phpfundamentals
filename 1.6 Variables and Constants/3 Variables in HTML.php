<?php
    // We can create variables in PHP, and insert the data into our HTML document
    $Title = "Variables in HTML"; //The title should be the same as the H1 element for SEO purposes. This allows us to do it once.
    $Author = "Daniel Foreman";// The author and copyright share the same name.
    $Year = date("y"); //We use date("y") to get the current year.
?>

<!doctype html>

<html lang=en>

<head>
    <title><?= $Title //We insert title here ?></title>
    <meta name="author" content="<?= $Author //We insert author here ?>">
</head>

<body>
    <head>
        <h1><?= $Title //We repeat the title in the first heading element ?></h1>
    </head>
    <main>
        <p><?php echo "Welcome to this simple HTML5 boilerplate" ?></p>
    </main>
    <footer>
        <p>Copyright &copy; <?= $Author //We repeat the author name here?> 20<?= $Year //And automatically update our copyright notice.?>, all rights reserved</p>
    </footer>
</body>

</html>