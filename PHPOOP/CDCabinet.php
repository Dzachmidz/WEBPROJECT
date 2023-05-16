<?php
    require_once('Product.php');
    class CDCabinet extends Product{
        private $capacity, $model;

        function __construct($name, $capacity, $model, $price, $discount) {
            parent::__construct($name, $price, $discount);
            $this->capacity = $capacity;
            $this->model = $model;
        }

        public function setPrice($price = 0){
            parent::setPrice($price + (0.15 * $price));
        }

        public function getCapacity(){
            return $this->capacity;
        }

        public function setCapacity($capacity){
            $this->capacity=$capacity;
        }

        public function getModel(){
            return $this->model;
        }

        public function setModel($model){
            $this->model=$model;
        }
    }
?>