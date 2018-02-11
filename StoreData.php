
<?php
header('Content-type: text/plain; charset=utf-8');
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server
//mysqli_set_charset($connection, "utf8");
if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
$firstname = $_POST['firstname'];
$Lastname = $_POST['Lastname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['mail'];
$num = $_POST['num'];
$password = $_POST['password'];

if(!empty($_POST['spec']))
{

$x=1;$a=NULL;$b=NULL;$c=NULL;$d=NULL;$e=NULL;
foreach($_POST['spec'] as $selected)
{


if($x==1)
	$a=$selected;
 //$query =mysql_query("INSERT INTO users(skillml) values('$selected')");
elseif($x==2)
$b=$selected;
 //$query =mysql_query("INSERT INTO users(skilldb) values('$selected')");
 elseif($x==3)
 $c=$selected;
 //$query =mysql_query("INSERT INTO users(skillos) values('$selected')");
 elseif($x==4)
 $d=$selected;
 elseif($x==5)
 $e=$selected;
 elseif($x==6)
 $f=$selected;
 elseif($x==7)
 $g=$selected;
 elseif($x==8)
 $h=$selected;
 elseif($x==9)
 $i=$selected;
 elseif($x==10)
 $j=$selected;
 elseif($x==11)
 $k=$selected;
 elseif($x==12)
 $l=$selected;
 elseif($x==13)
 $m=$selected;
 elseif($x==14)
 $n=$selected;
 //$query =mysql_query("INSERT INTO users(skillds) values('$selected')");
 else
	 $o=$selected;
$x++;
}
 

}
$degree = $_POST['degree'];

		//}
//if(!empty($_POST['degree'])){
//    $sql=mysql_query("Insert into users(degree) values('$_POST['degree']')");
//}
$sal = $_POST['sal'];
//$degree = $_POST['degree'];



$comp = $_POST['comp'];
$coll = $_POST['coll'];
$exp = $_POST['exp'];
//$precomp = $_POST['precomp'];

$datetime = date_create()->format('Y-m-d H:i:s');
$count=mysql_query("SELECT COUNT(*) from users");
$count++;
//Insert Query of SQL
 $query =mysql_query("INSERT INTO users(sno,name, email,lastname,age,gender,contact,password,degree,skill1,skill2,skill3,skill4,skill5,skill6,skill7,skill8,skill9,skill10,skill11,skill12,skill13,skill14,skill15,company,salary,college,workexp,date)
 values ('$count','$firstname', '$email','$Lastname', '$age', '$gender', '$num', '$password','$degree','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$comp','$sal', '$coll','$exp','$datetime')");
header('Location: success.html'); 

//else{
//echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
//}
}


mysql_close($connection); // Closing Connection with Server
?>