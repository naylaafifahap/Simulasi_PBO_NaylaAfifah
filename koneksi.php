<?php
// File: koneksi/database.php

class Database {
    private $host = "localhost";
    private $username = "root"; // Sesuaikan dengan username MySQL kamu
    private $password = "";     // Sesuaikan dengan password MySQL kamu
    private $db_name = "DB_SIMULASI_PBO_TI1D_NaylaAfifah"; // Ganti dengan nama database-mu
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            // Menggunakan PDO untuk koneksi database
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                $this->username, 
                $this->password
            );
            // Mengatur error mode ke Exception agar mudah mendeteksi error
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Koneksi database gagal: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>