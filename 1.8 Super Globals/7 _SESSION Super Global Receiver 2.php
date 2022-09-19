<?php
    session_start();
    echo "Your name is ", $_SESSION['s_name'], " your age is ", $_SESSION['s_age'], " and your message is: <br>", $_SESSION['s_message'], "<br>" 
?>