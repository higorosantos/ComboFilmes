<?php
session_start();
include "config.php";
if(($_SESSION["privilegio"] == 1 || $_SESSION["privilegio"] == 2) && $_SESSION["acesso"] == 1){
    $query = mysqli_query($conect,"SELECT * FROM filme WHERE id_filme>=1 and id_filme<=7")or die(myqli_erro());
    $query2 = mysqli_query($conect,"SELECT * FROM filme WHERE id_filme>=8 and id_filme<=12")or die(myqli_erro());
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Combo Filmes</title>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="css/kid.css" rel="stylesheet">
    <script src="js/script.js"></script>
    <style>
    .slime img{
        width: 295px;
        height: 150px;

    }
    </style>
</head>

<body class=>
    <header>
        <div>
            <img src="img/kids/logokids.png" alt="logomarca" id="logo" style="z-index:1;">

            <div class="perfil btn-group dropleft">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="img/kk.jpg" alt="Foto de Perfil">
                </button>
                <div class="dropdown-menu">
                    <p class="dropdown-item"><?php echo $_SESSION["nome"];?></p>
                    <?php if($_SESSION["privilegio"] == 2){
                  echo  '<a class="dropdown-item" href="filmes/cadastro_filme.php">Adicionar Filme</a>';
                 
                  echo  '<a class="dropdown-item" href="filmes/cadastro_serie.php">Adicionar Serie</a>';
                  echo  '<a class="dropdown-item" href="usuarios/">Gerenciar Usuarios</a>';
                  echo ' <a class="dropdown-item" href="relatorios/usuarios.php">Relatorio</a>';
                }
                ?>
                   
                    <a class="dropdown-item" href="logout.php">Sair</a>
                    
                </div>
            </div>
        </div>
    </header>
    <section class="teste">

        <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  

  <!-- The slideshow -->
  <div class="slideimg carousel-inner">
    <div class="carousel-item active">
    <a href="#"><img src="img/kids/alta3.jpg" alt="Galinha pintadinha"></a>
      <div class="carousel-caption">
    <h2>Galinha pintadinha</h2>
    <p>A Galinha Pitandinha está pronta para viver novas aventuras ao lado do marido, o Galo Carijó, e do filho, o simpático Pintinho Amarelinho. É claro que também embarcam nessa divertida jornada a Popó, a Borboletinha e também a Baratinha, que não se desgrudam da família.</p>
  </div>
    </div>
    <div class="slideimg carousel-item">
      <a href="#"><img src="img/kids/alta1.jpg" alt="Mundo Bita"></a>
      <div class="carousel-caption">
    <h2>Mundo Bita</h2>
    <p>Desenho musical brasileiro que faz sucesso no mundo inteiro, o Mundo Bita é uma ótima escolha para os pequenos aprenderem cantando sobre todo o tipo de assunto.</p>
  </div>
    </div>
    <div class="slideimg carousel-item">
    <a href="#"><img src="img/kids/hello.jpg" alt="Hello Kitty"></a>
      <div class="carousel-caption">
    <h2>Hello Kitty</h2>
    <p>Personagem amado no mundo inteiro cujo desenho é uma aula de protagonismo; Hello Kitty experimenta fazer de tudo um pouco, perseguindo seus interesses e desenvolvendo seus gostos.</p>
  </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

        

    </section>
    <div class="masterbox">
        <div class="divtext">
            <h1>Em Alta !</h1>

            <section>
                <div class="slide">
                    <div class="row blog">
                        <div class="col-md-12">
                            <div id="cu" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#cu" data-slide-to="0" class="active"></li>
                                    <li data-target="#cu" data-slide-to="1"></li>

                                </ol>

                                <!-- Carousel items -->
                                <div class="carousel-inner">

<div class="slime carousel-item active">
    <div class="row">
        <div class="col-md-3">
            <a href="#">
                <img src="img/kids/alta1.jpg" alt="Image" style="max-width:100%;">
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <img src="img/kids/alta2.jpg" alt="Image" style="max-width:100%;">
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <img src="img/kids/alta3.jpg" alt="Image" style="max-width:100%;">
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <img src="img/kids/alta4.jpg" alt="Image" style="max-width:100%;">
            </a>
        </div>
    </div>
    <!--.row-->
</div>
<!--.item-->

<div class="slime carousel-item">
    <div class="row">
        <div class="col-md-3">
            <a href="#">
                <img src="img/kids/alta5.jpg" alt="Image" style="max-width:100%;">
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <img src="img/kids/alta6.jpg" alt="Image" style="max-width:100%;">
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <img src="img/kids/alta7.jpg" alt="Image" style="max-width:100%;">
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <img src="img/kids/alta8.jpg" alt="Image" style="max-width:100%;">
            </a>
        </div>
    </div>
    <!--.row-->
</div>
<!--.item-->

</div>
<!--.carousel-inner-->
</div>
<!--.Carousel-->

</div>
</div>

</section>
            <div class="divtext">
                <h1>Filmes de Animação</h1>
            </div>
            <section>
                <div class="slide">
                    <div class="row blog">
                        <div class="col-md-12">
                            <div id="cu2" class="slime carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#cu2" data-slide-to="0" class="active"></li>
                                    <li data-target="#cu2" data-slide-to="1"></li>

                                </ol>

                                <!-- Carousel items -->
                                <div class="carousel-inner">

                                    <div class="slime carousel-item active">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/anima1.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/anima2.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/anima3.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/anima4.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                        </div>
                                        <!--.row-->
                                    </div>
                                    <!--.item-->

                                    <div class="slime carousel-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/anima5.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/anima6.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/anima7.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/anima8.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                        </div>
                                        <!--.row-->
                                    </div>
                                    <!--.item-->

                                </div>
                                <!--.carousel-inner-->
                            </div>
                            <!--.Carousel-->

                        </div>
                    </div>

            </section>
            <div class="divtext">
                <h1>Relembre com seus Filhos!</h1>
            </div>
            <section>
                <div class="slide">
                    <div class="row blog">
                        <div class="col-md-12">
                            <div id="cu3" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#cu3" data-slide-to="0" class="active"></li>
                                    <li data-target="#cu3" data-slide-to="1"></li>

                                </ol>

                                <!-- Carousel items -->
                                <div class="carousel-inner">

                                    <div class="slime carousel-item active">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/lembra1.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/lembra2.png" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/lembra3.png" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/lembra4.png" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                        </div>
                                        <!--.row-->
                                    </div>
                                    <!--.item-->

                                    <div class="slime carousel-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/lembra5.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/lembra6.png" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/lembra7.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/kids/lembra8.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                        </div>
                                        <!--.row-->
                                    </div>
                                    <!--.item-->

                                </div>
                                <!--.carousel-inner-->
                            </div>
                            <!--.Carousel-->

                        </div>
                    </div>

            </section>
            </div>

            </div>
            <!--test-->
            <section class="base">
                <h1 class="text-center"><a href="principal.php">Encerrar Kids</a></h1>
            </section>

</body>

</html>
<?php
}
else{
    echo "<script>window.location='index.php';</script>";
}

?>