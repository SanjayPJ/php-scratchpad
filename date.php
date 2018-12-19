<?php
    echo date('d') . "\n";
    echo date('m') . "\n";
    echo date('y') . "\n";
    echo date('l') . "\n";
    
    echo date('y/m/d') . "\n";

    echo date('h') . "\n";
    echo date('i') . "\n";
    echo date('s') . "\n";
    echo date('a') . "\n";

    date_default_timezone_set('America/New_York');
    echo date('h:i:sa') . "\n";
?>