<?php

$param = $_GET['parm1'];

// True positive
echo $param;

// False positive
// Analyzers that do not take into account that the parameter is converted to a number will report a vulnerability
$fparam = $_GET['parm1'] + 0;
echo $fparam;
