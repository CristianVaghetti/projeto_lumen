<!doctype html>

<head>
    @include('componentes.head')
    <title>Cadastro</title>
</head>

<body>
    @include('componentes.navbar', ['titulo' => 'Cadastro'])

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$metodo}}</div>
                    <div class="card-body">
                        <div class="col"></div>
                        <div class="col">
                            @include('componentes.form_cadastro')
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>