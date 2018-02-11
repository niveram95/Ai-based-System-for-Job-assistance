<?php


$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server
session_start();
$username=$_SESSION["mail"];

$file = 'C:\Octave\Octave-4.0.3\ex2data1.txt';
$resultfile='C:\Octave\Octave-4.0.3\ex2data2.txt';
if (file_exists($file)) {file_put_contents($file, "");}
if (file_exists($resultfile)) {file_put_contents($resultfile, "");}
						
$current = file_get_contents($file);
$username=$_SESSION["mail"];
$sqlr=mysql_query("SELECT * FROM acceptance where username='$username' ");
$sqlpr=mysql_query("SELECT * FROM probability");
$sqlc=mysql_query("SELECT COUNT(*) FROM acceptance where username='$username' ");
$row = mysql_fetch_row($sqlc);
$count=$row[0];
$companyname=array_fill(0, $count,0);
$i=0;
$sq=mysql_query("TRUNCATE TABLE probability") or die(mysql_error());

while($result=mysql_fetch_array($sqlr))
{	
	$companyname[$i]=$result['company'];
	$comp=$result['company'];
	//type of company
	$sql=mysql_query("SELECT company FROM job where Name='$comp' ");
	$row = mysql_fetch_row($sql);
	$type=$row[0];
	if($type=="prod")$type=1;
	else if($type=="service")$type=2;
	else $type=3;
	$current .=$type;
	$current .=",";
	//Salary
	$sql=mysql_query("SELECT compensation FROM job where Name='$comp' ");
	$row = mysql_fetch_row($sql);
	$sal=$row[0];
	if($sal<600000)$sal=300000;
	else if($sal>=600000&&$sal<=800000) $sal=700000;
	else $sal=1000000;
	$current .=$sal;
	$current .=",";
	//Location
	$sql=mysql_query("SELECT Location FROM job where Name='$comp' ");
	$row = mysql_fetch_row($sql);
	$city=$row[0];
	$sql=mysql_query("SELECT code FROM cities where city='$city' ");
	$row = mysql_fetch_row($sql);
	$city=$row[0];
	$current .=$city;
	$current .=",";
	//acceptance
	$acc=0;
	if($result['status']=="ACCEPT")$acc=1;
	$current .=$acc;
	$current .="\r\n";		
}
$also=$current;
file_put_contents($file, $also);

 	
$sqlj=mysql_query("SELECT * FROM job");

while($result=mysql_fetch_array($sqlj))
{
	$curre=	file_get_contents($file);
	$flag=0;$acc=1;	$cur=NULL;
	//file_put_contents($file, $current);
	//echo $current;
	$sqlr=mysql_query("SELECT * FROM acceptance where username='$username' ");
	while($res=mysql_fetch_array($sqlr))
	{  if($result['Name']==$res['company']){$flag=1;break;}
	}
	
	
	if($flag==1)continue;
	else
	{	
		$sno=$result['sno'];
		$comp=$result['Name'];
		$sqlcount=mysql_query("SELECT COUNT(*) FROM probability");
		$rower=mysql_fetch_row($sqlcount);
		$co=$rower[0];
		$co++;

$sql=mysql_query("INSERT into probability(sno,code,Name) VALUES('$co','$sno','$comp')");
	//acceptance
	
	
	$cur .=$acc;
	$cur .=",";
	
	//type
	$sql=mysql_query("SELECT company FROM job where Name='$comp' ");
	$ro = mysql_fetch_row($sql);
	$type=$ro[0];
	if($type=="prod")$type=1;
	else if($type=="service")$type=2;
	else $type=3;
	$cur .=$type;
	$cur .=",";
	//Salary
	$sql=mysql_query("SELECT compensation FROM job where Name='$comp' ");
	$ro = mysql_fetch_row($sql);
	$sal=$ro[0];
	$cur .=$sal;
	$cur .=",";
	//Location
	$sql=mysql_query("SELECT Location FROM job where Name='$comp' ");
	$row = mysql_fetch_row($sql);
	$ci=$row[0];
	$sq=mysql_query("SELECT code FROM cities where city='$ci' ");
	$ro = mysql_fetch_row($sq);
	$cit=$ro[0];
	$cur .=$cit;
	$cur .="\r\n";
	?><br><?php 
	
	
	
	file_put_contents($resultfile, $cur,FILE_APPEND);


	//echo $curr; echo "  - ";
	
	
	
	//file_put_contents($file, "");
	
	
			
	}	
}
?>