<html>
<head>
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <title>User dashboard</title>
	<meta charset="utf-8" />
</head>
<body>
    <div class="jumbotron" style="background-image: url(ijk.jpg); background-size: 100%">
    <div class="container">
        <h1 style="color:#ffffff">J.A.R.V.I.S : </h1> <h2 style="color:#ffffff">Job Assistance and Recommendation Visual Interface System</h2style="color:#4F4FC1">
    </div>
    </div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hello Admin! &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-fixed-top" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">J.A.R.V.I.S <span class="sr-only">(current)</span></a></li>
                    <li><a href="welcomeadmin.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                </ul>
			</div>
		</div>
		
		

<?php
session_start();
//$id=$_SESSION["mail"];
//$name=$_SESSION["name"];
include('db.php');
$id =$_REQUEST['email'];

$result = mysql_query("SELECT * FROM users WHERE email  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$n=$test['name'] ;
				$e= $test['email'] ;					
				$l=$test['lastname'] ;
				$a=$test['age'] ;
				$g=$test['gender'] ;
				
				$c=$test['contact'] ;
				$p=$test['password'] ;
				$d=$test['degree'] ;
				$co=$test['company'] ;
				$col=$test['college'] ;
				$w=$test['workexp'] ;

if(isset($_POST['save']))
{	
					$firstname=$_POST['firstname'] ;
					$Lastname= $_POST['Lastname'] ;					
					$age=$_POST['age'] ;
					$gender=$_POST['gender'] ;
					$mail=$_POST['mail'] ;
					$num=$_POST['num'] ;
					$degree=$_POST['degree'] ;
					$password=$_POST['password'] ;
					$comp=$_POST['comp'] ;
					$coll=$_POST['coll'] ;
					$exp=$_POST['exp'] ;
	

	mysql_query("UPDATE users SET name='$firstname', email ='$mail',lastname ='$Lastname',age ='$age',gender ='$gender',contact ='$num',password ='$password',degree ='$degree',company ='$comp',college ='$coll',workexp ='$exp' WHERE email = '$id'");
				
	echo "Saved!";
	
	header("Location: welcomeadmin.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body><a href="welcomeadmin.php">GO BACK</a>
<form method="post">
<table>
	<ol><li><h3><b>Enter first name:*</h3></b></li>
		<p><input type="text" name="firstname" value="<?php echo $n ?>" >
		<h3><b><li>Enter last name:*</b></h3></li>
		<input type="text" name="Lastname" value="<?php echo $l ?>" ><br>
		<h3><b><li>Age</b></h3></li>
		<input type="text" name="age" value="<?php echo $a ?>"><br>
		<h3><b><li>Gender*:</b></h3></li>
		<input type="radio" name="gender" value="male" required > Male
		<input type="radio" name="gender" value="female" required > Female
		<input type="radio" name="gender" value="other" required > Other<br><br>
		<h3><b><li>Email-ID</b></h3></li>
		<input type="text" name="mail" value="<?php echo $e ?>" ><br>
		<h3><b><li>Contact number</b></h3></li>
		<input type="text" name="num" value="<?php echo $c ?>"><br>
		<h3><b><li>Enter Password*</b></h3></li>
		<input type="password" name="password" value="<?php echo $p ?>">
		<h3><b><li>Enter the highest degree obtained:*</b></h3></li>
		<select name="degree" value="<?php echo $d ?>">
		<option value="Masters " required>Masters</option>
		<option value="Bachelors" required>Bachelors</option>
		<option value="Professional" required>Professional degree</option>
		<option value="None" required>No degree obtained </option>
		</select></p>
		
		
		<h3><b><li>Which type.03 of Company do you Prefer?*</b></h3></li>
		<input type="radio" name="comp" value="prod" required > Product
		<input type="radio" name="comp" value="service" required > Service
		<input type="radio" name="comp" value="both" required > Both <br><br>
		
		<h3><b><li>Previous college institutions</b></h3></li>
		<input type="text" name="coll" value="<?php echo $col ?>"><br>
		<h3><b><li>Previous work experience(in years)*</b></h3></li>
		<input type="text" name="exp" value="<?php echo $w ?>" ><br>
		<input type="submit" name="save" value="save">
</table>

</body>
</html>
