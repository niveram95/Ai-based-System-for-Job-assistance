<html>

<?php
session_start();
header('Content-type: text/plain; charset=utf-8');
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server
//mysqli_set_charset($connection, "utf8");
$score=0;$type;
if(isset($_POST['sub']))
{
	$logina=mysql_query("select logincount from users where email='$username'");			
					$row = mysql_fetch_row($logina);
					$login = $row[0];
					++$login;		// in success case user will be redirected to profile page
					$quer =mysql_query("UPDATE users set logincount='$login' where email= '$username'");
	$score=0;
	
	$correct=$_SESSION["correct"];
	$first=$_SESSION["first"];
	$second=$_SESSION["second"];
	$third=$_SESSION["third"];
	$fourth=$_SESSION["fourth"];
	$mail=$_SESSION["mail"];
	$cat=$_SESSION["cat"];
	$table=$_SESSION["table"];
	$username=$_SESSION["username"];
	$limit = count($correct);
	
	
	for ($i = 1; $i <= $limit; $i++) {
		$c="ab".$i;
//echo $correct[$i];	
	if(!isset($_POST[$c])){}
		else
		{
			if($first[$i]==$correct[$i])$type=1;
			else if($second[$i]==$correct[$i])$type=2;
			else if($third[$i]==$correct[$i])$type=3;
			else if($fourth[$i]==$correct[$i])$type=4;
			else $type=NULL;
			
		$x[$i]=$_POST[$c];
		//echo $x[$i];
		
		//echo $type;echo " ";
if($type==$x[$i])$score++;
}}
	header('Location: interface.php' ); 
	
}
$ql=mysql_query("SELECT scores WHERE category='$cat' and username='$username' and subject='$table'");
$row = mysql_fetch_row($ql);
if($row[0]==NULL){
$query =mysql_query("INSERT INTO score(username, scores,category,subject)
values ('$mail', '$score','$cat', '$table')");}
else { $query =mysql_query("UPDATE score SET scores='$score' where username='$mail' and category='$cat' and subject='$table'");}
 
	$ql = mysql_query("SELECT logincount FROM users WHERE email=$username");
	$row = mysql_fetch_row($ql);
	if(row[0]<30)
	{	
 
 $totaloops=0;$totaldbms=0;$totaldbms=0;
 //Learning oops count
$count=0;

	$ql = mysql_query("SELECT count(scores) FROM score WHERE subject='oops' and username='$username'");
	$row = mysql_fetch_row($ql);
	$count=$row[0];
	$count=10;
	
//Learning dbms count
$countd=0;

	$ql = mysql_query("SELECT count(scores) FROM score WHERE subject='dbms' and username='$username'");
	$row = mysql_fetch_row($ql);
	$countd=$row[0];
	$countd=10;
	
//Learning dsa count
$countsa=0;

	$ql = mysql_query("SELECT count(scores) FROM score WHERE subject='dbms' and username='$username'");
	$row = mysql_fetch_row($ql);
	$countsa=$row[0];
	$countsa=10;
	
//oops total

	for($i=1;$i<=$count;$i++)
{
	$ql = mysql_query("SELECT scores FROM score WHERE category=$i and subject='oops' and username='$username'");
	
	$row = mysql_fetch_row($ql);
    $totaloops=$totaloops+$row[0];
}
//dbms total

	for($i=1;$i<=$countd;$i++)
{
	$ql = mysql_query("SELECT scores FROM score WHERE category=$i and subject='dbms' and username='$username'");
	
	$row = mysql_fetch_row($ql);
    $totaldbms=$totaldbms+$row[0];
}
	
//dsa total

	for($i=1;$i<=$countsa;$i++)
{
	$ql = mysql_query("SELECT scores FROM score WHERE category=$i and subject='dsa' and username='$username'");
	
	$row = mysql_fetch_row($ql);
	$totaldsa = $totaldsa+$row[0];
}
if($totaloops>=30)
$oops='oops';else $oops=NULL;
if($totaldbms>=30)
$dbms='dbms';else $dbms=NULL;
if($totaldsa>=30)
$dsa='dsa';else $dsa=NULL;
$totalscore=$totaloops+$totaldbms+$totaldsa;
$sw=NULL;
//Algorithm
$skills=0;$experience=0;
$sql=mysql_query("SELECT skill1 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill2 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill3 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill4 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill5 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill6 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill7 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill8 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill9 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill10 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill11 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill12 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill13 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill14 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT skill15 from users where email='$username'");
$row=mysql_fetch_row($sql);
if($row[0]!=NULL)$skills++;
$sql=mysql_query("SELECT workexp from users where email='$username'");
$row=mysql_fetch_row($sql);
$experience=$row[0];
$tpfp=0;
$tpf=5*$totalscore+3*$skills+2*$experience;
$tpfp=($tpf/815)*100;
$ql = mysql_query("SELECT username FROM userjob WHERE username='$username'");
	$row = mysql_fetch_row($ql);
if($row[0]==NULL)
{$sql=mysql_query("INSERT into userjob(username,Expertise_oops,Expertise_dbms,Expertise_dsa,Expertise_SW,Total_Score,TPFP) VALUES('$username','$oops','$dbms','$dsa','$sw','$totalscore','$tpfp')");}
	}
	else {$sql=mysql_query("UPDATE userjob SET Expertise_oops='$oops',Expertise_dbms='$dbms',Expertise_dsa='$dsa',Expertise_SW='$sw',Total_Score='$totalscore',TPFP='$tpfp' WHERE username='$username'");}
	//learning suggestion

for($i=1;$i<=$count;$i++)
{
	$ql = mysql_query("SELECT scores FROM score WHERE category=$i and subject='oops' and username='$username'");
	
	$row = mysql_fetch_row($ql);
$learnoops[$i] = $row[0];
}
for($i=1;$i<=$countd;$i++)
{
	$ql = mysql_query("SELECT scores FROM score WHERE category=$i and subject='dbms' and username='$username'");
	
	$row = mysql_fetch_row($ql);
$learndbms[$i] = $row[0];
}
for($i=1;$i<=$countsa;$i++)
{
	$ql = mysql_query("SELECT scores FROM score WHERE category=$i and subject='dsa' and username='$username'");
	
	$row = mysql_fetch_row($ql);
$learndsa[$i] = $row[0];
}
$sqlc = mysql_query("delete from learningsuggestion WHERE username='$username'");

					

//learning suggestionoops
for($b=1;$b<=$count;$b++)
{
if($learnoops[$b]<=2)
{
	$sqlc = mysql_query("SELECT learningmaterial FROM oopslearning WHERE category=$b");
$rowq = mysql_fetch_row($sqlc);
	$sql=$rowq[0];
	$sq=mysql_real_escape_string($sql);
	
$coun=mysql_query("SELECT count(*) FROM learningsuggestion where username='$username'");
$rowc = mysql_fetch_row($coun);
	$counter=$rowc[0];
$counter++;
$result=mysql_query("INSERT INTO learningsuggestion(number,learningmaterial,username,subject) VALUES('$counter','$sq','$username','oops')");
	
}
}

for($b=1;$b<=$countd;$b++)
{
if($learndbms[$b]<=2)
{
	$sqlc = mysql_query("SELECT learningmaterial FROM dbmslearning WHERE category=$b");
$rowq = mysql_fetch_row($sqlc);
	$sql=$rowq[0];
	$sq=mysql_real_escape_string($sql);
$coun=mysql_query("SELECT count(*) FROM learningsuggestion where username='$username'");
$rowc = mysql_fetch_row($coun);
	$counter=$rowc[0];
$counter++;
$result=mysql_query("INSERT INTO learningsuggestion(number,learningmaterial,username,subject) VALUES('$counter','$sq','$username','dbms')");
  
}
}

for($b=1;$b<=$countsa;$b++)
{
if($learndsa[$b]<=2)
{
	$sqlc = mysql_query("SELECT learningmaterial FROM dsalearning WHERE category=$b");
$rowq = mysql_fetch_row($sqlc);
	$sql=$rowq[0];
	$sq=mysql_real_escape_string($sql);
$coun=mysql_query("SELECT count(*) FROM learningsuggestion where username='$username'");
$rowc = mysql_fetch_row($coun);
	$counter=$rowc[0];
$counter++;
$result=mysql_query("INSERT INTO learningsuggestion(number,learningmaterial,username,subject) VALUES('$counter','$sq','$username','dsa')");
  
}
}

$logina=mysql_query("select logincount from users where email='$username'");	
		
					$row = mysql_fetch_row($logina);
					$login = $row[0];	
					
					$log=$login-1;
					$sqlc = mysql_query("delete from learningsuggestion WHERE subject='software' and username='$username'")or die(mysql_error());
				
					$sqlc = mysql_query("SELECT learningmaterial FROM swlearning WHERE category=$log");
					$rowq = mysql_fetch_row($sqlc);
					$sql=$rowq[0];
					
					$sq=mysql_real_escape_string($sql);
					$coun=mysql_query("SELECT count(*) FROM learningsuggestion where username='$username'");
					$rowc = mysql_fetch_row($coun);
					$counter=$rowc[0];
					
					$counter++;
					$result=mysql_query("INSERT INTO learningsuggestion(number,learningmaterial,username,subject) VALUES('$counter','$sq','$username','software')");

				



 ?>