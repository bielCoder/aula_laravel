<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de usuários - Editar</title>
</head>
<body>
	<form action="{{route('users.edit',['user' => $user -> id])}}" method="post">
		@csrf
		@method('PUT')
		<label for="name">Nome do Usuário</label>
		<input type="text" name="name" placeholder="Nome do usuário" value="{{$user->name}}" />
		<label for="email">E-mail do Usuário</label>
		<input type="email" name="email" placeholder="E-mail do usuário" value="{{$user->email}}" />
		<label for="senha">Senha do Usuário</label>
		<input type="password" name="senha" placeholder="Senha do usuário"/>
		<input type="submit" value="cadastrar"/>
	</form>
</body>
</html>