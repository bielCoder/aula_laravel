<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="{{route('debug.form')}}" method="post">
		@csrf
		<label for="title">Título</label>
		<input type="text" name="title">
		<br>
		<label for="subtitle">Subtítulo</label>
		<input type="text" name="subtitle">
		<br>
		<label for="content">Conteúdo</label>
		<textarea name="content" cols="30" rows="10"></textarea>
		<br>
		<input type="submit" value="cadastrar-artigo">

	</form>
</body>
</html>