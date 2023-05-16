<?php
    class Product{
        protected $name, $price, $discount;

        function __construct($name, $price, $discount){
            $this->name=$name;
            $this->price=$price;
            $this->discount=$discount;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setPrice($price){
            $this->price=$price;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name=$name;
        }

        public function getDiscount(){
            return $this->discount;
        }

        public function setDiscount($discount){
            $this->discount=$discount;
        }
    }
?>