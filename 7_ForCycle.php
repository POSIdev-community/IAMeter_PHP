<?php
$parm1 = $_GET['parm1'];

$sum = 0;
foreach ([1, 2, 3] as $i) {
    foreach ([4, 5, 6] as $j) {
        $sum += $i + $j;
    }
}

if ($sum != 63) {
    // False positive
    // Analyzers that approximate or ignore the cycle interpretation will report a vulnerability
    echo $parm1;
}