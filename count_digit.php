<?php
if ( isset ( $_POST [ 'submit' ])){
    $num = $_POST [ 'num' ];
    $val = strlen ( $num );
     ;
    echo  'Number of digit in' . $num . " is " . $val;
}
?>
