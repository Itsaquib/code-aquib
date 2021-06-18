<?php 
    class car_info{
        public $engine;
        public $transmission;
        public $door_no;
        public $age;

        function __construct($engine, $transmission, $door_no, $age){
            $this->engine = $engine;
            $this->transmission = $transmission;
            $this->door_no = $door_no;
            $this->age = $age;
        }
        function car($brand) {
            echo "the engine of this ".$brand. " is " .$this->engine."<br>";
            echo "the tranmission of this ".$brand. " is " .$this->transmission."<br>";
            echo "the door of this ".$brand. " is " .$this->door_no."<br>";
            echo "the age of this ".$brand." is " .$this->age."<br>";

        }
    }
?> 