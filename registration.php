*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    
}
body{
    position: relative;
    margin: 0px;
    padding: 0px;
   /* background-image:url("background.jpg");*/
    background-repeat: no-repeat;
    font-family:Verdana,sans-serif;
    background: linear-gradient(rgba(49, 49, 49, 0.6),rgba(70, 71, 70, 0.6)), url("http://localhost/project2/image.jpg");
    background-size: cover;
    color: #000;
    }
    ::placeholder{
        color: rgb(17, 16, 16);
    }
    
    li,a{
        font-family: sans-serif;
        font-weight: 500;
        font-size: 16px;
        color: aliceblue;
        text-decoration: none;
    }
    header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px 10%;
        background-color: black;
    }
    .headding{
        color: #fff;
        font-size: 30px;
        font-weight: 100px;
    }
    .nav-links{
        list-style: none;
    }
    .nav-links li{
        display: inline-block;
        padding: 0px 20px;
    
    }
    .nav-links li a{
        transition: all 0.3s ease 0s ;
    }
    .nav-links li a:hover{
        color: rgb(217, 8, 8);
    }
  

    

.row {
    display:flex;
    flex-direction:row;
    
}


.input-group {
    flex:1;  
    display:flex;
    flex-direction:column; 
    margin: 10px 5px;
   /*flex-wrap:wrap ;*/
}   

/* .formbody {
    /*position: relative;*/
    /*top: 50%;
    /*background:white;*/
   /* padding:10px 20px;
    
} */ 
.formbody{
    position: relative;
  margin: auto;
    align-items: center;
    padding: 30px;
    background-color: #fff;
    width:fit-content;
}
label{
    color: green;
    font-weight: 30px;
}

input[type],select{
    min-width: 2%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid rgb(5, 5, 5);
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 15px;
    background-color: rgba(250, 245, 245, 0.658);
    }

    input[type=submit] {
        display: inline-block;
        width: 10%;
        background-color: rgb(8, 75, 47);
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        box-sizing: border-box;
        border-radius: 4px;
        cursor: pointer;
        text-decoration:none;
        text-align: center;
        min-width: 10em;
        }

        input[type=submit]:hover {
            background-color: rgba(9, 243, 146, 0.432);
            }
            input[type]:hover{
            
              box-shadow:0 0 4px rgb(2, 40, 25);
            }
            select:hover{
              box-shadow:0 0 4px rgb(2, 105, 79);
            }
            #box {
                margin: auto;
                width: 40%;
                
                padding: 50px;
            }
            textarea{
                min-width: 2%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 15px;
                background-color: rgba(231, 225, 225, 0.658);
            }
            #sname {
                min-width: 35%;
                width: 60%; 

            }
            #btn{
                width:40%;
            }
            
    /*input[type=number], select {
        min-width: 15%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 15px;
        }
        /*input[type=tel], select {
            min-width: 15%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 15px;
            }
            input[type=email], select {
            min-width: 15%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 15px;
            }


<!-- <!DOCTYPE html>
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
  <div class="headline">
  <h1>Registration
  <div class="btn">
  <a href="#">Home</a>
                    <a href="login.php">Login</a>
                   <a href="about.php">About</a>
                   <a href="contact.php">Contact</a>
  </div></h1>
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
          <!-- <label for="1parent">If have single parent:</label> 
         <input type="radio" name="1parent" value="1">Yes
         <input type="radio" name="1parent" value="0">No
         -->
          
         
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
 -->
