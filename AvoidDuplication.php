<?php
require_once 'Extend.php';

class AvoidDuplication extends Extend {
    public function getDetails() {
        return "Avoiding: " . $this->getAvoid() . ", Duplication: " . $this->getDuplication(). "undefined" . $this->getKabeer();;
    }

}

?>
