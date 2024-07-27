<?php

class Extend {
    public $avoid;
    public $duplication;

    public function __construct($avoid, $duplication) {
        $this->avoid = $avoid;
        $this->duplication = $duplication;
    }

    public function getAvoid() {
        return $this->avoid;
    }

    public function getDuplication() {
        return $this->duplication;
    }
}

?>
