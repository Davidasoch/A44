<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personalizacion</title>
</head>
<body>
	<h1>{{$lang}}</h1>
	<form action="/personalizacion" method="post">
    @csrf <!-- {{ csrf_field() }} -->
		Languague: 
		<select name="lang">
			<option value="English">English</option>
			<option value="Español">Español</option>
		</select>
		<br />
		<input type="submit" value="Enviar">
	</form>
</body>
</html>