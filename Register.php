<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now!</title>
    <link rel="stylesheet" type="text/css" href="stylephp.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <h2 class="he"><u>Registration Form</u></h2>
        <br><br>
        <form class="box" action="test1.php", method="POST">
            <div class="form-group">
             <b>First Name</b>   <input type="text" name="fname" id="fname" required placeholder="Enter First name"></input>
             </div>
        <div class="form-group">
             <b>Middle Name</b>   <input type="text" name="mname" id="mname" placeholder="Enter Middle name"></input>
        </div>
            <div class="form-group">
             <b>Last Name</b>   <input type="text" name="lname" id="lname"  required placeholder="Enter Last name"></input>
           </div>
              <div class="form-group">
            <b>Gender</b>
            <select name="gender" id="gender">
                <option value="none" selected>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
           </div>
            <div class="form-group">
              <b>Username</b>  <input type="text" name="username" id="username" required placeholder="Enter Username"></input>
           </div>
            <div class="form-group">
              <b>Password</b>  <input type="password" name="pwd" id="pwd" placeholder="Enter new password"></input>
              </div>
             <div class="form-group">
               <b>Confirm Password</b> <input type="password" name="psw-repeat" id="psw-repeat" placeholder="Repeat your password" required>
            </div>
               <div class="form-group1">
                <button type="submit">Sign Up</button>
            </div>
            <div class="form-group1">
                 <button type="reset">Reset</button>
            </div>

        </form>

    </div>
        
     
 
 
</body>
</html>