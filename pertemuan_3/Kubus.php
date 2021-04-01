<?php
    class Kubus{
        private $sisi;

        public function setSisi($option) {
            $this->sisi = $option;
        }

        // public function setSisi($nsisi) {
        //     $this->sisi=$nsisi;
        // }

        public function getLuas(){
            $luas = 0;
            $luas=6*pow($this->sisi,2);
            return $luas;
        }

        public function getVolume(){
            $volume=pow($this->sisi,3);
            return $volume;
        }
    }
?>