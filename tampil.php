<?php
class mahasiswa{
    public $nim = "001";
    public $nama = "pram";
    public $jurusan = "PPLG";

    function tampil_biodata(){
        echo $this->nim ;
        echo $this->nama;
    }
}
$mahasiswa = new mahasiswa();

$mahasiswa->tampil_biodata()



?>