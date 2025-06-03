<form method="POST">
    Panjang: <input type="number" name="panjang" required><br>
    Lebar: <input type="number" name="lebar" required><br>
    <input type="submit" value="Hitung">
</form>

<?php
class Persegipanjang {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function HitungLuas() {
        return $this->panjang * $this->lebar;
    }

    public function HitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];

    $persegi1 = new Persegipanjang($panjang, $lebar);
    echo "Luas Persegi Panjang: " . $persegi1->HitungLuas() . "<br>";
    echo "Keliling Persegi Panjang: " . $persegi1->HitungKeliling() . "<br>";
}
?>
