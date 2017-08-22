
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
error_reporting(0);
//echo $_POST["stuffId"]; 
$mode = $_GET[mode];
$stuffId = $_POST[stuffId];
$stuffName = $_POST[stuffName];
$stuffType = $_POST[stuffType];
$stuffLocation = $_POST[stuffLocation];

if($stuffName != null){
	echo "\n";
	echo "货品编号：".$stuffId."<br/>";
	echo "货品名称：".$stuffName."<br/>";
	echo "进/ 出库：".$stuffType."<br/>";
	echo "货品地点：".$stuffLocation."<br/>";
	include 'connection.php';
	$sql = "insert into stuff_room (stuff_id,stuff_name,stuff_type,stuff_location)  values('$stuffId','$stuffName','$stuffType','$stuffLocation')";

	if (!mysql_query($sql))
	{
		die('Error: ' . mysql_error());
	}
	echo "添加一条记录";

	//关闭连接
	mysql_close($con);
} 
?>
<a href="stuffinfo_select.php?mode=<?php echo $mode ?>">返回</a>