<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server
$accept=$_GET['ID'];
//echo $accept;
$sno=NULL;$username=NULL;
$strlen = strlen( $accept );
for( $i = 0; $i <= $strlen; $i++ ) {
	$char = substr( $accept, $i, 1 );
	if(is_numeric( $char))$sno=$sno.$char;
else {$flag=$i;break;}
}
$username=substr($accept, $flag);
//echo $username; echo " "; echo $sno;
$response=$_POST['accept'];
$sql=mysql_query("SELECT Name from job where sno='$sno'")or die(mysql_error());
$row=mysql_fetch_array($sql);
$sno=$row[0];
//echo $row[0];
$sql=mysql_query("SELECT COUNT(*) from acceptance")or die(mysql_error());
$row=mysql_fetch_array($sql);
$count=$row[0]+1;

$sql=mysql_query("INSERT into acceptance(sno,username,company,status) VALUES('$count','$username','$sno','$response')");
header('Location: interface.php');
	

?>