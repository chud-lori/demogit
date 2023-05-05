<?php

$servername = "localhost";
$database = "formdb";
$username = "ismik";
$password = "123456";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// // mengecek koneksi
// if (!$conn) {
//     die("Failed connection: " . mysqli_connect_error());
// }
// echo "Success connection";
// mysqli_close($conn);
