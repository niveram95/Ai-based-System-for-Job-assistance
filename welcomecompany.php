
<!DOCTYPE html>
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
                <a class="navbar-brand" href="#">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				Hello <?php session_start();$username=$_SESSION["company"]; echo " ";echo $username;?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-fixed-top" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">J.A.R.V.I.S <span class="sr-only">(current)</span></a></li>
                    <li><a href="welcomecompany.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Help</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"> </span>  Username <span class="caret"> </span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Account</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="ty.html">Sign out</a></li>
                    </li>
                </ul>
                </ul>
            </div><!-- /.navbar-collapse -->    
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4">
			
                <!--tabs-->
          <ul class="nav nav-tabs" role="tablist">
             
              <li role="presentation"><a href="#Notification" role="tab" data-toggle="tab">Notification</a></li>
              <li role="presentation"><a href="#Messages" role="tab" data-toggle="tab">Messages</a></li>
           </ul>
                <!--Tab Content-->
                <div class="tab-content">
                    
                    <div class="tab-pane fade" id="Notification"><b><br>You've gotten the following user suggestions according to your specifications. Click to view more details!<b><br><br><ul>
                       
						<?php
						
						$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
						$db = mysql_select_db("db", $connection); // Selecting Database from Server
						$username=$_SESSION["company"];
						$sql=mysql_query("SELECT Name from job where email='$username'");
						$row=mysql_fetch_array($sql);
						$username=$row[0];
						$suggest=mysql_query("select * from acceptance where company='$username' and status='ACCEPT' ");
						
							while($result=mysql_fetch_array($suggest))
							{
										$user=$result['username'];
										$sql=mysql_query("SELECT name from users where email='$user'");
										$row=mysql_fetch_array($sql);
										$user=$row[0];
										$users=$result['username'];
										$sql=mysql_query("SELECT sno from users where email='$users'");
										$row=mysql_fetch_array($sql);
										$sno=$row[0];
										?><a href="suggestusers.php?ID=<?php echo $sno;?>"><?php echo $user?></a><br><br>
										<?php
								
							}
			
						?>
						
                        </center>
                    </div>
                    <div class="tab-pane fade" id="Messages">
                        <h2> No new messages</h2>
                        <img src="msg.png" />
                    </div>
                </div>
    </div>
        </div>
       
            </div>
    <script src="Scripts/jquery-3.1.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</body>
</html>


</body>
</html>