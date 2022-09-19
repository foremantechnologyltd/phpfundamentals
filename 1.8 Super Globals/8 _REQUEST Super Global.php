<?php 

    setcookie( "age", "42", time()+60*60 );

?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for=message>What is your message?</label><br>
    <input id=message placeholder='enter your message' name='message'><br>
    <input type="submit">
</form>

<?php
    echo "Your name is: ", $_REQUEST['name'], "<br>";
    echo "Your age is: ", $_REQUEST['age'], "<br>";
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
        echo "Your message is ", $_REQUEST['message'];
    }
?>