<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <header>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="./">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/create">Cadastrar Cliente</a>
            </li>
        </ul>
    </header>

    <h1 class="h1">CRUD - Cadastrados Clientes Laravel</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Foto</th>
                <th>Status</th>
                <th>Opções</th>
            </tr>
                @foreach($cadastros as $value)
                    <tr>
                        <td>{{ $value->nome}}</td>
                        <td>{{ $value->cpf}}</td>
                        <td> <img  src="img/cliente/{{ $value->img}}" style="width: 90px;border-radius:60px;" > </td>
                        <td>{{ $value->status}}</td>
                        <td> 
                            <a href="/cliente/{{ $value->id}}"><button type="button" class="btn btn-success">Ver</button></a> 
                            <a href="/update/{{ $value->id}}"><button type="button" class="btn btn-warning">Editar</button></a>  
                            <a href="/cliente/del/{{ $value->id}}" onclick="return confirm('Deseja realmente excluir este cadastro?');"><button type="button" class="btn btn-danger">Excluir</button></a>
                    </tr>
                @endforeach    
        </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

