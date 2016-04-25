<?php

function logMessage($logLevel, $message)
{
    $date = date("Y-m-d"); 
    $time = date("h:i:s");
    $filename = "log-{$date}.log";

    $handle = fopen($filename, 'a');
    fwrite($handle, "{$date} {$logLevel} {$message}\n");

}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");





