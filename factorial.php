<?php

function factorial( $n )
{
    if( $n < 1 )
        $n = 1;
    return array_product( range( 1, $n ));
}
$n=$_POST['num'];
$fact=factorial($n);
echo "Factorial of  ".$n." is  ".' '.$fact;
?>