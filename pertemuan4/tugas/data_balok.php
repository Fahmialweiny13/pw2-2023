<?php 
		require_once 'class_balok.php';


    $blk1 = new Balok(29, 16, 7);
    $blk2 = new Balok(34, 19, 5);
    $blk3 = new Balok(25, 20, 8);
    $blk4 = new Balok(21, 6, 3);



    echo "<br>Luas Balok 1 = " . $blk1->getLuas();
    echo "<br>Luas Balok 2 = " . $blk2->getLuas();
    echo "<br>Luas Balok 3 = " . $blk3->getLuas();
    echo "<br>Luas Balok 4 = " . $blk4->getLuas();
    echo "<br>";
    echo "<br>Kel Balok 1 = " . $blk1->getKel();
    echo "<br>Kel Balok 2 = " . $blk2->getKel();
    echo "<br>Kel Balok 3 = " . $blk3->getKel();
    echo "<br>Kel Balok 4 = " . $blk4->getKel();
    echo "<br>";
    echo "<br>Vol Balok 1 = " . $blk1->getVol();
    echo "<br>Vol Balok 2 = " . $blk2->getVol();
    echo "<br>Vol Balok 3 = " . $blk3->getVol();
    echo "<br>Vol Balok 4 = " . $blk4->getVol();


?>