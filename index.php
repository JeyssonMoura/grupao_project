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
                <!-- Criar Discussão -->

            </div>
            <!-- Discursões e Posts -->
            <div class="tab-content">
                <?php for ($i = 0; $i < 1; $i++) { ?>
                    <!-- Discursão --> 
                    <div class="card bg-light mb-3">
                        <h5 class="box-titulo">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 width="35" height="35"
                                 viewBox="0 0 172 172"
                                 style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M58.79578,10.32c-5.86176,0 -10.63578,4.7837 -10.63578,10.66266v34.05734c0,5.8824 4.4376,10.32 10.32,10.32h18.51687l5.92594,11.8586c0.5848,1.16616 1.77343,1.9014 3.07719,1.9014c1.30376,0 2.49583,-0.73524 3.07719,-1.9014l5.92594,-11.8586h18.83265c5.8824,0 10.32,-4.4376 10.32,-10.32v-34.05734c0,-5.87896 -4.77402,-10.66266 -10.63578,-10.66266zM48.42875,79.12c-15.00184,0 -22.62875,7.50485 -22.62875,17.82485c0,3.2852 1.87453,9.37937 1.87453,9.37937c0,0 -1.87453,0.94336 -1.87453,4.69641c0,4.69216 2.34457,5.62359 4.21937,5.62359c0.46784,4.29656 2.81886,9.52192 4.38062,10.32v8.44547c-3.36776,8.84768 -22.7054,7.71141 -27.31844,21.25813c-0.83936,2.4596 1.09811,5.01219 3.69531,5.01219h71.31281c2.65568,0 4.63196,-2.66993 3.655,-5.13985c-5.30448,-13.41256 -27.34381,-12.31375 -30.70469,-21.13047v-8.44547c1.55832,-0.79808 3.59013,-6.02344 4.06485,-10.32c1.8748,0 4.21937,-0.93487 4.21937,-5.62359c0,-3.75304 -1.87453,-4.69641 -1.87453,-4.69641c0,0 1.87453,-6.09761 1.87453,-9.37937c0,-6.56696 -3.56604,-14.38485 -12.66485,-14.38485zM127.54875,79.12c-15.00184,0 -22.62875,7.50485 -22.62875,17.82485c0,3.2852 1.87453,9.37937 1.87453,9.37937c0,0 -1.87453,0.94336 -1.87453,4.69641c0,4.69216 2.34458,5.62359 4.21937,5.62359c0.46784,4.29656 2.81887,9.52192 4.38063,10.32v8.44547c-3.36776,8.84768 -22.7054,7.71141 -27.31844,21.25813c-0.83936,2.4596 1.09811,5.01219 3.69531,5.01219h71.31281c2.65568,0 4.63196,-2.66993 3.655,-5.13985c-5.30448,-13.41256 -27.34381,-12.31375 -30.70469,-21.13047v-8.44547c1.55832,-0.79808 3.59013,-6.02344 4.06485,-10.32c1.8748,0 4.21937,-0.93487 4.21937,-5.62359c0,-3.75304 -1.87453,-4.69641 -1.87453,-4.69641c0,0 1.87453,-6.09761 1.87453,-9.37937c0,-6.56696 -3.56604,-14.38485 -12.66485,-14.38485z"></path></g></g></svg>
                            Título aqui</h5>
                        <!-- Comentários -->
                        <div class="card bg-light m-2">
                            <div class="card-header">
                                <!-- Imagem do Perfil -->
                                <img src="img/Felps.jpg" alt="Perfil" class="img-perfil rounded-circle">
                                <label>FIOT BRABO</label>
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
                            </form>
                            <button type="button" class="botao mt-2 btn-block">Comentar</button>
                        </div>
                    </div>
                <?php } ?>
            </div><hr> 
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