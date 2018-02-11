<!DOCTYPE HTML>


<html>
	<head>
	
			
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
			<script>
function myFunction() {
    var x;
    x = document.forms["myForm"]["exp"].value;
    if (isNaN(x) || x < 0 || x > 70) 
       { alert("Work Experience invalid");}
	  else return false;
}
function check()
{
	  var y;
	   y = document.forms["myForm"]["age"].value;
    if (isNaN(y) || y < 1 || y > 80) 
       { alert("Invalid field: Age");}else return false;
	 
}
	   function change()
	   {
	   
		  if(document.forms["myForm"]["password"].value != document.forms["myForm"]["confirm_password"].value) {
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
		<form style= "padding-left: 100px;padding-right: 100px;" name="myForm" method="post" action="StoreData.php">
		<ol><li><h3><b>Enter first name:*</h3></b></li>
		<p><input type="text" name="firstname" required >
		<h3><b><li>Enter last name:*</b></h3></li>
		<input type="text" name="Lastname" required ><br>
		<h3><b><li>Age</b></h3></li>
		<input type="text" name="age" onchange="return check()"><br>
		<h3><b><li>Gender*:</b></h3></li>
		<input type="radio" name="gender" value="male" required > Male
		<input type="radio" name="gender" value="female" required > Female
		<input type="radio" name="gender" value="other" required > Other<br><br>
		<h3><b><li>Email-ID</b></h3></li>
		<input type="text" name="mail" ><br>
		<h3><b><li>Contact number</b></h3></li>
		<input type="text" name="num" ><br>
		<h3><b><li>Enter Password*</b></h3></li>
		<input type="password" name="password" id="password" >
		<h3><b><li>Confirm Password*</b></h3></li>
		<input type="password" name="confirm_password" id="confirm_password" onchange="change()" >
		<h3><b><li>Enter the highest degree obtained:*</b></h3></li>
		<select name="degree">
		<option value="Masters " required>Masters</option>
		<option value="Bachelors" required>Bachelors</option>
		<option value="Professional" required>Professional degree</option>
		<option value="None" required>No degree obtained </option>
		</select></p>
		<h3><b><li>Check the Technology that you are proficient in:</b></h3></li>
		<input type="checkbox" name="spec[]" value="tc" >C/C++<br>
		<input type="checkbox" name="spec[]" value="java" >Java<br>
		<input type="checkbox" name="spec[]" value="sql" >SQL<br>
		<input type="checkbox" name="spec[]" value="html" >HTML<br>
		<input type="checkbox" name="spec[]" value="python" >PYTHON<br>
		<input type="checkbox" name="spec[]" value="js" >JavaScript<br>
		<input type="checkbox" name="spec[]" value="ios" >IOS<br>
		<input type="checkbox" name="spec[]" value="android" >Android<br>
		<input type="checkbox" name="spec[]" value="ruby" >Ruby/Rails<br>
		<input type="checkbox" name="spec[]" value="node/ang" >NodeJS/AngularJS<br>
		<input type="checkbox" name="spec[]" value="php" >PHP<br>
		<input type="checkbox" name="spec[]" value="csharp" >C Sharp<br>
		<input type="checkbox" name="spec[]" value="embc" >Embedded C<br>
		<input type="checkbox" name="spec[]" value="matlab" >MATLAB<br>
		
		<input type="checkbox" name="spec[]" value="cloud" >Cloud Computing<br><br>
		<h3><b><li>Which type.03 of Company do you Prefer?*</b></h3></li>
		<input type="radio" name="comp" value="prod" required > Product
		<input type="radio" name="comp" value="service" required > Service
		<input type="radio" name="comp" value="both" required > Both <br><br>
		<h3><b><li>Preferred Salary Range*</b></h3></li>
		<input type="radio" name="sal" value="20" required >Below 25K
		<input type="radio" name="sal" value="25" required >Above 25K
		<input type="radio" name="sal" value="50" required >Above 50K
		<input type="radio" name="sal" value="75" required >Above 75K
		<input type="radio" name="sal" value="any" required >Any<br><br>
		<h3><b><li>Previous college institutions</b></h3></li>
		<input type="text" name="coll" ><br>
		<h3><b><li>Previous work experience(in years)*</b></h3></li>
		<input type="text" name="exp" onchange="return myFunction()" required ><br>
		<h3><b><li>Companies worked previously(if any)</b></h3></li>
		<textarea rows="4" cols="50" name="precomp" ></textarea>
		
		<input type="submit" name= "submit" value="Submit" class="button special" >
		<input type="reset" value="reset" class="button special" />
	
		
	
		
		
		
</form>

	</body>
</html>