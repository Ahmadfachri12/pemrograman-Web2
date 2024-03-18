<?php 
class Mahasiswa {
    // Property
    public $ipk;
    public $nim;
    public $nama;
    public $prodi;
    public $angkatan;

    // Method
    function __construct($nim, $nama){
        $this->nim= $nim;
        $this->nama = $nama;
    }

    function predikat_ipk(){
        if($this->ipk < 2.0) {
            return 'Cukup';
        } elseif($this->ipk >= 2.0 && $this->ipk < 3.0){
            return 'Baik';
        } elseif($this->ipk >= 3.0 && $this->ipk < 3.75){
            return 'Memuaskan';
        } elseif($this->ipk >= 3.75 && $this->ipk < 4.0){
            return 'Cum Laude';
        }
    }
}

// insert Object
$mahasiswa1 = new Mahasiswa(110223121, 'Ahmad Fachri');
$mahasiswa1->ipk = 3.7;
$mahasiswa1->prodi = "Teknik Informatika";
$mahasiswa1->angkatan = 2023;
