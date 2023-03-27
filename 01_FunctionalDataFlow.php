<?php

// False negative
// Analyzers that do not interprete the execution flow based on functional data flows will not report a vulnerability
$parm1 = $_GET['parm1'];
$pvo = function($arg) {
    echo $arg;
};
$pvo($parm1);

function f($arg) {
    echo $arg;
}
$pvo = 'f';
$pvo($parm1);
