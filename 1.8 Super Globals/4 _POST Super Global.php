<?php

?>

<!doctype html>

<html lang=en>

<head>
    <title>Getting the value of index</title>
</head>

<body>
    <head>
        <h1>Getting the value of index</h1>
    </head>
    <main>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for=name>What is your name?</label><br>
            <input id=name placeholder='enter your name' name='userName'><br>
            <label for=age>What is your age?</label><br>
            <input id=age placeholder='enter your age' name='userAge'><br>
            <label for=message>What is your message?</label><br>
            <input id=message placeholder='enter your message' name='userMessage'><br>
            <input type="submit">
        </form>
        <div>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
                    echo "Your name is ", $_POST['userName'], " your age is ", $_POST['userAge'], " and your message is: ", $_POST['userMessage'];
                }
            ?>
        </div>
    </main>
    <footer>
        <p>Copyright &copy; Daniel Foreman 2022, all rights reserved</p>
    </footer>
</body>

</html>