<?php
class Persegipanjang {
    public $panjang;
    public $lebar;

    // Konstruktor yang benar
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function HitungLuas() {
        return $this->panjang * $this->lebar; // Perbaikan akses properti
    }

    public function HitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

// Pembuatan objek di luar kelas
$persegi1 = new Persegipanjang(5, 6);
echo "Luas Persegi Panjang: " . $persegi1->HitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $persegi1->HitungKeliling() . "<br>";
?>
