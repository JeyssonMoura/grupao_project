<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/aux_estilo.css" type="text/css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Grupão Online!</title>
    </head>
    <body>
        <div class="container">
            <!-- Cabeçalho -->
            <div class="m-4"> 
                <div class="d-flex justify-content-center" ><h1>GRU<img src="img/icone_pao.png" alt="Pão"></h1></div>
                <p class="lead" align="center">Bem-vindo(a) ao GRUPÃO, inicie ou participe de uma discussão.</p>
            </div>
            <!-- Criar Discussão -->
            <div class="card bg-light mb-3">
                <h5 class="box-titulo"><img src="img/icone_balao_fala.png">Crie uma Discussão</h5>
                <form class="p-2">
                    <div class="form-group">
                        <input type="text" class="form-control" id="titulo-discussao" placeholder="Título da discussão...">
                    </div>
                    <button type="button" class="botao mt-2 btn-block"><img src="img/icone_enviar.png">Publicar</button>
                </form>
            </div>
            <?php for ($i = 0; $i < 1; $i++) { ?>
                <!-- Discursão --> 
                <div class="card bg-light mb-3">
                    <h5 class="box-titulo"><img src="img/icone_grupo.png">Título aqui</h5>
                    <!-- Comentários -->
                    <div class="card bg-light m-2">
                        <div class="card-header">
                            <!-- Imagem do Perfil -->
                            <label>@FIOT BRABO</label>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Bom, mas precisa melhorar...</p>
                        </div>
                    </div>
                    <!-- Comentar -->
                    <div class="m-2 card-bodycard">
                        <h5>Comentar</h5><hr>
                        <form method="POST" action="/">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="NickName" aria-label="Usuário" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Comentário</span>
                                </div>
                                <textarea class="form-control" aria-label="Com textarea" placeholder="Comente aqui..."></textarea>
                            </div>
                            <button type="button" class="botao mt-2 btn-block">Comentar</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
            <hr> 
        </div>
        <!-- Rodapé -->
        <footer align="center" class="m-5">Criado por: <a href="https://instagram.com/ujeyzu">@ujeyzu</a> | <?php echo date("Y"); ?></footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>