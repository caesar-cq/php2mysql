<?php
error_reporting(0);
include'connection.php';
$stuffId = $_GET['stuffId'];
$mode = $_GET['mode'];

$sql = "delete from stuff_room where stuff_id= ".$stuffId." ";

mysql_query($sql); 

$mark = mysql_affected_rows();

if($mark>0){
	echo  "success";
}else{
	echo  "failed";
}

mysql_close($con);
?>
<a href="stuffinfo_select.php?mode=<?php echo $mode?>">返回</a>