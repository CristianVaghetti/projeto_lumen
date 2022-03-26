<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/img/logo.png" alt="" width="150" height="75" class="d-inline-block align-text-center">
            {{$titulo}}
        </a>
        <a class="navbar-brand" href="/cadastrar">Cadastrar usuário</a>
        <a class="navbar-brand" href="/listar-todos">Listar usuários</a>
        <form class="form-inline my-2 my-lg-0" method="POST" action="/listar">
            <input class="form-control mr-sm-2" type="search" name="id" placeholder="Pesquisar ID" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </div>
</nav>