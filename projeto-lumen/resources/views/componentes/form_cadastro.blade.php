<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$metodo}}</div>
                <div class="card-body">
                    <div class="col"></div>
                    <div class="col">
                        @if($metodo == 'Cadastrar')
                            <form method="POST" href="/cadastar">
                        @else
                            <form method="POST" href="/alterar/{{$id}}">
                        @endif
                                <div class="mb-3 text-center">
                                    <label for="formGroupExampleInput" class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder="Insira seu nome aqui" required>
                                </div>
                                <div class="mb-3 text-center">
                                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Insira seu email aqui" required>
                                </div>
                                <div class="mb-3 text-center">
                                    <label for="formGroupExampleInput2" class="form-label">Senha</label>
                                    <input type="password" class="form-control" name="senha" placeholder="Insira sua senha aqui" required>
                                </div>
                                <!-- <div class="mb-3 text-center">
                            <label for="formGroupExampleInput2" class="form-label">Confirme a senha</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Confirme sua senha aqui">
                            </div> -->
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-success">{{$metodo}}</button>
                                </div>
                            </form>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
</div>