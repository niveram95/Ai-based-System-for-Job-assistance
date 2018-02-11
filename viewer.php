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

<table border="1" width="100%">>
	
			<?php
			include("db.php");
			
				
			$result=mysql_query("SELECT * FROM users");
			
			echo "<tr><th><center>First Name</th><th><center>Username</th><th><center>Last name</th>
			<th><center>Age</th><th><center>Gender</th><th><center>Contact</th>
			<th><center>Password</th><th><center>Degree</th><th><center>Company</th><th><center>College</th><th><center>Work Experience</th><th><center>Date created</th>
</tr>";
			while($test = mysql_fetch_array($result))
			{
				$id = $test['email'];	
				$name=$test['name'];
				echo "<tr align='center'>";	
			    echo"<td><font color='black'>" .$test['name']."</font></td>";
				echo"<td><font color='black'>" .$test['email']."</font></td>";
				echo"<td><font color='black'>". $test['lastname']. "</font></td>";
				echo"<td><font color='black'>". $test['age']. "</font></td>";
				echo"<td><font color='black'>". $test['gender']. "</font></td>";
				echo"<td><font color='black'>". $test['contact']. "</font></td>";
				echo"<td><font color='black'>". $test['password']. "</font></td>";
				echo"<td><font color='black'>". $test['degree']. "</font></td>";
				echo"<td><font color='black'>". $test['company']. "</font></td>";
				echo"<td><font color='black'>". $test['college']. "</font></td>";
				echo"<td><font color='black'>". $test['workexp']. "</font></td>";
				echo"<td><font color='black'>". $test['date']. "</font></td>";
					//$_SESSION["mail"]=$id;
				//$_SESSION["name"]=$name;
				
				echo"<td> <a href ='view.php?email=$id'>Edit</a>";
				echo"<td> <a href ='userprofile.php?email=$id'><center>View User</center></a>";
				echo"<td> <a href ='del.php?email=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			
			mysql_close($conn);
			?>
			<a href="welcomeadmin.php">GO BACK</a>
</table>
</body>
</html>