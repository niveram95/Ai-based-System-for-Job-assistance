<?php 
$filename="oopslearning.jpg";
$imgData = file_get_contents($filename);
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server$imgData = file_get_contents($filename);
$size = getimagesize($filename);

// mysqli 
// $link = mysqli_connect("localhost", $username, $password,$dbname); 
$sql = sprintf("INSERT INTO testblob
    (image_type, image, image_size)
    VALUES
    ('%s', '%s', '%d')",
    /***
     * For all mysqli_ functions below, the syntax is:
     * mysqli_whartever($link, $functionContents); 
     ***/
    mysql_real_escape_string($size['mime']),
    mysql_real_escape_string($imgData),
    $size[3]
    );
mysql_query($sql);?>