<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="registration.css" rel="stylesheet" type="text/css"/>
    <title>Verification</title>
</head>
<body>
<header>
        <p class="headding">Enter OTP for Verification</p>
        <nav>
            <ul class="nav-links">
                <li><a href="input1.php">Home</a></li>
            </ul>
        </nav>
    </header>
    <div class="formbody">
    <form action='smtp/verify_otp.php' method='POST'>
        <label>Please enter OTP:</label>
        <input type="text" name="otp">
        <input type="submit" value="SUBMIT">
    </form>
</body>
</html> 
