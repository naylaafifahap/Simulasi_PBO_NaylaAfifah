<?php
// File: PendaftaranReguler.php
require_once 'Pendaftaran.php';

class PendaftaranReguler extends Pendaftaran {
    // Properti tambahan spesifik Reguler
    private $pilihanProdi;
    private $lokasiKampus;

    // Constructor Kelas Anak
    public function __construct($id, $nama, $sekolah, $nilai, $biaya_dasar, $jalur, $prodi, $kampus) {
        // Memanggil constructor milik kelas induk (Pendaftaran)
        parent::__construct($id, $nama, $sekolah, $nilai, $biaya_dasar, $jalur);
        $this->pilihanProdi = $prodi;
        $this->lokasiKampus = $kampus;
    }

    // Metode Query Spesifik untuk mengambil semua data jalur Reguler
    public static function getDaftarReguler($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Reguler'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Implementasi wajib dari metode abstrak kelas induk (Tahap 5 nanti akan kita lengkapi isinya)
    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar; 
    }

    public function tampilkanInfoJalur() {
        return "Jalur Reguler - Prodi: " . $this->pilihanProdi . " (" . $this->lokasiKampus . ")";
    }
}
?>
