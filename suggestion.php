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
		p{ padding-left: 350pt; padding-right: 200pt; } </style> 

		<?php
		
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server
$suggest_id = (int)$_GET['ID'];

session_start();

$username=$_SESSION["mail"];
//$_SESSION["id"]=$suggest_id;
$sql=mysql_query("SELECT * FROM job WHERE sno='$suggest_id' ");
$row=mysql_fetch_row($sql);
$name=$row[1];
$sq=mysql_query("SELECT status FROM acceptance where username='$username' and company='$name'");
$ro=mysql_fetch_row($sq);

if($ro[0]=="ACCEPT")
{?><b><?php echo "NAME OF THE COMPANY:  ";?></b><?php echo $row[1];?><br><br><?php
?><b><?php echo "CONTACT NUMBER:  ";?></b><?php echo $row[3];?><br><br><?php
?><b><?php echo "LOCATION OF THE COMPANY:  ";?></b><?php echo $row[5];?><br><br><?php
?><b><?php echo "WORK DOMAIN(S):  ";?></b><?php
echo "|";

if($row[6]!=NULL) {echo $row[6];echo "|";}
if($row[7]!=NULL) {echo $row[7];echo "|";}
if($row[8]!=NULL) {echo $row[8];echo "|";}
if($row[9]!=NULL) {echo $row[9];echo "|";}
if($row[10]!=NULL) {echo $row[10];echo "|";}
if($row[11]!=NULL) {echo $row[11];echo "|";}
?><br><br>
<?php
?><b><?php echo "TYPE OF THE COMPANY:  ";?></b><?php echo $row[12];?><br><br><?php
?><b><?php echo "POSITION OF THE JOB OPENING:  ";?></b><?php echo $row[13];?><br><br><?php
?><b><?php echo "COMPENSATION:  ";?></b><?php echo $row[15];?><br><br><?php
?><b><?php echo "DEADLINE:  ";?></b><?php echo $row[21];?><br><br><?php  
?><b><p><center>
<form>
<input type="button" value="ACCEPTED" name="accept" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:3px"></input>

</form>
<?php }


else if($ro[0]=="REJECT")
{?><b><?php echo "NAME OF THE COMPANY:  ";?></b><?php echo $row[1];?><br><br><?php
?><b><?php echo "CONTACT NUMBER:  ";?></b><?php echo $row[3];?><br><br><?php
?><b><?php echo "LOCATION OF THE COMPANY:  ";?></b><?php echo $row[5];?><br><br><?php
?><b><?php echo "WORK DOMAIN(S):  ";?></b><?php
echo "|";

if($row[6]!=NULL) {echo $row[6];echo "|";}
if($row[7]!=NULL) {echo $row[7];echo "|";}
if($row[8]!=NULL) {echo $row[8];echo "|";}
if($row[9]!=NULL) {echo $row[9];echo "|";}
if($row[10]!=NULL) {echo $row[10];echo "|";}
if($row[11]!=NULL) {echo $row[11];echo "|";}
?><br><br>
<?php
?><b><?php echo "TYPE OF THE COMPANY:  ";?></b><?php echo $row[12];?><br><br><?php
?><b><?php echo "POSITION OF THE JOB OPENING:  ";?></b><?php echo $row[13];?><br><br><?php
?><b><?php echo "COMPENSATION:  ";?></b><?php echo $row[15];?><br><br><?php
?><b><?php echo "DEADLINE:  ";?></b><?php echo $row[21];?><br><br><?php  
?><b><p><center>
<form>
<input type="button" value="DENIED" name="accept" style="font-size:7pt;color:white;background-color:red;border:2px solid #336600;padding:3px"></input>

</form>
<?php }


else{?>
<b><?php echo "NAME OF THE COMPANY:  ";?></b><?php echo $row[1];?><br><br><?php
?><b><?php echo "CONTACT NUMBER:  ";?></b><?php echo $row[3];?><br><br><?php
?><b><?php echo "LOCATION OF THE COMPANY:  ";?></b><?php echo $row[5];?><br><br><?php
?><b><?php echo "WORK DOMAIN(S):  ";?></b><?php
echo "|";

if($row[6]!=NULL) {echo $row[6];echo "|";}
if($row[7]!=NULL) {echo $row[7];echo "|";}
if($row[8]!=NULL) {echo $row[8];echo "|";}
if($row[9]!=NULL) {echo $row[9];echo "|";}
if($row[10]!=NULL) {echo $row[10];echo "|";}
if($row[11]!=NULL) {echo $row[11];echo "|";}
?><br><br>
<?php
?><b><?php echo "TYPE OF THE COMPANY:  ";?></b><?php echo $row[12];?><br><br><?php
?><b><?php echo "POSITION OF THE JOB OPENING:  ";?></b><?php echo $row[13];?><br><br><?php
?><b><?php echo "COMPENSATION:  ";?></b><?php echo $row[15];?><br><br><?php
?><b><?php echo "DEADLINE:  ";?></b><?php echo $row[21];?><br><br><?php  
$string=$suggest_id.$username;
//echo"<a href ='accept.php?name=$suggest_id'>";
?><b><p><center>
<form name="form1"  method="post" action="accept.php?ID=<?php echo $string;?>">
<input type="submit" value="ACCEPT" name="accept"></input>
<input type="submit" value="REJECT" name="accept"></input><?php } ?>
</form>
 </body>  
</html>