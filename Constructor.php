<?php
class Practice {
    public $db;
    public $Async;

    public function __construct($db = null, $Async = null) {
        $this->db = $db;
        $this->Async = $Async;
    }

    public function initialize($Async, $db) {
        $this->Async = $Async; 
        return $this->Async; 
        return $this->$db;
    }
}

$modifier = new Practice();

echo $modifier->initialize('access','Kabeer');
?>
