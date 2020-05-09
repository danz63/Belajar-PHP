<?php

$a = FALSE;
$b = TRUE;
$c = TRUE;
echo '$a = ' . ($a ? "TRUE" : "FALSE") . "<br>";
echo '$b = ' . ($b ? "TRUE" : "FALSE") . "<br>";
echo '$a && $b || $c = ' . ($a && $b || $c) . "<br>";
echo '$a AND $b OR $c = ' . ($a and $b || $c) . "<br>";
