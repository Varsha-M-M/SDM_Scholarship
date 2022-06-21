<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="registration.css" rel="stylesheet" type="text/css"/>
    <title>Notification</title>
</head>
<body>
<div class="headline"><h1>NOTIFY
        <div class="btn">
          <input type="button" value="HOME"  >
          <input type="button" value="about">
           <input type="button" value="contact us">
        </div>   </h1>  
    </div> <br><br><br><br><br><br>
    <form action='index_mail.php' method='POST'>
    <div id="box">
    <label id="l1">Notification Type:</label>
    <select name="scholar1" id="scholar1">
        <option  name=select value=select>--select--</option>
        <option value="Notification of Arrival of New Scholarship" >Notification of Arrival of New Scholarship</option>
        <option value="Application Called Notification">Application Called Notification</option>
        <option value="Application Deadline Notification">Application Deadline Notification</option>
     </select>
      <br>

    <label id="l1">Choose the Scholarship:</label>
    <select name="scholar" id="scholar">
        <option  value=select2>--select--</option>
        <option  value=1>Fee Concession for others</option>
        <option  value=2>Food and Accomodation cat1</option>
        <option  value=3>Food and Accomodation OBC</option>
        <option  value=4>Post Matric Disable</option>
        <option  value=5>Post Matric for Minority</option>
        <option  value=6>Post Matric Labour</option>
        <option  value=7>Post Matric SC</option>
        <option  value=8>Post Martic ST</option>
        <option  value=9>Sakham Disable</option>
        <option  value=10>SDME Trust</option>
        <option  value=11>SKDRDP</option>
        <option  value=12>Top Class Scheme SC</option>
        <option  value=13>Fee Concession for Disabels</option>
     </select>
      <br>

    <label id="l1">notification message:</label>
    <textarea id="w3review" name="w3review" value="w3review"rows="4" cols="50"></textarea>

      <!-- <label id="l1">enter USN</label>
      <input type="text" > -->
      <br>
      <input type="submit" value="SEND" id="SEND" name="SEND">
      </form>
    </div>
    
</body>
</html>