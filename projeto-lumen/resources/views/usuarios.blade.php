<!DOCTYPE html>

<head>
    <title>Listar</title>
    @include('componentes.head')
</head>

<body>
    @include('componentes.navbar', ['titulo' => 'Listar'])

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="col"></div>
                        <div class="col">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Email</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($flagBusca != false && $flagBusca == 'azar')


                                    <p class="alert alert-danger text-center">Usuário não localizado</p>


                                    @elseif($flagBusca != false && $flagBusca != 'azar')
                                    <tr class="alert alert-success">
                                        <th class="col-1" scope="row">{{$flagBusca->id}}</th>
                                        <th class="col-5">{{$flagBusca->nome}}</td>
                                        <th class="col-4">{{$flagBusca->email}}</td>
                                        <th class="col-2"><a class="btn btn-primary" href="/alterar/{{$flagBusca->id}}">Editar</a></td>
                                        <th class="col-2">
                                            <form method="GET" action="/deletar/{{$flagBusca->id}}">
                                                <button class="btn btn-danger" type="submit">Excluir</button>
                                            </form>
                                            </td>
                                    </tr>
                                    @endif
                                    @foreach($usuarios as $usuario)
                                    <tr>
                                        <th class="col-1" scope="row">{{$usuario->id}}</th>
                                        <td class="col-5">{{$usuario->nome}}</td>
                                        <td class="col-4">{{$usuario->email}}</td>
                                        <td class="col-2"><a class="btn btn-primary" href="/alterar/{{$usuario->id}}">Editar</a></td>
                                        <td class="col-2">
                                            <form method="GET" action="/deletar/{{$usuario->id}}">
                                                <button class="btn btn-danger" type="submit">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>


                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </div>
</body>


</html>