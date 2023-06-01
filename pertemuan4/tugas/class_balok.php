<?php
    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
    
        public function __construct($p, $l, $t) {
		        $this->panjang = $p;
                $this->lebar = $l;
                $this->tinggi = $t; 
        }
    
        public function getLuas() {
			$luas = 2 * ($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi);
            return $luas;
        }
    
        public function getKel() {
             $kel = 4 * ($this->panjang + $this->lebar + $this->tinggi);
             return $kel;
        }
    
        public function getVol() {
            $vol = $this->panjang * $this->lebar * $this->tinggi;
            return $vol;
        }
    }
?>