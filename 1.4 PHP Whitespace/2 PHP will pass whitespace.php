<!--
    White Space is not ignored by PHP, but HTML will ignore white spacing when rendering.

    To Demonstrate this, we have PHP output two separate lines, I'm sure you can guess which
    of the two PHP outputs will display their spacing correctly!
-->
<?= "There is  white    space        here" ?>
<?= "<br>" //The BR element adds a new line white space between lines. ?>
<?= "There is &nbsp;white&ensp;&ensp;space&emsp;&emsp;here" ?>

<!-- When we preview this, you should have one line with spacing, and one without. -->
<!-- Take a look at the source code, in the browser (right click, view source) and you will see that PHP passed the code accurately -->
