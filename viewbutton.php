<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <a href="view_scholarship.php"> <li><span>ALL SCHOLARSHIPS</span></li></a>
    <a href="view_student.php"> <li><span>REGISTERED STUDENTS</span></li></a>
    <a href="view_particular.php"> <li><span>SCHOLARSHIP DETAILS</span></li></a>
    <a href="view_particular_scholar.php"> <li><span> PARTICULAR SCHOLARSHIPS</span></li></a>
    <a href="know_eligible.php"> <li><span>STUDENT ELIGIBLE SCHOLARSHIPS</span></li></a>
        
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

ul {
    padding: 0;
    list-style-type: none;
}

li {
    font-size: 25px;
    width: 18em;
    height: 2em;
    color: rgb(255, 255, 255);
    border-left: 0.08em solid;
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
</style>