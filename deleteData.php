<?php
include 'conn.php';

$id = $_POST['iniid'];

$connect->query("DELETE FROM tbl_pegawai WHERE id_employee=".$id);
?>