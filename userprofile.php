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
		<a href="welcomeadmin.php">GO BACK</a>
		
		
<center><h1>SCORES</h1>

	<table border="1" width="30%">

<?php
			$id =$_REQUEST['email'];
			include("db.php");
			
				
			$result=mysql_query("SELECT * FROM score where username='$id'");
			

			
			echo "<tr><th><center>Score obtained</th><th><center>Category</th><th><center>Subject</th></tr>";
			
			
			while($test = mysql_fetch_array($result))
			{
				echo "<tr align='center'>";	
			    echo"<td><font color='black'>" .$test['scores']."</font></td>";
				echo"<td><font color='black'>" .$test['category']."</font></td>";
				echo"<td><font color='black'>". $test['subject']. "</font></td>";
				echo "</tr>";
			}
			mysql_close($conn);
			?>
			
			</table><br><hr><br>
			<h1>USER PROFILE SCORE AND EXPERTISE</h1>
			
			<table border="1">

<?php
			$id =$_REQUEST['email'];
			include("db.php");
			$a=NULL;
				
			$result=mysql_query("SELECT * FROM userjob where username='$id'");
			

			
			echo "<tr><th>Expertise</th><th>Total Profile Score</th><th>Total profile score percentage</th></tr>";
			while($test = mysql_fetch_array($result))
			{
					echo "<tr align='center'>";	if($test['Expertise_oops']!=NULL) $a=$test['Expertise_oops'];
					if($test['Expertise_dbms']!=NULL) $a=$a.",".$test['Expertise_dbms'];
					if($test['Expertise_dsa']!=NULL) $a=$a.",".$test['Expertise_dsa'];
					if($test['Expertise_sw']!=NULL) $a=$a.",".$test['Expertise_sw'];
			    echo"<td><font color='black'>" .$a."</font></td>";
				echo"<td><font color='black'>" .$test['Total_Score']."</font></td>";
				echo"<td><font color='black'>". $test['TPFP']. "</font></td>";
				echo "</tr>";
			}
			mysql_close($conn);
			?>
			</table>
		</body>
		</html>