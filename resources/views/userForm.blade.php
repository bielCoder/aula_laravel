<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de usuários</title>
</head>
<body>
	<form action="{{route('users.store')}}" method="post">
		@csrf
		<label for="name">Nome do Usuário</label>
		<input type="text" name="name" placeholder="Nome do usuário"/>
		<label for="email">E-mail do Usuário</label>
		<input type="email" name="email" placeholder="E-mail do usuário"/>
		<label for="senha">Senha do Usuário</label>
		<input type="password" name="senha" placeholder="Senha do usuário"/>
		<input type="submit" value="cadastrar"/>
	</form>
</body>
</html>