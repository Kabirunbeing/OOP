<?php
require_once 'Extend.php';

class AvoidRedundancy extends Extend {
    public function getDetails() {
        return "Avoiding: " . $this->getAvoid() . ", Redundancy: " . $this->getDuplication()
        . $this->getKabeer();
    }
}
?>
