<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listagem de usuários</title>
</head>
<body>
	<table>
		<tr>
			<th>#ID</th>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Ações</th>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{$user->id}}</td>	
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
		
			<td>
				<a href="{{route('users.listSingle',['user' => $user -> id])}}">Ver Usuário</a>	
				<form action="{{route('users.destroy',['user' => $user -> id])}}" method="post">
					@csrf
					@method('delete')
					<input type="hidden" name="user" value="{{$user -> id}}"/>	
					<input type="submit" value="Remover">	
				</form>
			</td>
			

				
		</tr>
		@endforeach
	</table>
</body>
</html>