<?php 
    class Pixel
    {
        public $id;
        public $name;
        public function __construct($arg1, $arg2){
            $this->id = $arg1;
            $this->name = $arg2;
        }
        public function __destruct(){}
        public function nameOfPixel(){
           echo $this->id;
           echo $this->name;
        }
        public function make(){
            echo "<span id='".$this->id."'></span>";
        }
    }
?>