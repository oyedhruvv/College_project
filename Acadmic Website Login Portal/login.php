<?php require('connct.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>naacloginportal</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    
    
  </head>
    <body>
    <!-- <header>
        <h2>Login Portal</h2>
        <nav>
          <a href="#">HOME</a>
          <a href="#">BLOG</a>
          <a href="#">CONTACT</a>
          <a href="#">ABOUT</a>

      </nav>
    </header> -->
      <div class="wrapper">
        <form method="POST" action="loginregister.php">
        <!-- <form action="login.php" method="POST"> -->
          <h2>Login</h2>
          <div class="input-box">
            <input type="text"  id="emailfield" class="login-field" name="emailfield" required placeholder = "Email"/>
            <i class="bx bxs-user-circle"></i>
          </div>

          <div class="input-box">
            <input type="password"  id="password" class="login-field" name="password" value="" required  placeholder="Password"/>
            <i class="bx bx-lock-alt"></i>
          </div>
          
          <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="frgt.php" style="color: rgb(0, 17, 255);">Forgot password?</a>
          </div>


          <button id="btn" type="submit" class="btn" name ="login">Login</button>
          <!-- <button id="btn" type="submit" class="btn" name ="login"onclick="return check(this.form)">Login</button> -->
           

          <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register</a></p>
          </div>
        </form>
      </div>
      

    </body>
</html>
