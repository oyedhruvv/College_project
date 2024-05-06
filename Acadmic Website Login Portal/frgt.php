<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(./pp_1.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            width: 100%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .title-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .title {
            color: #333;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .para {
            color: #666;
            font-size: 16px;
            line-height: 1.5;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .label-title {
            font-size: 14px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        input[type="email"],
        input[type="password"] {
            width: calc(100% - 40px);
            height: 45px;
            font-size: 16px;
            padding: 10px 40px 10px 10px; /* Added space for icon */
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s;
            /* position:  ; Required for absolute positioning of icon */
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #106fde;
        }

        .icon {
            position: absolute;
            color: #777;
            left: 360px; /* Adjust icon position */
            top: 62%;
            transform: translateY(-50%);
        }

        .submit-btn {
            width: 100%;
            background-color: #106fde;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            padding: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #0a5cbf;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="title-section">
                <h2 class="title">Reset Your Password</h2>
                <p class="para">Enter your registered email to receive a password reset link.</p>
            </div>
            <form method="POST" action="fg.php">
                <div class="input-group">
                    <label for="email" class="label-title">Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    <span class="icon">&#9993;</span>
                </div>
                <div class="input-group">
                    <label for="password" class="label-title">New Password :</label>
                    <input type="password" id="password" name="password" placeholder="Enter your New Password" required>
                </div>
                <div class="input-group">
                    <button type="submit" class="submit-btn">Reset Password</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
