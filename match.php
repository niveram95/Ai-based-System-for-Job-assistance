<?php

$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db", $connection); // Selecting Database from Server

$sql=mysql_query("SELECT COUNT(*) FROM users");
$row = mysql_fetch_row($sql);
$countusers=$row[0];
$sql=mysql_query("SELECT COUNT(*) FROM job");
$row = mysql_fetch_row($sql);
$countcompany=$row[0];
$resjob=mysql_query("select * from job") or die(mysql_error());
$sq=mysql_query("TRUNCATE TABLE  matching") or die(mysql_error());

$flag=0;$counter=0;
$qualified=0;
$score=0;
$resultarray=array_fill(0, 24, 0);
while($result=mysql_fetch_array($resjob))
{
		$checker=mysql_query("select company from matching") or die(mysql_error());
		$resuser=mysql_query("select * from userjob order by TPFP DESC") or die(mysql_error());
	$counter=0;
	$resultarray=array_fill(0, 24, 0);
	while($res=mysql_fetch_array($checker))
	{if($res['company']==$result['Name']){$flag=1;break;}
	}
if($flag==1)continue;
else
{
		
		$sw=0;$dsa=0;$oops=0;$dbms=0;
		if(($result['spec1']=="sw")||($result['spec2']=="sw")||($result['spec3']=="sw")||($result['spec4']=="sw"))$sw=1;
		if(($result['spec1']=="os")||($result['spec2']=="os")||($result['spec3']=="os")||($result['spec4']=="os"))$oops=1;
		if(($result['spec1']=="dsa")||($result['spec2']=="dsa")||($result['spec3']=="dsa")||($result['spec4']=="dsa"))$dsa=1;
		if(($result['spec1']=="dbms")||($result['spec2']=="dbms")||($result['spec3']=="dbms")||($result['spec4']=="dbms"))$dbms=1;
		while($user=mysql_fetch_array($resuser))
		{$score=0;
			$checksw=0;$checkoops=0;$checkdsa=0;$checkdbms=0;
			if($result['scorerange']=="50a"){if($user['TPFP']>=50)$score=1;}
		else if($result['scorerange']=="60a"){if($user['TPFP']>=60)$score=1;}
		else if($result['scorerange']=="70a"){if($user['TPFP']>=70)$score=1;}
		else if($result['scorerange']=="80a"){if($user['TPFP']>=80)$score=1;}
		else if($result['scorerange']=="90a"){if($user['TPFP']>=90)$score=1;}
		else{}
		//echo "score";echo $score;
		
			if($user['Expertise_oops']!=NULL)$checkoops=1;
			if($user['Expertise_dbms']!=NULL)$checkdbms=1;
			if($user['Expertise_dsa']!=NULL)$checkdsa=1;
			if($user['Expertise_sw']!=NULL)$checksw=1;
			
			if(($checkdbms>=$dbms)&&($checksw>=$sw)&&($checkdsa>=$dsa)&&($checkoops>=$oops))
			{$qualified=1;}
			else{$qualified=0;}
			//echo "qualified";echo $qualified;
			
			if(($score==1)&&($qualified==1))
			{
				$resultarray[$counter]=$user['username'];
				$counter++;
			}
			
			
		}
		
		$sql=mysql_query("SELECT COUNT(*) FROM matching");
$row = mysql_fetch_row($sql);
$count=$row[0];$count++;
		$checkcount=0;
		$name=$result['Name'];
		?><br><?php 
		

		$sql=mysql_query("INSERT INTO matching(sno,company,user1,user2,user3,user4,user5,user6,user7,user8,user9,user10,user11,user12,
user13,user14,user15,user16,user17,user18,user19,user20,user21,user22,user23,user24)VALUES('$count','$name',
'$resultarray[0]','$resultarray[1]','$resultarray[2]','$resultarray[3]','$resultarray[4]','$resultarray[5]','$resultarray[6]',
'$resultarray[7]','$resultarray[8]','$resultarray[9]','$resultarray[10]','$resultarray[11]','$resultarray[12]','$resultarray[13]',
'$resultarray[14]','$resultarray[15]','$resultarray[16]','$resultarray[17]','$resultarray[18]','$resultarray[19]','$resultarray[20]',
'$resultarray[21]','$resultarray[22]','$resultarray[23]')");
continue;
				
		
}

}			
?>