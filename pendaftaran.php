<?php
// File: Pendaftaran.php

abstract class Pendaftaran {
    // Properti Terenkapsulasi (Protected)
    protected $id_pendaftaran;
    protected $nama_calon;
    protected $asal_sekolah;
    protected $nilai_ujian;
    protected $biayaPendaftaranDasar;
    protected $jalur_pendaftaran;

    // Constructor untuk memetakan data dari database ke properti objek
    public function __construct($id, $nama, $sekolah, $nilai, $biaya_dasar, $jalur) {
        $this->id_pendaftaran = $id;
        $this->nama_calon = $nama;
        $this->asal_sekolah = $sekolah;
        $this->nilai_ujian = $nilai;
        $this->biayaPendaftaranDasar = $biaya_dasar;
        $this->jalur_pendaftaran = $jalur;
    }

    // ============================================================
    // TAHAP 3 (No. 4): Deklarasi Metode Abstrak (Tanpa Isi/Body)
    // ============================================================
    abstract public function hitungTotalBiaya();
    abstract public function tampilkanInfoJalur();

    // Getter untuk mengakses properti yang dilindungi (protected) dari luar kelas
    public function getIdPendaftaran() { return $this->id_pendaftaran; }
    public function getNamaCalon() { return $this->nama_calon; }
    public function getAsalSekolah() { return $this->asal_sekolah; }
    public function getNilaiUjian() { return $this->nilai_ujian; }
    public function getBiayaDasar() { return $this->biayaPendaftaranDasar; }
    public function getJalurPendaftaran() { return $this->jalur_pendaftaran; }
}
?>