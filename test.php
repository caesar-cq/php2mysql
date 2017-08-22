<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<style>
    td{width:100px;}
    th{background: #22AAFF; text-align: left;color: #fff;;}
</style>
<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.hovertable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
}
table.hovertable th {
	background-color:#c3dde0;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable tr {
	background-color:#d4e3e5;
}
table.hovertable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
</style>
<body>
<div align="center">
<?php 
	error_reporting(0);
    header("Content-Type:text/html;charset=utf8"); 
	DEFINE('DB_USER','root');
	DEFINE('DB_PASSWORD','root');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_NAME','warehousedb');
	$mysql = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	$db_selected = mysql_select_db(DB_NAME);
	
	if (!$db_selected)
	{
	  	die ("Can't use warehousedb : " . mysql_error());
	}
	mysql_query("set names 'utf8'");

	$sql ="select * from stuff_room "; 
	$result = mysql_query($sql); 

	if(!$sql){
		printf("error:sql");
	} else if(!$result){
		printf("error:result");
	}
	echo "<table class='hovertable'>
			<tr>
			<th>stuff_id</th><th>stuff_name</th><th>stuff_type</th><th>stuff_location</th>
			</tr>
		 ";
	while($row = mysql_fetch_array($result))
	{
		echo "<tr onmouseover=this.style.backgroundColor='#ffff66';
					onmouseout=this.style.backgroundColor='#d4e3e5';>"; 
		echo "<td>".$row['stuff_id'] ."</td>" ;
		echo "<td>".$row['stuff_name'] ."</td>" ;
		echo "<td>".$row['stuff_type'] ."</td>" ;
		echo "<td>".$row['stuff_location'] ."</td>" ;
		echo "</tr>"; 
	}
	echo "</table>";
?>
</body>