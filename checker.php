<?php

 header('Content-type: text/plain; charset=utf-8');
    $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server
//mysqli_set_charset($connection, "utf8");


if(isset($_POST['log']))
{
		
    // username and password sent from form
   $username = $_POST['username'];
    $password = $_POST['pass'];
	if ((empty($_POST['username']) && empty($_POST['pass']))) //This is the way to check validations using PHP code but here we are using JS validations so it is not necessary
	{
		echo " Please enter the correct Username and Password ";
		include 'login1.html';
		exit();
	}
    $sql = "SELECT * FROM users WHERE email='$username' and password='$password'";
	$flag=0;
    $result = mysql_query($sql);
	
	$sqlj="SELECT * FROM job WHERE email='$username' and password='$password'";
	
	$resultj = mysql_query($sqlj);

 
		$row = mysql_fetch_assoc($resultj) or die("");
	
		$uname = $row['email']; // copying the usernames and passwords present in database into temporary variables
		$pwd   = $row['password'];
		echo $uname;echo "    ";echo $pwd;echo "    ";
}

?>