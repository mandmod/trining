<?php
include 'funcmaxmin.php';
$n = array(4,45,6,40,23,54,1,13,66);
$pnt=funcmaxmin($n);
echo 'max value is '.$pnt[0].' index at '.$pnt[1].'<br>';
echo 'min value is '.$pnt[2].' index at '.$pnt[3];
?>