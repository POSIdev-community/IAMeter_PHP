<?php
$parm1 = $_GET['parm1'];

// 8.1 Example for string-specific operations
define('COND1', 'false');

$string = <<<EOD
%s
EOD;

$string = sprintf($string, COND1);

if ($string == "true") {
    // False positive
    // Analyzers that do not interprete the semantics of standard library types will report a vulnerability
    echo $parm1;
}

// 8.2 Regex example
// False positive
// Analyzers that do not take into account that all string characters will be replaced with a safe value will report a vulnerability
$string2 = preg_replace('/[\s\S]/', 'a', $parm1);
echo $string2;

// False negative
// Analyzers that do not take into account that the vector string remains the same will not report a vulnerability
$string3 = preg_replace('/й/', 'a', $parm1);
echo $string3;
