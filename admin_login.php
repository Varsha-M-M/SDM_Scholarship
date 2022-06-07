
<!doctype.html>
<html>
    <head>
        <meta chaeset="utf-8">
        <title>Admin Login Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
            <div class="wrapper">
                <ul class="nav-area">
                    <li><a href="input1.php">Home</a></li>
                    <li><a href="index1.php">Sign Up</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </header>
        
        <div class="title"><h1>Admin Log in form</h1></div>
        <div class="container">
                <div class="formbox">
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
        </div>
    </body>
</html>