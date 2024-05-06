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
// db name ->  registerform & documents
// table name -> {new_registration} || {images}
// coloumn name -> {firstname, lastname, emailfield, passwor,} || {id , image}
// Run on Xampp.
