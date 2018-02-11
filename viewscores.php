<html>
<body>
<table border="1" width="80%">

<?php
			$id =$_REQUEST['email'];
			include("db.php");
			
				
			$result=mysql_query("SELECT * FROM score where username=$id");
			echo "<tr><th>Score obtained</th><th>Category</th><th>Subject</th></tr>";
			
			while($test = mysql_fetch_array($result))
			{
				echo "<tr align='center'>";	
			    echo"<td><font color='black'>" .$test['scores']."</font></td>";
				echo"<td><font color='black'>" .$test['category']."</font></td>";
				echo"<td><font color='black'>". $test['subject']. "</font></td>";
			}
			?>
			</table>
			</body>
			</html>