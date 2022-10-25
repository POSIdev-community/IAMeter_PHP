<?php

$parm1 = $_GET['parm1'];
// "false" in Base64 encoding
define('COND1', 'ZmFsc2U=');

if (base64_decode(COND1) == 'true') {
    // False positive
    // Analyzers that do not take into account the semantics of standard encoding functions will report a vulnerability
    echo $parm1;
}