
<!doctype.html>
<html>
    <head>
        <meta chaeset="utf-8">
        <title>SignUp Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
            <div class="wrapper">
                <ul class="nav-area">
                    <li><a href="input1.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </header>
        
        <div class="title"><h1>Sign Up form</h1></div>
        <div class="container">
            
                <div class="formbox">
                    <form action="signin.php" method ="post">
                        <p>Username</p>
                        <input type="text" name="txtname" placeholder="Online">
                        <p>Password</p>
                        <input type="Password" name="txtpassword" placeholder="******">
                        <input type="submit" name="btnsubmit" value="Sign In">
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>