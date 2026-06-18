<?php
// File: PendaftaranKedinasan.php
require_once 'Pendaftaran.php';

class PendaftaranKedinasan extends Pendaftaran {
    // Properti tambahan spesifik Kedinasan
    private $skIkatanDinas;
    private $instansiSponsor;

    // Constructor Kelas Anak
    public function __construct($id, $nama, $sekolah, $nilai, $biaya_dasar, $jalur, $sk, $sponsor) {
        parent::__construct($id, $nama, $sekolah, $nilai, $biaya_dasar, $jalur);
        $this->skIkatanDinas = $sk;
        $this->instansiSponsor = $sponsor;
    }

    // Metode Query Spesifik untuk mengambil semua data jalur Kedinasan
    public static function getDaftarKedinasan($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Kedinasan'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Implementasi wajib dari metode abstrak kelas induk
    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar * 1.25;
    }

    public function tampilkanInfoJalur() {
        return "Jalur Kedinasan - Sponsor: " . $this->instansiSponsor . " (No SK: " . $this->skIkatanDinas . ")";
    }
}
?>