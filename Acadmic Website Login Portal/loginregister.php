<?php
require('connct.php');

#login code 

if (isset($_POST['login'])) {
    $Id = $_POST['emailfield'];
    $password = $_POST['password'];

    $query = "SELECT emailfield FROM new_registration WHERE emailfield = '$Id'";
    $check = "SELECT passwor from new_registration where emailfield = '$Id'";
    $checks = "SELECT cpassword from new_registration WHERE emailfield = '$Id'";

    $result = mysqli_query($connReg, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $hpassresult = mysqli_query($connReg, $check);
            $hpassray = array();
            $hpassrow = mysqli_fetch_assoc($hpassresult);
            $hpassray = $hpassrow;
            $hashed_password = implode(" ", $hpassray);
            $pasresult = mysqli_query($connReg, $checks);
            $pasary = array();
            $pasrow = mysqli_fetch_assoc($pasresult);
            $pasary = $pasrow;
            $pass = implode(" ", $pasary);

            // Diagnostic output: Check if password_verify() returns true or false
            if (password_verify($password, $hashed_password)) {
                // Password matched, login successful
                echo "
                <script>
                    alert('Successfull Login');
                    window.location.href = 'upload.php';
                </script>";
                exit(); // Terminate script after successful login
            } else {
                echo "
                <script>
                    alert('Incorrect Password');
                    window.location.href = 'login.php';
                </script>";
                echo "$pass";
                echo "$hashed_password";
                exit(); // Terminate script after displaying alert
            }
        } else if (mysqli_num_rows($result) != 1) {
            // Email not found
            echo "
            <script>
                alert('Sorry, this email does not exist, Please register');
                window.location.href = 'login.php';
            </script>";
            exit(); // Terminate script after displaying alert
        }
    } else {
        // Error executing query
        echo "
        <script>
            alert('Error executing query');
            window.location.href = 'login.php';
        </script>";
        exit(); // Terminate script after displaying alert
    }
}

//register code

if (isset($_POST['register'])) {
    $emailfield = $_POST['emailfield'];
    $user_exist_query = "SELECT * FROM new_registration WHERE emailfield = '$emailfield'";
    $result = mysqli_query($connReg, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $result_fetch = mysqli_fetch_assoc($result);
            echo "
            <script>
                alert('{$result_fetch['emailfield']} - E-mail already taken');
                window.location.href = 'login.php';
            </script>";
        } else {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $emailfield = $_POST['emailfield'];
            $password = $_POST['password'];

            $password_hashed = password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO new_registration (firstname, lastname, emailfield, passwor, cpassword) 
                      VALUES ('$firstname', '$lastname', '$emailfield', '$password_hashed', '$password')";
            $data = mysqli_query($connReg, $query);
            if ($data) {
                echo "
                <script>
                    alert('Registration Successful, Now you can login to your account');
                    window.location.href = 'login.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Failed to register');
                    window.location.href = 'login.php';
                </script>";
            }
        }
    } else {
        echo "
        <script>
            alert('Error executing query');
            window.location.href = 'login.php';
        </script>";
    }
} else {
    echo "
    <script>
        alert('Invalidio request');
        window.location.href = 'login.php';
    </script>";
}
