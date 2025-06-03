<?php
class Lingkaran {
    public $jari;
    public const PHI = 3.14;

    public function __construct($jari) {
        $this->jari = $jari;
    }

    public function getLuas() {
        return self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling() {
        return 2 * self::PHI * $this->jari;
    }

    public function cetak() {
        echo "Lingkaran dengan jari-jari: $this->jari <br>";
        echo "Luas = " . $this->getLuas() . "<br>";
        echo "Keliling = " . $this->getKeliling();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hitung Lingkaran</title>
</head>
<body>
    <h2>Hitung Luas dan Keliling Lingkaran</h2>
    <form method="POST">
        <label>Masukkan Jari-jari:</label>
        <input type="number" name="jari" step="0.01" required>
        <button type="submit">Hitung</button>
    </form>

    <hr>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['jari'])) {
        $jari = floatval($_POST['jari']);
        $lingkaran = new Lingkaran($jari);
        $lingkaran->cetak();
    }
    ?>
</body>
</html>
