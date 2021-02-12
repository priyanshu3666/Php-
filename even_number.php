<?php
print_r ( 'Find even no b/w 1 to
100' . "<br>" );
$i = 1 ;
while ( $i <= 100 ){
    if ( $i % 2 == 0 ){
        echo $i . "<br>" ;
    }
    $i ++;
}
?>