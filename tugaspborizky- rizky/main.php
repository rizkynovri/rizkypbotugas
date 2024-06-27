<?php

// class Mobil {
//     private $roda = 4;

//     private function jalan() {
//         echo "mobil berjalan";
//     }

//     public function jumlahRoda() {
//         echo $this->roda;
//     }

//     public function aktifkanJalan() {
//         $this->jalan();
//     }
// }

// $myobjek = new Mobil();

// $myobjek->jumlahRoda();
// $myobjek->aktifkanJalan();

// class Hewan {
    
//     protected $nama;

//     public function __construct($nama) {
//         $this->nama = $nama;
//     }

//     public function getNama() {
//         return $this->nama;
//     }

//     public function suara() {
//         return "Suara hewan";
//     }
// }

// class Anjing extends Hewan {

//     public function suara() {
//         return "Guk Guk!";
//     }
// }

// $anjingSaya = new Anjing("Buddy");
// echo $anjingSaya->suara();
// echo $anjingSaya->getNama();

// class Mobil {
    
//     private $merk;
//     private $warna = "merah";
//     protected $umur;
    
//     public function __construct($merk, $warna) {
//         $this->merk = $merk;
//         $this->warna = $warna;
//     }

//     public function getMerk() {
//         return $this->merk;
//     }

//     public function setWarna($warna) {
//         $this->warna = $warna;
//     }

//     public function getWarna() {
//         return $this->warna;
//     }

// }

// $mobilSaya = new Mobil("Toyota", "Merah");

// // echo "Merk Mobil: " . $mobilSaya->getMerk();
// // echo "Warna Mobil: " . $mobilSaya->getWarna();

// $mobilSaya->setWarna("Biru");

// echo $mobilSaya->warna;

class Hewan {
    public function bersuara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        return "Guk guk!";
    }
}

class Kucing extends Hewan {
    // Method untuk mengeluarkan suara kucing
    public function bersuara() {
        return "Meong meong!";
    }
}

function suaraHewan(Hewan $hewan) {
    return $hewan->bersuara();
}

$anjing = new Anjing();
$kucing = new Kucing();