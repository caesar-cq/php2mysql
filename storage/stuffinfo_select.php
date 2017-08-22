<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
error_reporting(0);
$mode = $_GET['mode'];
if($mode == "out"){
	$type = "出库";
	echo "<title>$type</title>";
} else if($mode == "in"){
	$type = "入库";
	echo "<title>$type</title>";
}
?> 
</head>
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

<div  align="center">
	&nbsp;
	<table align="center" width="70%" class="hovertable">
		<tr>
			<th>编号</th>
			<th>物品名</th>
			<th><?php echo "$type";?></th>
			<th>地点</th>
			<th>操作</th>
		</tr>
		<?php 
		include 'connection.php';
		$sql= "select * from stuff_room";
		$result =  mysql_query($sql);
		while($row=mysql_fetch_array($result)){
			$i = $row[stuff_id];
			if($row[stuff_type] == $mode){
		?>
			 <tr onmouseover="this.style.backgroundColor='#ffff66'";
					onmouseout="this.style.backgroundColor='#d4e3e5'";>
				<td><?php echo $row[stuff_id] ?></td>
				<td><?php echo $row[stuff_name] ?></td>
				<td><?php echo $row[stuff_type] ?></td>
				<td><?php echo $row[stuff_location] ?></td>
				<td><a href="stuffinfo_update.php?stuffId=<?php echo $row[stuff_id] ?>">修改</a>
				<a href="delete.php?stuffId=<?php echo $row[stuff_id]?>&mode=<?php echo $mode?>">删除</a>
				</td>
			</tr>
		<?php
			}
			else{
				continue;
			}
		}
		?>
	</table>
	<table>
	<tr>  
		&nbsp;
		<td>
		 <button class="btn btn-primary btn-small" data-toggle="modal" data-target="#myModal" style="margin-left:780px;">添加</button>
		 <a href="javascript:location.reload();"><input type="submit" value="查询" class= "btn btn-primary btn-small"/></a>
		<a href="../index.php"><input  type="submit" value="返回" class= "btn btn-primary btn-small"/></a>
		</td>
	</tr>
	</table>
</div>


<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					信息添加
				</h4>
			</div>
			<div class="modal-body">
				<form action="stuffinfo_insert.php?mode=<?php echo $mode ?>" method="post">
					<h3></h3>
					<label for="sid">记录编号：  </label><br>
					<input type="text" name="stuffId" id="sid" value="<?php echo $i+1; ?>" /> <br/>
					<label for="sname">货品名称：</label><br>
					<input type="text" name="stuffName" id="sname"/><br/>
					<label for="stype">进 / 出库：</label><br>
					<input type="text" name="stuffType" id="stype" value="<?php echo $mode; ?>"/><br/>
					<label for="sloc">货品地点：  </label><br>
					<input type="text" name="stuffLocation" id="slo"/><br/>
					<br>
					<input type="submit"  value="添加任务" class="btn btn-primary btn-small"/>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
			</div>
		</div><!-- /.modal-content -->
	</form>
	</div><!-- /.modal -->
</div>

</body>
</html>