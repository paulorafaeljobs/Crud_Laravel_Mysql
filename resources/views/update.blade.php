<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro {{ $cliente->nome}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
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

    <div class="conteiner">
    <h1>Editar Cadastro {{ $cliente->nome}}</h1>
    <form action="/updatecliente" method="post" enctype="multipart/form-data">
        @csrf
            <input type="hidden" value="{{ $cliente->id}}" name="id">
            <div class="form-group">
                <label for="formGroupExampleInput">Nome</label>
                <input type="text" value="{{ $cliente->nome}}" required name="nome" class="form-control" id="formGroupExampleInput">
            </div>
    
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">CPF</label>
                    <input value="{{ $cliente->cpf}}" name="cpf" required type="text" class="form-control">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Data de Nascimento</label>
                    <input value="{{ $cliente->nascimento}}" required name="nascimento" type="date" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Foto Perfil</label>
                <div class="max-width">
                    <div class="imageContainer">
                        <img src="/img/cliente/{{ $cliente->img}}" alt="Adicionar Foto" id="imgPhoto">
                    </div>
                </div>
                <input class="file" type="file" value="{{ $cliente->img }}" id="flImage" name="image" accept="image/*">
            </div>


            <div class="form-group">
                <label for="formGroupExampleInput">Endereço</label>
                <input type="text" value="{{ $cliente->endereco}}" required name="endereco" class="form-control" id="formGroupExampleInput" >
            </div>

            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Bairro</label>
                    <input value="{{ $cliente->bairro}}" name="bairro" required type="text" class="form-control">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Municipio</label>
                    <input value="{{ $cliente->municipio}}" name="municipio" required type="text" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Cep</label>
                    <input value="{{ $cliente->cep}}" name="cep" type="text" required class="form-control">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Email</label>
                    <input value="{{ $cliente->email}}" name="email" type="text" required class="form-control">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Status</label>
                    <input value="{{ $cliente->status}}" name="status"  type="number" required class="form-control">
                </div>
            </div>
            <br>
            <button type="submit" type="button" class="btn btn-primary">Salvar</button> 
            <a href="./../">
                <button type="button" class="btn btn-danger">Não Salvar</button>
            </a>
        </form>
    </div>
    <script type="text/javascript" src="/js/add_produto.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>