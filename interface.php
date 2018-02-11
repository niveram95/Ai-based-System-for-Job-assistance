<!DOCTYPE html>
<html>
<head>
<style>


</style>
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
				Hello <?php session_start();$username=$_SESSION["mail"]; echo " ";echo $username;?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-fixed-top" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">J.A.R.V.I.S <span class="sr-only">(current)</span></a></li>
                    <li><a href="interface.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
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
              <li role="presentation" class="tab-pane fade in"><a href="#letslearn" role="tab" data-toggle="tab">Let's Learn</a></li>
              <li role="presentation"><a href="#Notification" role="tab" data-toggle="tab">Notification</a></li>
              <li role="presentation"><a href="#Messages" role="tab" data-toggle="tab">Messages</a></li>
        </ul>
                <!--Tab Content-->
                <div class="tab-content">
                    <div class="active tab-pane fade in" id="letslearn">
                        <div id="my-carousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
							<?php
							$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
							$db = mysql_select_db("db", $connection); // Selecting Database from Server$imgData = file_get_contents($filename);
							$coun=mysql_query("SELECT count(*) FROM learningsuggestion where username='$username'");
							$rowc = mysql_fetch_row($coun);
							$counter=$rowc[0];
							$count=$counter;?>
                                <li data-target="#my-carousel" data-slide-to=<?php echo $counter; ?> class="active"> </li>
								<?php $counter--; ?>
                                <?php while($counter>0){ ?><li data-target="#my-carousel" data-slide-to=<?php echo $counter; ?>"></li><?php $counter--; } ?>
				
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
								
								<?php
								
								$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
								$db = mysql_select_db("db", $connection); 								
								$sql = "SELECT learningmaterial FROM learningsuggestion WHERE number=$count and username='$username'";
								$count--;
								$result = mysql_query("$sql");
								$res=mysql_result($result, 0);
								echo '<img class="imager" src="data:image/png;base64,'.base64_encode($res).'"/>';
								
								?>
								
								
								<div class="carousel-caption"></div>
                                    
                                </div>
								<?php
								$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
								$db = mysql_select_db("db", $connection); 						
								
								while($count>0){$sql = "SELECT learningmaterial FROM learningsuggestion WHERE number=$count and username='$username'";
								$result = mysql_query("$sql"); ?>
                                <div class="item">
								
                                   
                                        <?php $count--; 
										
								$res=mysql_result($result, 0);
								echo '<img class="imager" src="data:image/png;base64,'.base64_encode($res).'"/>';
								 ?>
				<div class="carousel-caption"></div>
                                </div><?php } ?>
                                
                            </div>
							

                            <!-- Controls -->
                            <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Notification"><b><br>You've gotten the following job suggestions. Click to view more details!<b><br><br><ul>
                       
						<?php

						$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
						$db = mysql_select_db("db", $connection); // Selecting Database from Server
						$suggest=mysql_query("select * from matching") or die(mysql_error());
						$username=$_SESSION["mail"];
							while($result=mysql_fetch_array($suggest))
							{
		
								$users=mysql_query("select * from users") or die(mysql_error());
								$i=1;
								while($i<=24)
								{
										$user='user'.$i;
										if($result[$user]==$username){?><a href="suggestion.php?ID=<?php echo $result['sno'];?>"><?php echo $result['company']?></a><br><br>
										<?php
										break;}
										$i++;
								}
							}
							
			
						?>
						<h2><a href="Iamchecking.php">Load more similar suggestions</a></h2>
						
                        
                    </div>
					<div class="tab-pane fade" id="Messages">
                        
                        
                    </div>
					
                </div>
    </div>
        </div>
       
            </div>
    <script src="Scripts/jquery-3.1.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>



</body></html>