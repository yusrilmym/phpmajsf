<?php
include 'conn.php';

$itemusername = $_POST['iniusername'];
$itempassword = $_POST['inipassword'];

$queryResult=$connect->query("SELECT * FROM tbl_user WHERE username='".$itemusername."' and password='".$itempassword."' ");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
    $result[]=$fetchData;
}

echo json_encode($result);

?>