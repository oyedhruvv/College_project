<?php
require 'connct.php';
$id = $_GET['id'];

$sql = "DELETE FROM image WHERE id ='$id'";
$result = mysqli_query($connDoc, $sql);
if ($result) {
    header("location: upload.php");
}
