<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insert title here</title>
</head>

<body>
<div align="center">

<?php
	include 'connection.php';

	$sql ="select * from stuff_room where stuff_name=".$_GET[stuffId]." "; 
	echo "sql:".$sql;
	$result = mysql_query($sql); 

	if(!$sql){
		printf("error:sql");
	} else if(!$result){
		printf("error:result");
	}

	if($row = mysql_fetch_array($result)){
?>
	<form action="update.php" method="post">
		<h3>add info</h3>
		stuff_id：<input type="text" name="stuffId" value="<?php echo $row[stuff_id]?>"/> <br/>
		stuff_name：<input type="text" name="stuffName" value="<?php echo $row[stuff_name]?>"/> <br/>
		stuff_type：<input type="text" name="stuffType" value="<?php echo $row[stuff_type]?>"/><br/>
		stuff_location：<input type="text" name="stuffLocation" value="<?php echo $row[stuff_location]?>"/><br/>
		<input type="submit"  value="change info" />
	</form>

<?php }?>
</div>
</body>
</html>