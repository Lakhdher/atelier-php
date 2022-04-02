<?php
if (isset($_COOKIE['vote']))
{
    echo "Vous avez deja voté " . $_COOKIE['vote'] . "!";
}
else
{
    $choix=$_POST['customRadio'];
    setcookie('vote',$choix,time()+120);
    echo("Merci :p");
}
?>