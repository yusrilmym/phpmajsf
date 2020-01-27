<?php
include 'conn.php';

$itemnama = $_POST['ininama'];
$itemnik = $_POST['ininik'];
$dept = $_POST['inidept'];
$jabatan = $_POST['inijabatan'];

$connect->query("INSERT INTO tbl_pegawai(nama,nik,dept,jabatan) VALUES ('".$itemnama."','".$itemnik."','".$dept."','".$jabatan."')");

?>