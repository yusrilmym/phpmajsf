<?php
include 'conn.php';

$itemnik = $_POST['ininik'];
$itemide = $_POST['iniide'];

$connect->query("INSERT INTO tbl_ide(nik,ide) VALUES ('".$itemnik."','".$itemide."')");

?>