<?php
$parm1 = $_GET['parm1'];

/*
 * Foreach cycle
 */

$sum = 0;
foreach ([1, 2, 3] as $i) {
    foreach ([4, 5, 6] as $j) {
        $sum += $i + $j;
    }
}

// True positive
if (60 + 3 == $sum) {
    echo $parm1;
}

if ($sum != 63) {
    // False positive
    // Analyzers that approximate or ignore the cycle interpretation will report a vulnerability
    echo $parm1;
}

/*
 * For cycle
 */

$sum = 0;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 4; $j <= 6; $j++) {
        $sum += $i + $j;
    }
}

// True positive
if (60 + 3 == $sum) {
    echo $parm1;
}

if ($sum != 63) {
    // False positive
    // Analyzers that approximate or ignore the cycle interpretation will report a vulnerability
    echo $parm1;
}

/*
 * While cycle
 */

$sum = 0; $i = 1;
while ($i <= 3) {
    $j = 4;
    while ($j <= 6) {
        $sum += $i + $j;
        $j++;
    }
    $i++;
}

// True positive
if (60 + 3 == $sum) {
    echo $parm1;
}

if ($sum != 63) {
    // False positive
    // Analyzers that approximate or ignore the cycle interpretation will report a vulnerability
    echo $parm1;
}

/*
 * Do-while cycle
 */

$sum = 0; $i = 1;
do  {
    $j = 4;
        do  {
            $sum += $i + $j;
            $j++;
        } while ($j <= 6);
    $i++;
} while ($i <= 3);


// True positive
if (60 + 3 == $sum) {
    echo $parm1;
}

if ($sum != 63) {
    // False positive
    // Analyzers that approximate or ignore the cycle interpretation will report a vulnerability
    echo $parm1;
}