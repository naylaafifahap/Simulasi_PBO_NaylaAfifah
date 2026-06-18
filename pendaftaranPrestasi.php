<?php
// File: PendaftaranPrestasi.php
require_once 'Pendaftaran.php';

class PendaftaranPrestasi extends Pendaftaran {
    // Properti tambahan spesifik Prestasi
    private $jenisPrestasi;
    private $tingkatPrestasi;

    // Constructor Kelas Anak
    public function __construct($id, $nama, $sekolah, $nilai, $biaya_dasar, $jalur, $jenis, $tingkat) {
        parent::__construct($id, $nama, $sekolah, $nilai, $biaya_dasar, $jalur);
        $this->jenisPrestasi = $jenis;
        $this->tingkatPrestasi = $tingkat;
    }

    // Metode Query Spesifik untuk mengambil semua data jalur Prestasi
    public static function getDaftarPrestasi($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Implementasi wajib dari metode abstrak kelas induk
    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar - 50000;
    }

    public function tampilkanInfoJalur() {
        return "Jalur Prestasi - Jenis: " . $this->jenisPrestasi . " Tingkat: " . $this->tingkatPrestasi;
    }
}
?>