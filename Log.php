<?php

class Log 
{
    public $fileName;
    public function logMessage($logLevel, $message)
    {
        $date = date("Y-m-d"); 
        $time = date("h:i:s");
        // setting the file's name to a variable
        $this->fileName = "log-{$date}.log";

        $handle = fopen($this->fileName, 'a');
        fwrite($handle, "{$date} {$logLevel} {$message}\n");
        // fclose closes the script from your computer
        fclose($handle);

    }
} 
?>



