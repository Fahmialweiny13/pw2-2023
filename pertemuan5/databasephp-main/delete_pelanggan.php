<?php
require_once 'dbkoneksi.php';
?>
<?php
    $iddel = $_GET['iddel'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "DELETE FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$iddel]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>