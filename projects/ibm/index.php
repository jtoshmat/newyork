<?php
function foo()
{
    function bar()
    {
        echo "I don't exist until foo() is called.\n";
        return "WOHOOOOO";
    }
    echo "<hr>";
    echo "csdcsdcsdcs";
}

/* We can't call bar() yet
   since it doesn't exist. */

foo();
echo "<hr>";

/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */

echo bar();

?>