<html>
<body>
<table border="1">

<?php
			$id =$_REQUEST['email'];
			include("db.php");
			$a=NULL;
				
			$result=mysql_query("SELECT * FROM userjob where username=$id");
			
			echo "<tr><th>Expertise</th><th>Total Profile Score</th><th>Total profile score percentage</th></tr>";
			while($test = mysql_fetch_array($result))
			{
					echo "<tr align='center'>";	if($test['Expertise_oops']!=NULL) $a=$test['Expertise_oops'];
					if($test['Expertise_dbms']!=NULL) $a=$a.",".$test['Expertise_dbms'];
					if($test['Expertise_dsa']!=NULL) $a=$a.",".$test['Expertise_dsa'];
					if($test['Expertise_sw']!=NULL) $a=$a.",".$test['Expertise_sw'];
			    echo"<td><font color='black'>" .$a."</font></td>";
				echo"<td><font color='black'>" .$test['Total_Score']."</font></td>";
				echo"<td><font color='black'>". $test['TPFP']. "</font></td>";
			}
			?>
			</table>
			</body>
			</html>