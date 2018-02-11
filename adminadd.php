<?php

if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
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
					$datetime = date_create()->format('Y-m-d H:i:s');
					
				
												
		 mysql_query("INSERT INTO users(name,email,lastname,age,gender,contact,password,degree,company,college,workexp,date,logincount) 
		 VALUES ('$firstname','$mail','$Lastname','$age','$gender','$num','$password','$degree','$comp','$coll','$exp','$datetime',0)"); 
				header("Location: welcomeadmin.php");
				
	        }
?>