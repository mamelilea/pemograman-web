<?php
$mysqli = new mysqli("localhost", "root", "", "oop_mvc");
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
