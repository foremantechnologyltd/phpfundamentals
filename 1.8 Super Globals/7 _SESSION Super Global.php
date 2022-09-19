<?php 
    session_start();
    $_SESSION['s_name']="Daniel";
    $_SESSION['s_age']=42;
    $_SESSION['s_message']="This is a super global that works across the domain!";
?>

<a href="7 _SESSION Super Global Receiver 1.php">This page just set data that will exist across multiple pages, click here to view that data.</a>