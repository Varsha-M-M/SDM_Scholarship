<!DOCTYPE html>
<html lang="en">
<head>
    <link href="registration.css" rel="stylesheet" type="text/css"/>
    <script src="registration.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document1</title>

    
</head>




<body>
  <h1>Registration</h1>
  <div class="btn">
  <a href="#">Home</a>
                    <a href="login.php">Login</a>
                   <a href="about.php">About</a>
                   <a href="contact.php">Contact</a>
  </div>

  <form action ="redirect_register.php" method="post">
  
    <div class="formbody">
    <div class="row">
      <div class="input-group">
        <label>First name </label>
        <input type="text" name="fname" placeholder="first name">
      </div>
      <div class="input-group">
        <label>Middle name</label>
        <input type="text" name="mname" placeholder="Middle name">
      </div>
      <div class="input-group">
        <label>Last name</label>
        <input type="text" name="lname" placeholder="last name">
      </div>
    </div>
    <div class="row">
      <div class="input-group">
        <label>Student usn: </label> 
        <input type="text" placeholder="usn" name="usn" id="usn" required>
      </div>
      <div class="input-group"> 
      <label for="caste" class="form-control">Student Caste:</label>
      <select name="caste" id="cast">
        <option value="sc">SC</option>
        <option value="st">ST</option>
        <option value="obc">OBC</option>
        <option value="brahmin">BRAHMIN</option>
        <option value="minority">minority</option>
        <option value="cat1">catagory 1</option>
        <option value="other">OTHER</option>
      </select>
      </div>
      <div class="input-group"> 
        <label for="state">State</label>
        <select name="state" id="state" class="form-control">
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
          <option value="Daman and Diu">Daman and Diu</option>
          <option value="Delhi">Delhi</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Puducherry">Puducherry</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="West Bengal">West Bengal</option>
        </select>
      </div>
     
    </div>
    
    
    
    <div class="row">
      <div class="input-group">
        <label for="10per">10th percentage: </label> 
        <input type="number"  name="10per" required>
      </div>  
      <div class="input-group">
      <label for="12per">12th/Diploma percentage: </label> 
        <input type="number"  name="12per" required>
      </div>
      <div class="input-group">
        <label for="prvper">Previous year percentage:</label> 
         <input type="number"  name="prvper" required>
      </div>
    </div>

    <div class="row">
      <div class="input-group">
        <div id="gender">
          <label for="Gender" >Gender :</label> 
         <input TYPE="Radio" Name="Gender" Value="Male">Male
         <input TYPE="Radio" Name="Gender" Value="Female">Female
         <input TYPE="Radio" Name="Gender" Value="other">Other  
          
        </div>
      </div>
    </div>

    <div class="row">
      <div class="input-group">
        <div id="handicap">
          <label for="dis" >If handicap :</label> 
          <input TYPE="Radio" Name="dis" Value="1" onclick="text(1)" checked>Yes
          <input TYPE="Radio" Name="dis" Value="0" onclick="text(0)">No
          
         
        </div>
        
        <div class="input-group">
          <div id="hide" >
            <label for="handicap">Percentage of diability:</label>
            <input type="number" name="handicap" value="0.0">
          </div>
        </div>
      </div>
    </div>

    
    
    
    <div class="row">  
    <div class="input-group">
      <label for="foccupation">father's occupation</label>
      <select name="foccupation" id="occupation">
       <option value=" labour">labour</option>
       <option value="military">military</option>
       <option value="railways">railway</option>
      <option value="farmer">farmer</option>
       <option value="other">OTHER</option>
     </select>
    </div>
    <div class="input-group">
      <label for="moccupation">mother's occupation</label>
        <select name="moccupation" id="occupation">
         <option value=" labour">labour</option>
         <option value="military">military</option>
         <option value="railways">railway</option>
        <option value="farmer">farmer</option>
         <option value="other">OTHER</option>
       </select>
    </div>
    <div class="input-group">
      <label for="income">Annual Income: </label> 
       <input type="number" name="income" id="income" required>
    
    </div>
    </div>

    
          <label for="smem">If mother is sdmcet associative member:</label>
          <input type="radio" name="smem" value="1">yes
          <input type="radio" name="smem" value="0">no
          &emsp;&emsp;
          <label for="1parent">If have single parent:</label> 
         <input type="radio" name="1parent" value="1">Yes
         <input type="radio" name="1parent" value="0">No
        
          
         
        <br><br>
        <label for="hostel">If Recides in Hostel:</label> 
        <input type="radio" name="hostel" value="1">Yes
        <input type="radio" name="hostel" value="0">No
        <br><br>
        <label for="1year">If in first year :</label> 
        <input type="radio" name="1year" value="1">Yes
        <input type="radio" name="1year" value="0">No
        <br><br>
        <label for="1parent">If have single parent:</label> 
        <input type="radio" name="1parent" value="1">Yes
        <input type="radio" name="1parent" value="0">No
        <br><br>

        <div class="row">  
          <div class="input-group">
          <label for="phone">Mobile no:</label> 
         <input type="tel" name="phone" mob="no" id="number" required>
          </div>
          <div class="input-group">
            <label for="mail"> E-mail :</label>
            <input type="email" name="mail" id="email" required>
          </div>
        </div> 
        <input type="submit" value="Submit">
</form>
  </div>


</body>
</html>
