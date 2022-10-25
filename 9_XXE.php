<?php

    // False positive
    // Analyzers that do not interprete the semantics of standard library types will report a vulnerability
    libxml_disable_entity_loader(true);
    $xml = simplexml_load_string($_GET['parm1']);   // Safe parser configuration


    libxml_disable_entity_loader(false);
    $xml = simplexml_load_string($_GET['parm1']);   // Vulnerable parser configuration

echo $_GET['parm1'];
