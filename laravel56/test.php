<?php
$a = 12323;

function abc(){
//      global $a;
     echo $GLOBALS['a'];
}

abc();

