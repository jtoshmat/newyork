<?php
// C- style Comment
#Shell style comment

//Single Line Comment
/*
 * Multiple Lines
 * Line 1
 * Line 2
 */


//echo vs print

//echo "Hello World";
//echo "<hr>";
//print 'Hello World';

?>

<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>


<?php
echo 'This is a test';
?>

<?php echo 'This is a test' ?>

<?php echo 'We omitted the last closing tag';?>
<hr>
<?php
echo 'This is a test <br>'; // This is a one-line c++ style comment
/* This is a multi line comment
   yet another line of comment */
echo 'This is yet another test <br>';
echo 'One Final Test <br>'; # This is a one-line shell-style comment
