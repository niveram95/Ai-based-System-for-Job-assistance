<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server
if(isset($_FILES['upload{
    // Make sure the file was sent without errors
    if($_FILES['resume']['error'] == 0) {
        // Connect to the database
        $dbLink = new mysqli('127.0.0.1', 'user', 'pwd', 'myTable');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['resume']['name']);
        $mime = $dbLink->real_escape_string($_FILES['resume']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['resume']['tmp_name']));
        $size = intval($_FILES['resume']['size']);
 
        // Create the SQL query
        $query = "
            INSERT INTO `users` ('resume)
            VALUES ('$data')";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
        if($result) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['resume']['error']);
    }
 
    // Close the mysql connection
    $dbLink->close();
}
else {
    echo 'Error! A file was not sent!';
}
 

?>