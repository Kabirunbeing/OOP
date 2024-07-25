<?php
    Class Practice {
        public $course;
        public function __construct($course){
            $this->course = $course;
        }
        public function Learn(){
            echo "I am learning $this->course";
        }
    }
$access = new Practice('Object Oriented Programming');
echo $access->Learn();
// var_dump($access)
?>