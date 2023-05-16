<?php

    require_once 'class_kendaraan.php';

    $motor = new Motor("Motor","Bensin",2); 
    $submarine = new Submarine("Kapal Selam","Biogas",2000);


    echo "Info Motor: <br>";
    $motor->getInfo();
    echo "<br>";

   
    echo "Info Submarine: <br>";
    $submarine->getInfo();
    echo "<br>";
?>