<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Laravel</title>
</head>
<body>
    <h1>One to One</h1>
    <h2>Dados do Usuário</h2>
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

    <h2>Endereço do Usuário</h2>
    <table>
        <tr>
        <th>Street</th>
        <th>Number</th>
        <th>City</th>
        <th>State</th>
        </tr>
        <tr>
            <td>{{$address->street}}</td>
            <td>{{$address->number}}</td>
            <td>{{$address->city}}</td>
            <td>{{$address->state}}</td>
        </tr>
    </table>

    <h1>One to Many</h1>

    <h2>Post do Usuário</h2>
    <table>
        <tr>
        
        <th>Title</th>
        <th>Slug</th>
        <th>Subtitle</th>
        <th>Content</th>
        </tr>
         @foreach($posts as $post)
        <tr>
           
            <td>{{$post->title}}</td>   
            <td>{{$post->slug}}</td>
            <td>{{$post->subtitle}}</td>
            <td>{{$post->content}}</td>
           
        </tr>
         @endforeach
    </table>
</body>
</html>