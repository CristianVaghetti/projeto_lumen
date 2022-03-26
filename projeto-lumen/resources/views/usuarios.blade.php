<!DOCTYPE html>
<html lang="en">

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
                                    @foreach($usuarios as $usuario)


                                    <tr>
                                        <th class="col-1" scope="row">{{$usuario->id}}</th>
                                        <td class="col-5">{{$usuario->nome}}</td>
                                        <td class="col-4">{{$usuario->email}}</td>
                                        <td class="col-1"><a class="btn btn-primary" href="">Editar</a></td>
                                        <td class="col-1"><a class="btn btn-danger" href="">Deletar</a></td>
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