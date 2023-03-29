<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {

        public function __construct($satu, $dua) {
            $this->satu = $satu; 
            $this->dua = $dua; 
            
        }

        // Method lainnya
        public function getTambah() {
            $tambah = $this->satu + $this->dua;
            return $tambah;
        }

        public function getKurang() {
             $kurang = $this->satu - $this->dua;
             return $kurang;
        }

        public function getKali() {
            $kali = $this->satu * $this->dua;
            return $kali;

       }
       public function getBagi() {
            $bagi = $this->satu / $this->dua;
            return $bagi;
   }
    }

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(10, 5);
    echo "Hasil Pertambahan = " . $calculator->getTambah();
    echo "<br>";
    echo "Hasil Pengurangan = " . $calculator->getKurang();
    echo "<br>";
    echo "Hasil Perkalian = " . $calculator->getKali();
    echo "<br>";
    echo "Hasil 'Pembagian = " . $calculator->getBagi();
?>