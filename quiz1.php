
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server
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

echo "<p>".$selected ."</p>";
if($x==1)
	$a=$selected;
 //$query =mysql_query("INSERT INTO users(specml) values('$selected')");
elseif($x==2)
$b=$selected;
 //$query =mysql_query("INSERT INTO users(specdb) values('$selected')");
 elseif($x==3)
 $c=$selected;
 //$query =mysql_query("INSERT INTO users(specos) values('$selected')");
 elseif($x==4)
 $d=$selected;
 //$query =mysql_query("INSERT INTO users(specds) values('$selected')");
 else
	 $e=$selected;
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

//Insert Query of SQL
 $query =mysql_query("INSERT INTO users(name, email,lastname,age,gender,contact,password,degree,spec1,spec2,spec3,spec4,spec5,company,salary,college,workexp,date)
 values ('$firstname', '$email','$Lastname', '$age', '$gender', '$num', '$password','$degree','$a','$b','$c','$d','$e', '$comp','$sal', '$coll','$exp','$datetime')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";

//else{
//echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
//}
}
mysql_close($connection); // Closing Connection with Server
?>