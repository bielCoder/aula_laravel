<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
</head>
<body>
	@if(session('msg'))
	<div>
		<p>{{session('msg')}}</p>
	</div>
	@endif


	<form action="{{route('auth')}}" method="post">
		@csrf
		<label for="email">E-mail:</label>
		<input type="email" name="email" value="gabriel@gmail.com" placeholder="E-mail" />
		<label for="password">Senha:</label>
		<input type="password" name="password" placeholder="Senha"/>
		<input type="submit" value="Login">
	</form>

	
</body>
</html>