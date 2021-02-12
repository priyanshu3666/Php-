<?php
$num = $_POST [ 'num' ];
print_r ( 'Enter num is :
' . $num . "<br>" );
print_r ( 'Sum of 1 to' . $num . " is :
" );
$sum = 0 ;
$i = 1 ;
while ( $i <= $num ){
    $sum += $i ;
    $i ++;
}
echo $sum ;
?>