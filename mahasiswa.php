<?php

class Mahasiswa {
    public  $nim;
    public $nama;
    public $jurusan;
    
    public function tampilData() {
        echo "NIM: " . $this->nim . "<br>";
        echo "Nama: " . $this->nama . "<br>" ;
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
    
    public function setNim($nim) {
        $this->nim = $nim;
    }
    
    public function setNama($nama) {
        $this->nama = $nama;
    }
}

$mahasiswa = new Mahasiswa();


$mahasiswa->setNim("140609");
$mahasiswa->setNama("shifraa");
$mahasiswa->jurusan = "PPLG"; 

$mahasiswa->tampilData();

?>