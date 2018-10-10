<?php
include('conexao/conexao.php');
?>

<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body><!--Abre Body-->
    <!--Abre Barra de Navegaçã o-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> Associação Pestalozzi</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse" id="cadastroslink">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="cadastros" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastros</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="cadastrar/cadastrar_aluno.php">Aluno</a>
                <a class="dropdown-item" href="cadastrar/cadastrar_professor.php">Professor</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" id="notas" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notas</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="cadastrar/cadastrar_notas.php">Cadastrar Notas</a>
                <a class="dropdown-item" href="exibir/exibir_notas.php">Exibir Notas</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="presenca" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Presença</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="cadastrar/cadastrar_presenca.php">Cadastrar Presença</a>
                <a class="dropdown-item" href="exibir/exibir_presenca.php">Exibir Presença</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.php">Sobre</a>
            </li>
          </ul>
          <div id="login">
            <a class="nounderline"href="login.php"><button class="btn btn-outline-primary">Login</button></a>
          </div>
        </div>
    </nav>
    <!--Fecha Barra de Navegação-->

    <!--Abre banner-->
    <div id="banner">
      <img class="imgbanner" src="img/banner.png">
    </div>
    <!--Fecha banner-->

    <!--Abre Container-->
    <div class="container">
      <!--Abre Slide-->
      <div id="slide">
        <div id="carouselExampleIndicators" class="carousel slide fundobranco" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active centro">
              <img class="tamanho" src="img/pestalozzi01.jpg" alt="First slide">
            </div>
            <div class="carousel-item centro">
              <img class="tamanho" src="img/pestalozzi02.jpg" alt="Second slide">
            </div>
            <div class="carousel-item centro">
              <img class="tamanho" src="img/pestalozzi03.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!--Fecha Slide-->

      <!--Abre Sobre-->
      <div id="sobre" class="input-group">
        <div class="col-md-3">
          <img class="escola" src="img/associacao.jpg" alt="escola">
        </div>
        <div class="texto col-md-8">
          <h2>Bem Vindo à Pestalozzi</h2>
          <P>fdsjhfsdh fffffffffffffff fffffff ffffffffffffffffff fffffffffffffff
          hffff f fffffffff ff fffffff fff ffffff fffffffff fffffff fffffff
          hfffffff fffff ffffffffff fffffffffffffffffffffffffffffffff
          hfffffffffffffffffffffffffffffffffffffffffffffffffffffff
          hffffffffff ffffffffffff ffffffffffffffff   ffffffffffffff
          hffff  ffffffff ffffff fffffffffffffffffffffffffffffffffffffv
          hfffffff ffffffff ffffffffffff fffffffffffff  fffffffffffffff
          hfff fff ffffff fff f  ffffffff fffff fff fffffffffffffffffffffff</p>
          </div>
        </div>
        <!--Fecha Sobre-->

        <!--Abre Galeria-->
        <div id="galeria">
        <h1 >Galeria</h1>
            <!--Abre Primeira Linha da Galeria-->
            <div class="input-group centrogaleria">
              <!--Abre tile-->
              <div class="col-md-4 form-group">
                <br>
                <div data-role="tile" data-size="medium" data-effect="hover-zoom-right">
                  <div class="slide-front">
                    <img src="img/pestalozzi01.jpg" class="h-100 w-100">
                  </div>
                  <div class="slide-back d-flex flex-justify-center flex-align-center p-4 op-mauve">
                    <p class="text-center">Entrada da Pestalozzi</p>
                  </div>
                <span class="branding-bar fg-dark">Passe o Mouse</span>
                </div>
              </div>
              <!--Fecha tile-->

              <!--Abre tile-->
              <div class="col-md-4 form-group">
                <div data-role="tile" data-size="medium" data-effect="hover-zoom-down">
                  <div class="slide-front">
                    <img src="img/pestalozzi01.jpg" class="h-100 w-100">
                  </div>
                  <div class="slide-back d-flex flex-justify-center flex-align-center p-4 op-mauve">
                    <p class="text-center">Entrada da Pestalozzi</p>
                  </div>
                <span class="branding-bar fg-dark">Passe o Mouse</span>
                </div>
              </div>
              <!--Fecha tile-->

              <!--Abre tile-->
              <div class="col-md-4 form-group">
                <div data-role="tile" data-size="medium" data-effect="hover-zoom-left">
                  <div class="slide-front">
                    <img src="img/pestalozzi01.jpg" class="h-100 w-100">
                  </div>
                  <div class="slide-back d-flex flex-justify-center flex-align-center p-4 op-mauve">
                    <p class="text-center">Entrada da Pestalozzi</p>
                  </div>
                <span class="branding-bar fg-dark">Passe o Mouse</span>
                </div>
              </div>
              <!--Fecha tile-->
            </div>
            <!--Fecha Primeira Linha da Galeria-->

            <!--Abre Segunda Linha da Galeria-->
            <div class="input-group centrogaleria">
              <!--Abre tile-->
              <div class="col-md-4 form-group">
                <br>
                <div data-role="tile" data-size="medium" data-effect="hover-zoom-left">
                  <div class="slide-front">
                    <img src="img/pestalozzi01.jpg" class="h-100 w-100">
                  </div>
                  <div class="slide-back d-flex flex-justify-center flex-align-center p-4 op-mauve">
                    <p class="text-center">Entrada da Pestalozzi</p>
                  </div>
                <span class="branding-bar fg-dark">Passe o Mouse</span>
                </div>
              </div>
              <!--Fecha tile-->

              <!--Abre tile-->
              <div class="col-md-4 form-group">
                <div data-role="tile" data-size="medium" data-effect="hover-zoom-up">
                  <div class="slide-front">
                    <img src="img/pestalozzi01.jpg" class="h-100 w-100">
                  </div>
                  <div class="slide-back d-flex flex-justify-center flex-align-center p-4 op-mauve">
                    <p class="text-center">Entrada da Pestalozzi</p>
                  </div>
                <span class="branding-bar fg-dark">Passe o Mouse</span>
                </div>
              </div>
              <!--Fecha tile-->

              <!--Abre tile-->
              <div class="col-md-4 form-group">
                <div data-role="tile" data-size="medium" data-effect="hover-zoom-right">
                  <div class="slide-front">
                    <img src="img/pestalozzi01.jpg" class="h-100 w-100">
                  </div>
                  <div class="slide-back d-flex flex-justify-center flex-align-center p-4 op-mauve">
                    <p class="text-center">Entrada da Pestalozzi</p>
                  </div>
                <span class="branding-bar fg-dark">Passe o Mouse</span>
                </div>
              </div>
              <!--Fecha tile-->
            </div>
            <!--Fecha Segunda Linha da Galeria-->

            <!--Abre Terceira Linha da Galeria-->
            <div class="input-group centrogaleria">
              <!--Abre tile-->
              <div class="col-md-4 form-group">
                <br>
                <div data-role="tile" data-size="medium" data-effect="hover-zoom-right">
                  <div class="slide-front">
                    <img src="img/pestalozzi01.jpg" class="h-100 w-100">
                  </div>
                  <div class="slide-back d-flex flex-justify-center flex-align-center p-4 op-mauve">
                    <p class="text-center">Entrada da Pestalozzi</p>
                  </div>
                <span class="branding-bar fg-dark">Passe o Mouse</span>
                </div>
              </div>
              <!--Fecha tile-->

              <!--Abre tile-->
              <div class="col-md-4 form-group">
                <div data-role="tile" data-size="medium" data-effect="hover-zoom-up">
                  <div class="slide-front">
                    <img src="img/pestalozzi01.jpg" class="h-100 w-100">
                  </div>
                  <div class="slide-back d-flex flex-justify-center flex-align-center p-4 op-mauve">
                    <p class="text-center">Entrada da Pestalozzi</p>
                  </div>
                <span class="branding-bar fg-dark">Passe o Mouse</span>
                </div>
              </div>
              <!--Fecha tile-->

              <!--Abre tile-->
              <div class="col-md-4 form-group">
                <div data-role="tile" data-size="medium" data-effect="hover-zoom-left">
                  <div class="slide-front">
                    <img src="img/pestalozzi01.jpg" class="h-100 w-100">
                  </div>
                  <div class="slide-back d-flex flex-justify-center flex-align-center p-4 op-mauve">
                    <p class="text-center">Entrada da Pestalozzi</p>
                  </div>
                <span class="branding-bar fg-dark">Passe o Mouse</span>
                </div>
              </div>
              <!--Fecha tile-->
            </div>
            <!--Fecha Terceira Linha da Galeria-->

        </div>
        <!--Fecha Galeria-->
    </div>
    <!--Fecha Container-->

    <!--Abre Scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <!--Fecha Scripts-->
    <div id="footer">
      <div class="input-group text-center">
          <div class="col-md-4">
            <h3>Patrocinadores<h3>
              <img class="patrocinador" src="img/ifro.jpg">
          </div>
          <div class="col-md-4">
            <h3>Links<h3>
              <ul>
                <a class="links"href=""> IFRO <a>
              </ul>
          </div>
          <div class="col-md-4">
            <h3>Gabriel<h3>
          </div>
      </div>
      <div class="info text-center">
        <br>
        <h6>Desenvolvido por estudantes do Instituto Federal de Educação, Ciência e Tecnologia de Rondônia.
          <br>
          © 2018 Bootstrap</h6>
        <br>
      </div>
    </div>
  </body><!--Fecha Body-->

</html>
