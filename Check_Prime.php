<?php
function IsPrime($n)
{
    for($x=2; $x<$n; $x++)
    {
        if($n %$x ==0)
        {
            return 0;
        }
    }
    return 1;
}
$b=7;
$a = IsPrime($b);
if ($a==0)
    echo $b.' is not a Prime Number.....'.'<br>';
else
    echo $b.' '.' is a Prime Number..'.'<br>';
?>
