<?php

class Extend {
    public $avoid;
    public $duplication;
    public $kabeer;

    public function __construct($avoid, $duplication, $kabeer) {
        $this->avoid = $avoid;
        $this->duplication = $duplication;
        $this->kabeer = $kabeer;
    }
    public function getAvoid() {
        return $this->avoid;
    }

    public function getDuplication() {
        return $this->duplication;
    }
    public function getKabeer(){
        return $this->kabeer;
    }
}

?>
