<?php

function factorial($fact)
{
    if($fact==0)
    {
        return 1;
    }
    return ($fact*factorial($fact-1));
}
print "factorial : ".factorial(5);
?>


