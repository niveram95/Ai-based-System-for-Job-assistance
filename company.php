<!DOCTYPE HTML>


<html>
	<head>
	
			
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
			<script>



	   function change()
	   {
	   
		  if(document.forms["Form"]["password"].value != document.forms["Form"]["confirm_password"].value) {
       alert("Passwords don't match");}else return false;
    } 
    

 /*   function Upload() {
        var fileUpload = document.getElementById("fileUpload");
        if (typeof (fileUpload.files) != "undefined") {
            var size = parseFloat(fileUpload.files[0].size / 1024).toFixed(2);
            if(size>500)alert("Upload within 500KB")
        } else return fail;
        
    } */

</script>
		
		
	</head>
	<body>
<br><h1 style= "padding-left: 100px;padding-right: 100px;"> ENTER THE FOLLOWING DETAILS</h1><hr>
		<form style= "padding-left: 100px;padding-right: 100px;" name="Form" method="post" action="Storecomp.php">
		<ol><li><h3><b>Enter Name of the Company:*</h3></b></li>
		<p><input type="text" name="name" required >
		<h3><b><li>Contact Email-ID</b></h3></li>
		<input type="text" name="mail" ><br>
		<h3><b><li>Contact number</b></h3></li>
		<input type="text" name="num" ><br>
		<h3><b><li>Enter Password*</b></h3></li>
		<input type="password" name="password" id="password" >
		<h3><b><li>Confirm Password*</b></h3></li>
		<input type="password" name="confirm_password" id="confirm_password" onchange="change()" >
		<h3><b><li>Enter Location of Company(City)
		</b></h3></li>
		<input type="text" name="location" ><br>
	
		<h3><b><li>Enter Work Domain of the job vacancy</b></h3></li>
		<input type="checkbox" name="spec[]" value="software" >Software Development<br>
		<input type="checkbox" name="spec[]" value="sysadmin" >System Administration<br>
		<input type="checkbox" name="spec[]" value="network" >Network Administration<br>
		<input type="checkbox" name="spec[]" value="tech" >Tech Support<br>
		<input type="checkbox" name="spec[]" value="hardware" >Hardware Engineering<br>
		<input type="checkbox" name="spec[]" value="webdev" >Web Development<br><br>
		
		<h3><b><li>Enter the type of Company</b></h3></li>
		<input type="radio" name="comp" value="prod" required > Product
		<input type="radio" name="comp" value="service" required > Service
		<input type="radio" name="comp" value="both" required > Both <br><br>
		<h3><b><li>Position of the Job availability</b></h3></li>
		<input type="text" name="job" ><br>
		<h3><b><li>Number of Positions available</b></h3></li>
		<input type="text" name="pos" ><br>
		<h3><b><li>Check the required area of expertise</b></h3></li>
		<input type="checkbox" name="exp[]" value="sw" >Software Engineering<br>
		<input type="checkbox" name="exp[]" value="dbms" >Database Management Systems<br>
		<input type="checkbox" name="exp[]" value="oops" >Object Oriented Programming<br>
		<input type="checkbox" name="exp[]" value="dsa" >Data Structures<br><br>
		<h3><b><li>Compensation per annum</b></h3></li>
		<input type="text" name="salary" ><br>
		<h3><b><li>Enter the preferred Competency score range</b></h3></li>
		
		<input type="radio" name="score" value="50a" required >Above 50
		<input type="radio" name="score" value="60a" required >Above 60
		<input type="radio" name="score" value="70a" required >Above 70
		<input type="radio" name="score" value="80a" required >Above 80
		<input type="radio" name="score" value="90a" required >Above 90
		<br>
		<h3><b><li>Enter Application deadline</b></h3></li>
		<input type="date" name="dead" ><br><br>
		<input type="submit" name= "submit" value="Submit" class="button special" >
		<input type="reset" value="reset" class="button special" />
	
		
	
		
		
		
</form>

	</body>
</html>