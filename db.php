<?php 

    $koneksi = new PDO ("mysql:host=localhost;dbname=db_belajar", "root", "");
    if($koneksi){
        echo 'berhasil';
    }
    
    $koneksi->query("SELECT `nis`, `nama` FROM `tb_siswa` WHERE 1");

?>