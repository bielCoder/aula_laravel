<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>aula-laravel</title>
</head>
<body>
	<form action="{{route('form.store')}}" method="post">
		@csrf
		<label for="title">Title</label>
		<input type="text" name="title" />
		<br>	
		<label for="subtitle">Subtitle</label>
		<input type="text" name="subtitle" />
		<br>	
		<label for="content">Content</label>
		<textarea name="content"  cols="30" rows="10"></textarea>
		<br>	
		<input type="submit" value="Cadastrar"/>
	</form>
</body>
</html>