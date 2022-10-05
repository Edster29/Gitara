<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<?php
$pass = $_POST['pwd'];
$con = $_POST['psw-repeat'];
if ($pass == $con) {
	 echo "Registration Successful!";
      echo "<br>";
      echo "First Name: ";
      echo $_POST['fname']."<br>";
        echo "Middle Name: ";
      echo $_POST['mname']."<br>";
      echo "Last Name: ";
	  echo $_POST['lname']."<br>";
	    echo "Gender: ";
	  echo $_POST['gender']."<br>";
	  echo "Username: ";
	  echo $_POST['username']."<br>";
	  echo "Password: ";
	  echo $_POST['pwd']."<br>";
	  echo "Confirmed Password: ";
	  echo $_POST['psw-repeat']."<br>";
	  echo '<a href="index.html"><button>Log in!</button></a>';

} else {
	echo "Your Password does not match to your confirm password!";
	 echo "<br>";
	echo '<a href="Register.php"><button>Go Back</button></a>';
}

     
	
?>


</body>
</html>