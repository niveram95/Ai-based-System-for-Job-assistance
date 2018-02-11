<html>
<body>
<table border="1">

<?php
			$id =$_REQUEST['email'];
			include("db.php");
			
				
			$result=mysql_query("SELECT * FROM score where username=$id");
			
			
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