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
                <a class="navbar-brand" href="#">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-fixed-top" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">J.A.R.V.I.S <span class="sr-only">(current)</span></a></li>
                    <li><a href="interface.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                </ul>
			</div>
		</div><p><style>
		p{ padding-left: 350pt; padding-right: 200pt; } 
		p1{ padding-left: 450pt; padding-right: 200pt; } </style> 

		<?php
		
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server
$suggest_id = (int)$_GET['ID'];

session_start();

$username=$_SESSION["company"];
//$_SESSION["id"]=$suggest_id;
$sql=mysql_query("SELECT * FROM users WHERE sno='$suggest_id' ");
$row=mysql_fetch_row($sql);
$name=$row[1];
?>
<b><?php echo "NAME OF THE USER:  ";?></b><p id="p1"><?php echo $row[1];echo " "; echo $row[3];?><br><br><?php
?><b><?php echo "GENDER:  ";?></b><p id="p1"><?php echo $row[5];?><br><br><?php
?><b><?php echo "AGE:  ";?></b><p id="p1"><?php echo $row[4];?><br><br><?php
?><b><?php echo "CONTACT NUMBER:  ";?></b><p id="p1"><?php echo $row[6];?><br><br><?php
?><b><?php echo "MAXIMUM DEGREE ACHIEVED:  ";?></b><p id="p1"><?php echo $row[8];?><br><br><?php
?><b><?php echo "UNDERGRADUATE COLLEGE:  ";?></b><p id="p1"><?php echo $row[26];?><br><br><?php
?><b><?php echo "PREVIOUS WORK EXPERIENCE:  ";?></b><p id="p1"><?php echo $row[27]; echo "  years";?><br><br><?php

?><b><?php echo "PREVIOUS COMPANY:  ";?></b><p id="p1"><?php if($row[28]!=NULL)echo $row[28]; else echo "None";?><br><br><?php
  
?>
 </body>  
</html>