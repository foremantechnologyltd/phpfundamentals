<?php 



?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for=age>What is your age?</label><br>
    <input id=age placeholder='enter your age' name='userAge'><br>
    <input type="submit">
</form>

<?php
    echo "Your name is: ", $_ENV['name'], "<br>";
?>