<?php
include 'conn.php';

$id = $_POST['iniid'];
$itemnama = $_POST['ininama'];
$itemnik = $_POST['ininik'];
$dept = $_POST['inidept'];
$jabatan = $_POST['inijabatan'];

$connect->query("UPDATE tbl_pegawai SET nama='".$itemnama."', nik='".$itemnik."', dept='".$dept."', jabatan='".$jabatan."' WHERE id_employee=".$id);

?>