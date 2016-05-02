<?php

require_once 'Log.php';
//the object needs to be created before its used.
// the below is the instance of the class
$log = new Log();

//NO SPACES!
$log->logMessage("INFO", "This is an info message.");
$log->logMessage("ERROR", "This is an info message.");

?>