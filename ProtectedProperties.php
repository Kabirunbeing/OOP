<?php

class ProtectedProperties {
    protected $name = "Protected properties";

    // Getter method for $name
    public function getName() {
        return $this->name;
    }

    // Setter method for $name
    public function setName($name) {
        $this->name = $name;
    }
}

?>
