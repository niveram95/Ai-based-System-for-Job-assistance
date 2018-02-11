<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){
if(!empty($_POST['spec'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['spec']);
//echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
$x=1;
foreach($_POST['spec'] as $selected) {
echo "<p>".$selected ."</p>";
if($x==1)
 $query =mysql_query("INSERT INTO users(specml) values('$selected')");
elseif($x==2)
 $query =mysql_query("INSERT INTO users(specdb) values('$selected')");
 elseif($x==3)
 $query =mysql_query("INSERT INTO users(specos) values('$selected')");
 elseif($x==4)
 $query =mysql_query("INSERT INTO users(specds) values('$selected')");
 else
 $query =mysql_query("INSERT INTO users(specpl) values('$selected')");
$x++;
 
}

}
mysql_close($connection); // Closing Connection with Server
?>