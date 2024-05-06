<?php include("connct.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
    <link rel="stylesheet" href="reg.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
<div class="wrap">

    <form method="POST" action="loginregister.php">

     <h2>Registration here</h2>

     <div class="input-box">
        <input type="text" id="firstname" class="Register-form" name="firstname" required placeholder="First Name"/>
     </div>

     <div class="input-box">
        <input type="text" id="lastname" class="Register-form" name="lastname" required placeholder="Last Name"/>
     </div>

     <div class="input-box">
        <input type="email" id="emailfield" class="Register-form" name="emailfield" required placeholder="Email"/>
        <i class='bx bx-envelope'></i>
     </div>
     
     <div class="input-box">
        <input type="password"  id="password" class="Register-form" name="password" value="" required  placeholder="Password"/>
        <i class="bx bx-lock-alt"></i>
     </div>

     

     <button id="btn" value="Register" type= "submit" onclick="return check(this.form)" name="register">Registered</button>
          <div class="register-link">
            <!-- <div class="register-link"> -->
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
    </form>

</div>

</body>
</html>

