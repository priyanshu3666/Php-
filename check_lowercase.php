<?php
function is_str_lowercase($str1)
{
    for ($sc = 0; $sc < strlen($str1); $sc++) {
        if (ord($str1[$sc]) >= ord('A') &&
            ord($str1[$sc]) <= ord('Z')) {
            return false;
        }
    }
    return true;
}
$input='ram';
$a=is_str_lowercase($input);
if ($a==true)
    echo $input.' is in lowercase ....'.'<br>';
else
    echo $input.' is not in lowercase.....'.'<br>';
?>