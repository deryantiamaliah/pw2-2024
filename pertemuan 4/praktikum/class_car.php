<?php
    /// property
    class Car {
        public $brand;
        public $color;

        /// method
        function getBrand(){
            return $this->brand;

        }
    }

    
    /// object
    $rubicon = new Car();
    $tesla = new Car();

    $rubicon->brand = "Rubicon";
    $tesla->brand = "Tesla";
    
    /// echo
    echo $rubicon->getBrand();
    echo'<br>';
    echo $tesla->getBrand();

