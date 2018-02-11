
<?php

$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server
header('Content-type: text/html; charset=utf-8');
//mysqli_set_charset($connection, "utf8");
$category='';
$score=1;
?>

<!DOCTYPE html>
<html>
<head>
<link href="Content/bootstrap.min.css" rel="stylesheet" />
<title>quiz</title>
 <link rel="stylesheet" href="stylesheet.css" type="text/css">
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script> 
</head>
 <script type="text/javascript" src="script.js"></script>
 <body>
 <div class="jumbotron" style="background-image: url(ijk.jpg); background-size: 100%">
        <div class="container">
            <h2 style="color:#ffffff">Welcome, lets open the door of opportunities!</h2>
            <p style="color:#ffffff">We Nurture and provide you, your seed of success .</p>
        </div>
    </div> 
<div class="container">
        <div class="row">
            <div class="col-md-offset-2"> 
<h2 class="quizHeader">Take a Quiz!</h2>

  <table style="wqnoth:583px">
    <tr>
      <td>
        <div>
		<form class="form-horizontal" role="form" qno='login' method="post" action="result.php">
		<?php session_start();
		$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
//$db = mysql_select_db("oops", $connection); // Selecting Database from Server
		
			$username=$_SESSION['mail'];
			$_SESSION["username"]=$username;
			
			
			$login=$_SESSION["log"];
			
			
			if($login%"3"==1)
				$table="oops";
			else if($login%3==2)
				$table="dsa";
			else
				$table="dbms";
			$_SESSION["table"]=$table;
			if($table=="dsa")
			{if ($login>=1 and $login<=3) $cat=1;
			else if ($login>=4 and $login<=6) $cat=2;
					else if ($login>=7 and $login<=9) $cat=3;
					else if ($login>=10 and $login<=12) $cat=4;
					else if ($login>=13 and $login<=15) $cat=5;
					else if ($login>=16 and $login<=18) $cat=6;
					else if ($login>=19 and $login<=21) $cat=7;
					else if ($login>=22 and $login<=24) $cat=8;
					else if ($login>=25 and $login<=27) $cat=9;
					else if ($login>=28 and $login<=30) $cat=10;
					else if ($login>=31 and $login<=33) $cat=11;
					else if ($login>=34 and $login<=36) $cat=12;
					else if ($login>=37 and $login<=39) $cat=13;
					else if ($login>=40 and $login<=42) $cat=14;
					else if ($login>=43 and $login<=45) $cat=15;
					else $cat=16;
			}
			else if($table=="dbms")
			{if ($login>=1 and $login<=3) $cat=1;
			else if ($login>=4 and $login<=6) $cat=2;
					else if ($login>=7 and $login<=9) $cat=3;
					else if ($login>=10 and $login<=12) $cat=4;
					else if ($login>=13 and $login<=15) $cat=5;
					else if ($login>=16 and $login<=18) $cat=6;
					else if ($login>=19 and $login<=21) $cat=7;
					else if ($login>=22 and $login<=24) $cat=8;
					else if ($login>=25 and $login<=27) $cat=9;
					else if ($login>=28 and $login<=30) $cat=10;
					else if ($login>=31 and $login<=33) $cat=11;
					else if ($login>=34 and $login<=36) $cat=12;
					else if ($login>=37 and $login<=39) $cat=13;
					else if ($login>=40 and $login<=42) $cat=14;
					else if ($login>=43 and $login<=45) $cat=15;
					else if ($login>=43 and $login<=45) $cat=16;
					else if ($login>=43 and $login<=45) $cat=17;
					else if ($login>=43 and $login<=45) $cat=18;
					else $cat=19;
			}
			else if($table=="oops")
			{if ($login>=1 and $login<=3) $cat=1;
			else if ($login>=4 and $login<=6) $cat=2;
					else if ($login>=7 and $login<=9) $cat=3;
					else if ($login>=10 and $login<=12) $cat=4;
					else if ($login>=13 and $login<=15) $cat=5;
					else if ($login>=16 and $login<=18) $cat=6;
					else if ($login>=19 and $login<=21) $cat=7;
					else if ($login>=22 and $login<=24) $cat=8;
					else if ($login>=25 and $login<=27) $cat=9;
					else if ($login>=28 and $login<=30) $cat=10;
			else $cat=11;
			}
			else{}
					$_SESSION["mail"]=$username;
					$_SESSION["cat"]=$cat;
					$_SESSION["table"]=$table;
					/*$quest=mysql_query("select question from '$table' where category='$cat'");
					echo $quest;

					
			$opone=mysql_query("select firstoption from $table where category='$cat'");
			$optwo=mysql_query("select secondoption from $table where category='$cat'");
			$opthree=mysql_query("select thirdoption from $table where category='$cat'");
			$opfour=mysql_query("select fourthoption from $table where category='$cat'");*/	
		
					$res = mysql_query("select * from $table where category='$cat' ORDER BY RAND()") or die(mysql_error());
                    $rows = mysql_num_rows($res);
					$i=1;$score=0;
					while($result=mysql_fetch_array($res)){?>

                    
                    <div qno='question<?php echo $i;?>' class='cont'>
                    <p class='questions' qno="qname<?php echo $i;?>"> <?php echo $i?>.<?php echo $result['question'];?></p>
                    <?php $c="ab".$i;?>
					<input type="radio" value="1" required name="<?php echo $c?>" qno='radio1_<?php echo $result['qno'];?>'/><?php echo $result['firstoption'];?>
                   <br/>
                    <input type="radio" value="2" required name="<?php echo $c?>" qno='radio1_<?php echo $result['qno'];?>'/><?php echo $result['secondoption'];?>
                    <br/>
                    <input type="radio" value="3" required name="<?php echo $c?>" qno='radio1_<?php echo $result['qno'];?>' /><?php echo $result['thirdoption'];?>
                    <br/>
                    <input type="radio" value="4" required name="<?php echo $c?>" qno='radio1_<?php echo $result['qno'];?>' /><?php echo $result['fourthoption'];?>
                    <br/>
					
					
                    
                    </div>     

					<?php $p[$i]=$result['firstoption'];$q[$i]=$result['secondoption'];$r[$i]=$result['thirdoption'];$s[$i]=$result['fourthoption'];
					$z[$i]=$result['correctoption']; 					$i++;} ?> 
					<?php $_SESSION["correct"]=$z;
					$_SESSION["first"]=$p;
					$_SESSION["second"]=$q;
					$_SESSION["third"]=$r;
					$_SESSION["fourth"]=$s;?>
					<center> <input type="submit" value="Submit" name="sub"> </center>
					<center> <a href="interface.html"> <span class="glyphicon glyphicon-home"> Home </span> </a> </center>
					<center> <a href="index1.html><span class="glyphicon glyphicon-step-backward" > leave </span> </a>
				</form>
		
</div>
</div>
</div>		
	
<?php mysql_close($connection); ?>
</body>
</html>