<?php
    class mahasiswa1{
        public $nim ="140609";
        public $nama ="shifra";
        public $jurusan = "pplg";
        function tampil_Data(){
            echo $this-> nim,"<br>";
            echo $this-> nama,"<br>";
            echo $this-> jurusan;
        }
    }
    $mahasiswa1= new mahasiswa1();
      $mahasiswa1->nim = "140906";
      $mahasiswa1->nama = "shifra";
      $mahasiswa1->jurusan = "pplg";
      
$mahasiswa1->tampil_Data();

$mahasiswa1 = new mahasiswa1("140906","shifrazh","pplg");




