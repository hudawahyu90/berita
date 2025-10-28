<?php
require_once 'config.php';

// Database Source Name
const DSN = "mysql:host=" . HOST . ";dbname=" . DBNAME;

// Opsi PDO
const OPTIONS = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
  // Database Handler -> Inisialisasi koneksi database
  define("DBH", new PDO(DSN, USER, PASS, OPTIONS));
} catch (PDOException $err) {
  echo "Koneksi Gagal: " . $err->getMessage();
}
