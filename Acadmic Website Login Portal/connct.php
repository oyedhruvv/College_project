<?php
$servername = "localhost";
$username   = "root";
$password   = "";


$connDoc = mysqli_connect($servername, $username, $password, 'documents');
$connReg = mysqli_connect($servername, $username, $password, "registerform");

if (mysqli_connect_error()) {
    echo "can't connect";
    exit();
}
