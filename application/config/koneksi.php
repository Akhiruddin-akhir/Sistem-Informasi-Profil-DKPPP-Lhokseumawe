<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);
//mysqli_report(MYSQLI_REPORT_ERROR);

$hostname = "localhost";
$username = "root";
$password = "";
$database = "school_website";

$koneksi = mysqli_connect($hostname, $username, $password, $database);
if ($koneksi->connect_error) {
die("gagal koneksi ke database");
}
?>