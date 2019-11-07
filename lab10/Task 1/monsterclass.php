<?php
    class Monster {
        // Properties
        public $colour;
        public $num_of_eyes;
      
        // Methods
        function __construct($num, $col) {
            $this->num_of_eyes = $num;
            $this->colour = $col;
        }

        function set_eyes($num_of_eyes) {
            $this->num_of_eyes = $num_of_eyes;
        }
        function get_eyes() {
            return $this->num_of_eyes;
        }

        function set_colour($colour) {
            $this->colour = $colour;
        }
        function get_colour() {
            return $this->colour;
        }

        function describe() {
            $ans = "The " . $this->colour . " monster has " . $this->num_of_eyes . " eyes.";
            return $ans;
        }
      }
?>