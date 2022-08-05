<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listagem de Usuários</title>
</head>
<body>
	<h1>listagem de usuários</h1>
	<p>O nome do usuário é {{ $user -> name }} e ele tem o e-mail {{ $user -> email}}</p>
</body>
</html>