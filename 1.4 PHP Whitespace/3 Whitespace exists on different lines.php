<!--
    White space is not just between characters, but between lines as well. HTML by default will ignore new lines,
    so they must be specified as <br> elements in addition to single, double and quadruple spacing characters.
-->
<?php print "There is 
 white    space     
    here" ?>
<?php "<hr>" //We can add a horizontal ruler as well. ?>
<?= "There is &nbsp;<br>white&ensp;&ensp;space<br>&emsp;&emsp;here" //By placing BR's we can recreate the accurate spacing ?>

<!-- When we preview this, you should have one line with spacing, and new lines, and one without. -->
<!-- Take a look at the source code, in the browser (right click, view source) and you will see that PHP passed the code accurately. -->
