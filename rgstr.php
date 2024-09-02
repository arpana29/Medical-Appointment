<?php
$servername="localhost";
$username="root";
$password="";
$database="login";
$conn= mysqli_connect($servername,$username,$password,$database);
if($conn)
{
    echo"succesfully connected";
}
else{ 
    
    die("connection error" .mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="rgstr.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="f_n" required><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="l_n" required><br>
  <label for="lname">email:</label><br>
  <input type="email" id="lname" name="email" required><br>
  <label for="lname">AGE</label><br>
  <input type="text" id="lname" name="age" required><br>
  <label for="date">gender</label><br>
  <input type="text" id="lname" name="gender" required><br>
  <label for="lname">Contact:</label><br>
  <input type="phone" id="lname" name="tel" required><br>
  <input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">
</form>

    
</body>
</html>