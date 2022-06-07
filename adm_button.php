<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="headline"><h1>ADMIN SECTION
        <div class="btn">
        <div class="wrapper">
<header><ul class="nav-area">
                    <li id="li1"><a href="input1.php">Home</a></li>
                    <!-- <li id="li1"><a href="index1.php">Sign Up</a></li> -->
                    <li id="li1"><a href="about.php">About</a></li>
                    <li id="li1"><a href="contact.php">Contact</a></li>
                </ul>
            </header></div>
            
                
            </div>
        </div>   </h1>  
    </div> <br><br><br><br><br><br>
    <ul>
        
        <a href="adminCreate.php"> <li><span>Add Scholarship</span></li></a>
        <a href="adm_update.php"> <li><span>Update Scholarship</span></li></a>
        <a href="admdelete.php"> <li><span>Delete Scholarship</span></li></a>
        <a href="viewbutton.php"> <li><span>View Scholarship</span></li></a>
        <a href="notify_admin.php"> <li><span>Notify</span></li></a>
        
        
        
      </ul>
</body>
</html>
<style>
    body {
    margin: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #333;
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("https://cache.careers360.mobi/media/presets/720X480/colleges/social-media/media-gallery/3332/2018/8/9/SDM-College-of-Engineering-and-Technology-Dharwad-7.jpg");
    background-size: cover;
}
.headline{

position:fixed;
max-width: 100%;
width: 100%;
top:0px;
height: 100px;
background:black ;
margin: 0px;
border: 0px;
padding: 0px;
color:white;
font-family:Verdana,sans-serif;
z-index: 1;
}

.btn{
    float: right;
    margin-right: 10px;
    color: #fff;
 }

ul {
    padding: 0;
    list-style-type: none;
}

li {
    font-size: 25px;
    width: 10em;
    height: 2em;
    color: rgb(255, 255, 255);
    border-left: 0.08em solid;
    position: relative;
    margin-top: 0.8em;
    cursor: pointer;
}
#li1 {
    font-size: 25px;
    width: 4em;
    height: 2em;
    color: rgb(255, 255, 255);
    /* border-left: 0.08em solid; */
    position: relative;
    margin-top: 0.8em;
    cursor: pointer;
}

li::before,
li::after
 {
    content: '';
    position: absolute;
    width: inherit;
    border-left: inherit;
    z-index: -1;
}

li::before {
    height: 80%;
    top: 10%;
    left: calc(-0.15em - 0.08em * 2);
    filter: brightness(0.8);
}

li::after {
    height: 60%;
    top: 20%;
    left: calc(-0.15em * 2 - 0.08em * 3);
    filter: brightness(0.6);
}

li span {
    position: relative;
    height: 120%;
    top: -10%;
    box-sizing: border-box;
    border: 0.08em solid;
    background-color: hsl(0, 0%, 20%,0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
    text-transform: capitalize;
    transform: translateX(calc(-0.15em * 3 - 0.08em * 2));
    transition: 0.3s;
}

li:hover span {
    transform: translateX(0.15em);
}
.title
{
    text-align: center;
    padding: 100px 0px 80px;
}
.title h1
{
    margin: 0;
    padding: 0;
    color: #fff;
    text-transform: uppercase;
    font-size: 36px;
}
.container
{
    width: 50%;
    height: 450px;
    background: #fff;
    margin:0 auto;
    border: 2px solid #fff;
    box-shadow: 0 15px 40px rgba(0,0,0,.5);
}
.container .left
{
    float: left;
    width: 50%;
    height: 450px;
    background: url(https://thumbs.dreamstime.com/b/education-tuition-costs-5460024.jpg);
    background-size: cover;
    box-sizing: border-box;
}
.container .right
{
    float: right;
    width: 50%;
    height: 450px;
    box-sizing: border-box;
}
.formBox
{
    width: 100%;
    padding: 80px 40px;
    box-sizing: border-box;
    height:400px;
    background: #fff; 
}
.formBox p
{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #a6af13;
}
.formBox input
{
    width: 100%;
    margin-bottom: 20px;
}
.formBox input[type="text"],
.formBox input[type="Password"]
{
    border: none;
    border-bottom: 2px solid #a6af13;
    outline:none;
    height:40px;
}
.formBox input[type="text"],
.formBox input[type="Password"]
{
    border-bottom: 2px solid #262626
}
.formBox input[type="submit"]
{
    border: none;
    outline:none;
    height:40px;
    color: #fff;
    background:#262626;
    cursor: pointer;
}
.formBox input[type="submit"]:hover
{
    background: #a6af13;
}
.formBox a{
    color:#262626;
    font-size: 12px;
    font-weight: bold;
}
.nav-area
{
    float: right;
    list-style: none;
    margin-top: 30px;
}
.nav-area li {
    display: inline-block;
}
.nav-area li a{
    color: #fff;
    text-decoration:none;
    padding: 5px 20px;
    font-family: poppins;
    font-size: 16px;
}

.nav-area li a:hover{
    background: #fff;
    color: #333;
}
.logo img{
    width: 100px;
    float: left;
    height:auto;
}
</style>