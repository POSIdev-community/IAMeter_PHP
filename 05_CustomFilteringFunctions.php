<?php
$parm1 = $_GET['parm1'];

// False positive
// Analyzers that do not take into account the semantics of custom filtering functions will report a vulnerability
// (CustomFilter.Filter implements the `s.Replace("<", string.Empty).Replace(">", string.Empty)` logic)
echo CustomFilter::filter($parm1);

class CustomFilter {
    public static function filter($arg) {
        return str_replace(array('<', '>', '='), '', $arg);
    }
}