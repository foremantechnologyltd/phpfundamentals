<?php
    session_start();
    echo "Your name is ", $_SESSION['s_name'], " your age is ", $_SESSION['s_age'], " and your message is: <br>", $_SESSION['s_message'], "<br>" 
?>

<a href="7 _SESSION Super Global Receiver 2.php">This page just set data that will exist across multiple pages, click here to view that data.</a>