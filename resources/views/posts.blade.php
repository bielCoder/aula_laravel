<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Posts</title>
</head>
<body>
	<h1>One to Many</h1>
	<h2>Post do Usuário</h2>
	<table>
		<tr>
			<th>Title</th>
			<th>Slug</th>	
			<th>Subtitle</th>
			<th>Content</th>
		</tr>
	
		<tr>
			<td>{{$posts->title}}</td>
			<td>{{$posts->slug}}</td>
			<td>{{$posts->subtitle}}</td>
			<td>{{$posts->content}}</td>	
				
		</tr>
	</table>

	<h2>Usuário do Post</h2>
	<table>
		<tr>
			<th>Nome</th>
			<th>Email</th>
		</tr>
	
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>	
		</tr>
	</table>

	<h2>Categoria do Post</h2>
	<table>
		<tr>
			<th>#Id</th>
			<th>Categoria</th>
		</tr>
		
		@foreach($categories as $category)
		<tr>
			<td>{{$category->id}}</td>
			<td>{{$category->category}}</td>	
		</tr>
		@endforeach
	</table>
</body>
</html>