<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>

<body>

    <?php
    require('connct.php');
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        
        $check_query = "SELECT * FROM new_registration WHERE emailfield = '$email'";
        $check_result = mysqli_query($connReg, $check_query);

        if(mysqli_num_rows($check_result) > 0) {
            
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

            $update_query = "UPDATE new_registration
                             SET passwor = '$hashed_password', cpassword = '$pass'
                             WHERE emailfield = '$email';";

            $update_result = mysqli_query($connReg, $update_query);

            if ($update_result) {
                echo "
                    <script>
                        alert('Password updated successfully');
                        window.location.href = 'login.php';
                    </script>";
                exit();
            } else {
                echo "Error updating password: " . mysqli_error($connReg);
            }
        } else {
            
            echo "<script>alert('Email not found. Please enter a valid email.');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
            exit();
        }
    }

    mysqli_close($connReg);
    ?>

</body>

</html>
