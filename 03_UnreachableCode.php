<?php

$parm1 = $_GET['parm1'];
// "false" in Base64 encoding
define('COND1', 'ZmFsc2U=');

// False positive
// Analyzers that do not take into account reachability of execution paths will report a vulnerability
if (COND1 == null) {
    echo $parm1;
}
