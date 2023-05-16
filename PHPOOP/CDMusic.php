<?php
    require_once('Product.php');
    class CDMusic extends Product{
        private $artist, $genre;

        function __construct($name, $artist, $genre, $price, $discount) {
            parent::__construct($name, $price, $discount);
            $this->artist = $artist;
            $this->genre = $genre;
        }

        public function setPrice($price) {
            $this->price = $price + ($price * 0.1);
        }

        public function setDiscount($discount) {
            $this->discount = $discount + 0.05;
        }

        public function getArtist(){
            return $this->artist;
        }

        public function setArtist($artist){
            $this->artist=$artist;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function setGenre($genre){
            $this->genre=$genre;
        }
    }
?>