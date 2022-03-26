<!doctype html>

<head>
    @include('componentes.head')
    <title>Cadastro</title>
</head>

<body>
    @include('componentes.navbar', ['titulo' => $metodo])
    @include('componentes.form_cadastro', ['metodo' => $metodo])
</body>

</html>