<?php
if ( isset ( $_POST [ 'submit' ])){
    $num = $_POST [ 'num' ];
    print_r ( 'table of ' . $num . " is" . "<br>" );
    $i = 1 ;
    while ( $i <= 10 ){
        $r = $num * $i ;
        echo $r . "<br>" ;
        $i ++;
    }
}
?>