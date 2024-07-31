<?php
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        echo "Logging message to a file: $message\n";
    }
}

class DatabaseLogger implements Logger {
    public function log($message) {
        echo "Logging message to a database: $message\n";
    }
}

class Kabeer implements Logger { 
    public function log($message){
        echo "Kabeer is logged in: $message\n";
    }
}

$fileLogger = new FileLogger();
$fileLogger->log("This is a file log message.");

$databaseLogger = new DatabaseLogger();
$databaseLogger->log("This is a database log message.");

$kabeerLogger = new Kabeer();
$kabeerLogger->log("Kabeer is logged in");
?>
