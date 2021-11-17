<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cliente: {{ $cliente->nome}}</title>
</head>
<body>
    <header>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="./../">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./../create">Cadastrar Cliente</a>
            </li>
        </ul>
    </header>
        <div style="width: 600px;margin:auto;">
            <img  src="/img/cliente/{{ $cliente->img}}" style="width: 200px;" >
            <h3>Cliente: <small class="text-muted">{{ $cliente->nome}}</small></h3>
            <h4>Data de Nascimento: <small class="text-muted">{{ $cliente->nascimento}}</small></h4>
            <h4>CPF: <small class="text-muted">{{ $cliente->cpf}}</small></h4>
            <h4>Endereço: <small class="text-muted">{{ $cliente->endereco}}</small></h4>
            <h4>Bairro: <small class="text-muted">{{ $cliente->bairro }}</small></h4>
            <h4>Municipio: <small class="text-muted">{{ $cliente->municipio }}</small></h4>
            <h4>CEP: <small class="text-muted">{{ $cliente->cep }}</small></h4>
            <h4>Email: <small class="text-muted">{{ $cliente->email }}</small></h4>
            <h4>Status: <small class="text-muted">{{ $cliente->status }}</small></h4>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

