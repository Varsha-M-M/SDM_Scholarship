
<!doctype.html>
<html>
    <head>
        <meta chaeset="utf-8">
        <title>Admin Login Form</title>
        <link rel="stylesheet" href="registration.css">
    </head>
    <body>
    <header>
        <p class="headding">Admin Login</p>
        <nav>
            <ul class="nav-links">
               <li><a href="input1.php">Home</a></li>
                <li><a href="about.php">About-us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
                <div class="formbox1">
                    <form action = "redirect_admin.php" method = "post">
                        <p>Username</p>
                        <input type="text" name="usn" placeholder="SSN">
                        <p>Password</p>
                        <input type="Password" name="password" placeholder="******">
                        <input type="submit" name="" value="Log In">
                        <a href ="#">Forget Password</a>
                    </form>
                </div>
        </div>
    </body>
</html>
