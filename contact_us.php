
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
$servername="localhost";
$username="root";
$password="";
$database="login";
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("connection error" .mysqli_connect_error());
}
else{ 
 $f_n=$_POST["first_name"];
 $l_n=$_POST["last_name"];
 $email=$_POST["email"];
 $age=$_POST["age"];
 $gender=$_POST["gender"];
 $tel=$_POST["phone"];

    
$sql="INSERT INTO `sign` ( `f_n`, `l_n`, `email`, `age`, `gender`, `tel`) VALUES
( '$f_n', '$l_n', '$email', '$age', '$gender', '$tel')";
$result=mysqli_query($conn,$sql);
    
 
}
mysqli_close($conn);
?>

<div class="col-lg-6">
    <div class="form-wrapper">
    <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
    
        <div class="panel panel-skin">
        <div class="panel-heading">
            <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
                <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span><bold> Make an appoinment </bold><small>(It's free!)</small></h3>
                </div>
                <div class="panel-body">
            </div>
        </div>				
    
    </div>
    </div>
</div>					
</div>		
<form action ="contact_us.php"  method="post">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control input-md">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control input-md">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control input-md">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <label>Phone number</label>
                <input type="text" name="phone" id="phone" class="form-control input-md">
            </div>
        </div>

    </div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
    <label>Age</label>
    <input type="date" name="age" id="age" class="form-control input-md">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<label>Gender</label>
<input type="text" name="gender" id="gender" class="form-control input-md">

</div>
</div>
</div>
    <input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">
    
    <p class="lead-footer">* We'll contact you by phone & email later</p>

</form>