<?php

$parm1 = $_GET['parm1'];

// False positive
// Analyzers that do not take into account the semantics of standard filtering functions will report a vulnerability
echo urlencode($parm1);

// False positive
// Analyzers that do not take into account the semantics of standard filtering functions will report a vulnerability
echo htmlspecialchars($parm1);

// False positive
// Analyzers that do not take into account the semantics of standard filtering functions will report a vulnerability
echo htmlentities($parm1);
