<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Laravel</title>
</head>
<body>

      <h1>Endereço do Usuário</h1>
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

    
    <h1>Dados do Usuário</h1>
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

  
</body>
</html>