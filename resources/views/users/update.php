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
<form action="update" method="post">
	<input type="text" name="title"></input>
	<input type="hidden" name="id" value="<?php echo $id;?>"></input>
	<input type="hidden" name="status" value="1"></input>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"></input>
	<input type="submit" value="修改"></input>
</form>

</body>
</html>