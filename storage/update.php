<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insert title here</title>
</head>
<body>
<script type="text/javascript">
<?php 
	$stuffId = $_POST[stuffId];
	$stuffName = $_POST[stuffName];
	$stuffType = $_POST[stuffType];
	$stuffLocation = $_POST[stuffLocation];

	$conn = mysql_connect("localhost","root","root");

	mysql_query("set names 'utf8'");

	//connect db
	mysql_select_db("warehousedb");

	$sql = "update stuff_room set stuff_name='".$stuffName."',stuff_type='".$stuffType."',stuff_location=".$stuffLocation." where stuff_id='".$stuffId."'";
	mysql_query($sql);
	$mark  = mysql_affected_rows();//返回影响行数
	$url = "stuffinfo_select.php";  

	if($mark>0){
		
		echo  "alert('修改成功')";
		
		
	}else{
		echo  "alert('修改失败')";
	}

	mysql_close($conn);

	?>
	window.location= "stuffinfo_select.php";
</script>
</body>
</html>
