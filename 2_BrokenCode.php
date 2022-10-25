<?php
// Fatal error: Class 'UnknownType' not found
// For analyzers that require compilable code, delete or comment out this fragment
/*/
#region

$argument = "harmless value";

$unknownType = new UnknownType();
$unknownType->$property1 = $parm1;
$unknownType->$property2 = $unknownType->$property1;
$unknownType->$property3 = COND1;

if ($unknownType->$property3 == null) {
    $argument = $unknownType->$property2;
}

// False positive
// Analyzers that ignore code that cannot be compiled will report a vulnerability
echo $argument;

#endregion
//*/