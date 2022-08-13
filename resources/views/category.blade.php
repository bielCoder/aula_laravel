<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Category</title>
</head>
<body>
	<h1>Many to Many</h1>
	<h2>Categoria</h2>
	<table>
		<tr>
			<th>#</th>
			<th>Title</th>
		</tr>
		<tr>
			<td>{{$category->id}}</td>
			<td>{{$category->category}}</td>
		</tr>
	</table>

	<h2>Posts</h2>
	<table>
		<tr>
			<th>Title</th>
			<th>Subtitle</th>
			<th>Content</th>
		</tr>

		@foreach($posts as $post)
		<tr>
			<td>{{$post -> title}}</td>
			<td>{{$post -> subtitle}}</td>
			<td>{{$post -> content}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>