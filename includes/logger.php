<?php

function logSecurityEvent($event, $identifier = "unknown")
{
    $time = date("Y-m-d H:i:s");

    $safeIdentifier = substr(
        preg_replace('/[^a-zA-Z0-9@._-]/', '', $identifier),
        0,
        100
    );

    $message =
        "$time | event=$event | user=$safeIdentifier"
        . PHP_EOL;

    file_put_contents(
        "../logs/security.log",
        $message,
        FILE_APPEND | LOCK_EX
    );
}
