<!DOCTYPE html>
<html>
<head>
	<title>list</title>
	<style type="text/css">
		body {
			margin:0 auto;
			text-align: center;
			margin-top: 100px;
		}
		table {
			margin:0 auto;
			text-align: center;
		}
	</style>
</head>
<body>
<h1>HELLO , Laraveler !</h1>
<form action="add" method="post">
	<input type="text" name="title"></input>
	<input type="hidden" name="status" value="0"></input>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"></input>
	<input type="submit" value="提交"></input>
</form>
<table>
<?php 
	foreach ($users as $key => $value) {
		# code...
?>
	<tr>
		<td><?php echo $value->title;?></td>
		<td><a href="update?id=<?php echo $value->id;?>">修改</a></td>
		<td><a href="delete?id=<?php echo $value->id;?>">删除</a></td>
	</tr>
<?php
	}
?>
</table>



</body>
</html>