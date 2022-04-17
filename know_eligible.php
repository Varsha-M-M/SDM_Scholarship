<style>
    .container{
  width: 85%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 50%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}
</style>

<html>
    <head>
        <meta chaeset="utf-8">
        <title>Login Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="wrapper">
                <ul class="nav-area">
                    <li><a href="input1.php">Home</a></li>
                </ul>
            </div>
        </header>
        <div class="title"><h1>KNOW ELIGIBLE SCHOLARSHIPS</h1></div>
        <div class="container">
                <div class="formbox">
                <div class="left-side">
                <div class="row">  
          <div class="input-group">
              <form action="result.php" method="post">

              <label for="phone">USN:</label> 
         <input type="text" name="usn" mob="no" id="number" required>
         
          </div>
         <input type="submit" value="Submit">


           

              </form>
          
        
      </div>
                </div>
            </div>
        </div>
    </body>
</html>

