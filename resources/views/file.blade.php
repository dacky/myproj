<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/upload" method="post" enctype="multipart/form-data">
		     {{ csrf_field() }}
	<label for="file">Filename:</label>
	<input type="file" name="file" id="file" /> 
	<br />
	<input type="submit" name="submit" value="Submit" />
	</form>
</body>
</html>