<?php

    /*
        Variable system
        Variable built in PHP
    */
    echo $_SERVER["DOCUMENT_ROOT"];

    /*
        Variable User
        variable yang dibuat oleh user
    */
    echo '<br><br>';
    $name = 'Fahmi';
    $age = 21;
    $weight = 70.5;

    echo  'Nama saya adalah ' .  $name; 
  
    /*
        Variable knstan
        variable yang tidak bisa diubah nilainya
        1. menggunakan define() | define('fruit, 'Apel');
        2. menggunakan const    | const fruit = 'Apel';   
     */
    echo '<br><br>';
    define("SITE_NAME", "Elena");
    const BASE_URL = "elena.nurulfikri.ac.id";

    echo SITE_NAME;
    echo '<br>';
    echo BASE_URL;

?>