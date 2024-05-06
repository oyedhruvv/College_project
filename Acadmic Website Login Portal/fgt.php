<?php
require('connct.php');

if (isset($_POST['submit-btn'])) {
    $emailfield = $_POST['emailfield'];
    $query = "SELECT * FROM new_registration WHERE emailfield = '$emailfield'";
    $result = mysqli_query($connReg, $query);

    if (!$result) {
        // Error handling for SQL query
        die("Error in SQL query: " . mysqli_error($connReg));
    }

    if (mysqli_num_rows($result) > 0) {
        header("Location: register.php");
        exit();
    } else {
        echo "<script>alert('Email ID not matched'); window.location.href = 'login.php';</script>";
        exit();
    }
} else if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "<script>alert('Invalid request'); window.location.href = 'login.php';</script>";
    exit();
}
