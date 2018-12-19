<?php
    $server = [
        'HOST SERVER NAME' => $_SERVER['SERVER_NAME'],
        'SERVER ADDRESS' => $_SERVER['SERVER_ADDR'],
        'REQUEST METHOD' => $_SERVER['REQUEST_METHOD'],
        'DOCUMENT ROOT' => $_SERVER['DOCUMENT_ROOT'],
        'CURRENT PAGE' => $_SERVER['PHP_SELF'],
        'SCRIPT NAME' => $_SERVER['SCRIPT_NAME'],
        'ABSOLUTE PATH' => $_SERVER['SCRIPT_FILENAME'],
    ];
    // print_r($server);
    // print_r($_SERVER);

    $client = [
        'CLIENT SYS INFO' => $_SERVER['HTTP_USER_AGENT'],
        'IP ADDRESS' => $_SERVER['REMOTE_ADDR'],
        'REMOTE PORT' => $_SERVER['REMOTE_PORT'],
    ];
    print_r($client);
?>