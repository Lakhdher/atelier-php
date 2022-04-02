<?php
function decompo(&$pair,&$impair,$tab)
{
    foreach ($tab as $key => $value) {
        if ($value%2) {
            array_push($pair,$value);
            }
        else {
            array_push($impair,$value);
        }
    }
}
$arrayName = array('1' => 1, '2' => 2 );
$pair=array();
$impair=array();
decompo($pair,$impair,$arrayName);
print_r($pair);
print_r($impair);
?>