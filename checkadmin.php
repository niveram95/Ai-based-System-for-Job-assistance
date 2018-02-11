<?php
if(isset($_POST['log']))
{
	$username = $_POST['username'];
    $password = $_POST['pass'];
	if(($username=="admin")&&($password=="admin"))
	{
			header('Location: welcomeadmin.php');
	}
	else
	{
			echo "Incorrect username/password";
			include 'loginadmin.html';
	}
}
?>
			