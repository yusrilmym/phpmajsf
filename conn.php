<?php

$connect = new mysqli("localhost","root","","pasrah");

if($connect){
} else {
    echo "connection Failed";
    exit();
}