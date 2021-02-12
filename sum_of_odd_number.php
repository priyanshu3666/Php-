<?php
$num = $_POST [ 'num' ];
print_r ( 'Enter no : ' . $num . "<br>" );
$i = 1 ;
$sum = 0 ;
while ( $i <= $num ){
    if ( $i % 2 != 0 ){
        $sum += $i ;
    }
    $i ++;
}
print_r ( 'Sum of odd no b/w 1 to
' . $num . " is " . $sum );
?>