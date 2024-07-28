<?php

class Person {
    private $name;
    private $age;
    private $practicing;

    public function setName($name) {
        if (!empty($name)) {
            $this->name = $name;
        }
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        if ($age > 0) {
            $this->age = $age;
        }
    }

    public function getAge() {
        return $this->age;
    }
    
    public function setPracticing($practicing){
        $this->practicing = $practicing;
    }
    public function getPracticing(){
        return $this->practicing;
    }
}

?>
