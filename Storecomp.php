
<?php

$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server
//mysqli_set_charset($connection, "utf8");
if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['mail'];
$num = $_POST['num'];
$password = $_POST['password'];
$location = $_POST['location'];
$comp = $_POST['comp'];
$job = $_POST['job'];
$pos = $_POST['pos'];
$salary = $_POST['salary'];
$score = $_POST['score'];

$dead = $_POST['dead'];

if(!empty($_POST['spec']))
{

$x=1;$a=NULL;$b=NULL;$c=NULL;$d=NULL;$e=NULL;$f=NULL;
foreach($_POST['spec'] as $selected)
{


if($x==1)
	$a=$selected;
 //$query =mysql_query("INSERT INTO company(swdev) values('$selected')");
elseif($x==2)
$b=$selected;
 //$query =mysql_query("INSERT INTO company(sysadm) values('$selected')");
 elseif($x==3)
 $c=$selected;
 //$query =mysql_query("INSERT INTO company(netwadm) values('$selected')");
 elseif($x==4)
 $d=$selected;
 elseif($x==5)
 $e=$selected;
 //$query =mysql_query("INSERT INTO company(techsupport) values('$selected')");
 else
	 $f=$selected;
$x++;
}
}
if(!empty($_POST['exp']))
{
$x=1;$g=NULL;$h=NULL;$i=NULL;$j=NULL;$k=NULL;$l=NULL;
foreach($_POST['exp'] as $selected)
{

if($x==1)
	$g=$selected;
 //$query =mysql_query("INSERT INTO company(swdev) values('$selected')");
elseif($x==2)
$h=$selected;
 //$query =mysql_query("INSERT INTO company(sysadm) values('$selected')");
 elseif($x==3)
 $i=$selected;
 //$query =mysql_query("INSERT INTO company(netwadm) values('$selected')");
 elseif($x==4)
 $j=$selected;
 else
	 $l=$selected;
$x++;
}}
$sql=mysql_query("SELECT COUNT(*) from job");
$row= mysql_fetch_row($sql);
$count=$row[0]+1;

$datetime = date_create()->format('Y-m-d H:i:s');

//Insert Query of SQL
 $query =mysql_query("INSERT INTO job(sno,Name,Email,number,password,Location,domain1,domain2,domain3,domain4,domain5,domain6,company,typejob,position,compensation,scorerange,spec1,spec2,spec3,spec4,deadline,date)
 values ('$count','$name', '$email','$num', '$password','$location', '$a', '$b','$c','$d','$e','$f','$comp', '$job', '$pos','$salary','$score','$g','$h','$i','$j','$dead','$datetime')");
header('Location: success.html'); 


}
mysql_close($connection); 
include 'match.php';// Closing Connection with Server
?>