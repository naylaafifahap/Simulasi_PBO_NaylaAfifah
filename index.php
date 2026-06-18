<?php
// File: index.php

// 1. Import semua file yang dibutuhkan
require_once 'koneksi.php';
require_once 'Pendaftaran.php';
require_once 'PendaftaranReguler.php';
require_once 'PendaftaranPrestasi.php';
require_once 'PendaftaranKedinasan.php';

// 2. Inisialisasi koneksi database
$database = new Database();
$db = $database->getConnection();

// 3. Ambil data mentah dari database menggunakan static method dari masing-masing kelas anak
$dataReguler   = PendaftaranReguler::getDaftarReguler($db);
$dataPrestasi  = PendaftaranPrestasi::getDaftarPrestasi($db);
$dataKedinasan = PendaftaranKedinasan::getDaftarKedinasan($db);

// 4. Wadah untuk menampung objek-objek konkrit setelah diinstansiasi
$listReguler   = [];
$listPrestasi  = [];
$listKedinasan = [];

// Instansiasi data Reguler menjadi objek
foreach ($dataReguler as $row) {
    $listReguler[] = new PendaftaranReguler(
        $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
        $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], $row['jalur_pendaftaran'],
        $row['pilihan_prodi'], $row['lokasi_kampus']
    );
}

// Instansiasi data Prestasi menjadi objek
foreach ($dataPrestasi as $row) {
    $listPrestasi[] = new PendaftaranPrestasi(
        $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
        $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], $row['jalur_pendaftaran'],
        $row['jenis_prestasi'], $row['tingkat_prestasi']
    );
}

// Instansiasi data Kedinasan menjadi objek
foreach ($dataKedinasan as $row) {
    $listKedinasan[] = new PendaftaranKedinasan(
        $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
        $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], $row['jalur_pendaftaran'],
        $row['sk_ikatan_dinas'], $row['instansi_sponsor']
    );
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Simulasi PBO - Pendaftaran Mahasiswa Baru</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f6f9; }
        h1 { text-align: center; color: #333; }
        h2 { color: #2c3e50; border-bottom: 2px solid #2c3e50; padding-bottom: 5px; margin-top: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #2c3e50; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .biaya { font-weight: bold; color: #27ae60; }
    </style>
</</head>
<body>

    <h1>Daftar Simulasi Pendaftaran Mahasiswa Baru (Konsep PBO)</h1>

    <h2>1. Jalur Reguler</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur (Polimorfik)</th>
                <th>Biaya Dasar</th>
                <th>Total Biaya Akhir (Overriding)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listReguler as $mhs): ?>
                <tr>
                    <td><?= $mhs->getIdPendaftaran(); ?></td>
                    <td><?= $mhs->getNamaCalon(); ?></td>
                    <td><?= $mhs->getAsalSekolah(); ?></td>
                    <td><?= $mhs->getNilaiUjian(); ?></td>
                    <td><?= $mhs->tampilkanInfoJalur(); ?></td>
                    <td>Rp <?= number_format($mhs->getBiayaDasar(), 2, ',', '.'); ?></td>
                    <td class="biaya">Rp <?= number_format($mhs->hitungTotalBiaya(), 2, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>2. Jalur Prestasi</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur (Polimorfik)</th>
                <th>Biaya Dasar</th>
                <th>Total Biaya Akhir (Overriding)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listPrestasi as $mhs): ?>
                <tr>
                    <td><?= $mhs->getIdPendaftaran(); ?></td>
                    <td><?= $mhs->getNamaCalon(); ?></td>
                    <td><?= $mhs->getAsalSekolah(); ?></td>
                    <td><?= $mhs->getNilaiUjian(); ?></td>
                    <td><?= $mhs->tampilkanInfoJalur(); ?></td>
                    <td>Rp <?= number_format($mhs->getBiayaDasar(), 2, ',', '.'); ?></td>
                    <td class="biaya">Rp <?= number_format($mhs->hitungTotalBiaya(), 2, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>3. Jalur Kedinasan</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur (Polimorfik)</th>
                <th>Biaya Dasar</th>
                <th>Total Biaya Akhir (Overriding)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listKedinasan as $mhs): ?>
                <tr>
                    <td><?= $mhs->getIdPendaftaran(); ?></td>
                    <td><?= $mhs->getNamaCalon(); ?></td>
                    <td><?= $mhs->getAsalSekolah(); ?></td>
                    <td><?= $mhs->getNilaiUjian(); ?></td>
                    <td><?= $mhs->tampilkanInfoJalur(); ?></td>
                    <td>Rp <?= number_format($mhs->getBiayaDasar(), 2, ',', '.'); ?></td>
                    <td class="biaya">Rp <?= number_format($mhs->hitungTotalBiaya(), 2, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>