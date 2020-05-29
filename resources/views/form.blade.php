<!doctype html>
<html>
<head>
	<title>表单</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="/insert" method="post">
		用户名:<input type="text" name="name"><br>
		密码:<input type="password" name="password"><br>
		{{csrf_field()}}
		<input type="submit" value="提交">
	</form>
</body>
</html>