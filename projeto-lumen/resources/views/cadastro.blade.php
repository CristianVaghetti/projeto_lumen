<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/usuario">
                <img src="/img/logo.png" alt="" width="150" height="75" class="d-inline-block align-text-center">
                Clientela
            </a>
            <a class="navbar-brand" href="/">Home</a>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registrar</div>
                    <div class="card-body">
                        <div class="col"></div>
                        <div class="col">

                            <form method="POST" href="/cadastar">

                                <div class="mb-3 text-center">
                                    <label for="formGroupExampleInput" class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder="Insira seu nome aqui">
                                </div>
                                <div class="mb-3 text-center">
                                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Insira seu email aqui">
                                </div>
                                <div class="mb-3 text-center">
                                    <label for="formGroupExampleInput2" class="form-label">Senha</label>
                                    <input type="password" class="form-control" name="senha" placeholder="Insira sua senha aqui">
                                </div>
                                <!-- <div class="mb-3 text-center">
                                    <label for="formGroupExampleInput2" class="form-label">Confirme a senha</label>
                                    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Confirme sua senha aqui">
                                </div> -->
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-success">Registrar</button>
                                </div>
                            </form>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>