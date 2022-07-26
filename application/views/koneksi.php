<?php
$conn    = mysqli_connect("localhost", "root", "", "db_santri");
$connEm   = mysqli_connect("localhost", "root", "", "db_eman");
$connSn   = mysqli_connect("localhost", "root", "", "db_sentral");
$connInf   = mysqli_connect("localhost", "root", "", "db_info");

// $conn = mysqli_connect("localhost", "u9048253_dwk", "PesantrenDWKIT2021", "u9048253_santri");
// $connEm = mysqli_connect("localhost", "u9048253_dwk", "PesantrenDWKIT2021", "u9048253_eman");
// $connSn = mysqli_connect("localhost", "u9048253_dwk", "PesantrenDWKIT2021", "u9048253_sentral");
// $connInf = mysqli_connect("localhost", "u9048253_dwk", "PesantrenDWKIT2021", "u9048253_info");

function rupiah($angka)
{
    $hasil_rupiah = "Rp. " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
