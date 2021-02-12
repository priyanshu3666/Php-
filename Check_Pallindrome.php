<?php

function check_plaindrome($string)
{
    $string = str_replace(' ', '', $string);

    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

    $string = strtolower($string);


    $reverse = strrev($string);

    if ($string == $reverse) {
        echo "<p>" . $string . "  is a  Palindrome</p>";
    } else {
        echo "</p>" . $string . " is not a  Palindrome</p>";
    }
}

$string = "Priyanshu";
check_plaindrome($string);



?>