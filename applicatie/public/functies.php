<?php
function minutenNaarUur($minuten){
    $output=($minuten / 60) .":".($minuten % 60) ;
    return $output;
}

$uur = minutenNaarUur($film['duur']);

?>