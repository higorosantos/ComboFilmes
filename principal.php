<?php
session_start();
include "config.php";
if(($_SESSION["privilegio"] == 1 || $_SESSION["privilegio"] == 2) && $_SESSION["acesso"] == 1){
    $query = mysqli_query($conect,"SELECT * FROM filme WHERE id_filme>=1 and id_filme<=7")or die(myqli_erro());
    $query2 = mysqli_query($conect,"SELECT * FROM filme WHERE id_filme>=8 and id_filme<=16")or die(myqli_erro());
?>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Combo Filmes</title>



        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">





        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <link href="css/principal.css" rel="stylesheet">
        <script src="js/jsprincipal.js"></script>
        <style>
            .slime img {
                width: 200px;
                height: 130px;

            }
        </style>
    </head>

    <body class="container">
        <header>
            <div>
                <img src="img/logo.png" alt="logomarca" id="logo" style="z-index:1;">

                <button class="not btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div style=" margin-top:10px; float:right;">
                        <img src="img/not.png" style="width:30px;">
                        <span class="badge badge-light" style="margin-right:5px;">0</span>
                    </div>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Alguma ação</a>
                    <a class="dropdown-item" href="#">Outra ação</a>
                    <a class="dropdown-item" href="#">Alguma coisa aqui</a>

                </div>
                <div class="perfil btn-group dropleft">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="img/kk.jpg" alt="Foto de Perfil">
                    </button>
                    <div class="dropdown-menu">
                        <p class="dropdown-item">
                            <?php echo $_SESSION["nome"];?>
                        </p>
                        <?php if($_SESSION["privilegio"] == 2){
                  echo  '<a class="dropdown-item" href="filmes/cadastro_filme.php">Adicionar Filme/Serie</a>';
                 
            
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
                        <a href="#">
                            <img src="img/boneca-russa.jpg" alt="Boneca Russa">
                        </a>
                        <div class="carousel-caption" style="background-color: rgba(0,0,0,0.6);">
                            <h2>Boneca Russa</h2>
                            <p>Em seu aniversário de 36 anos, Nadia morre. Mas retorna para morrer de novo. E de novo. Presa
                                nesse ciclo surreal, só lhe resta encarar a própria mortalidade.</p>
                        </div>
                    </div>
                    <div class="slideimg carousel-item">
                        <a href="#">
                            <img src="img/lucifer.jpg" alt="Lucifer">
                        </a>
                        <div class="carousel-caption" style="background-color: rgba(0,0,0,0.6);">
                            <h2>Luficer</h2>
                            <p>Lucifer está entediado e infeliz como o Senhor do Inferno e decide tirar férias em Los Angeles,
                                onde vira dono de uma casa noturna com ajuda de sua serva Mazikeen..</p>
                        </div>
                    </div>
                    <div class="slideimg carousel-item">
                        <a href="#">
                            <img src="img/titans.jpg" alt="Titãs">
                        </a>
                        <div class="carousel-caption" style="background-color: rgba(0,0,0,0.6);">
                            <h2>Titãs</h2>
                            <p>Titãs acompanha jovens heróis de todo o Universo DC assim que atingem a maioridade em uma abordagem
                                mais enérgica sobre a clássica franquia dos Jovens Titãs.</p>
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
                <h3>Em Alta !</h3>
                <hr class="teal mx-auto accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;" color=#21d192>

                <section>
                    <div class="slide">
                        <div class="row blog">
                            <div class="col-md-12">
                                <div id="cu" class="carousel slide" data-ride="carousel">

                                    <!-- Carousel items -->
                                    <div class="carousel-inner">

                                        <div class="slime carousel-item active">
                                            <div class="row">
                                                <?php
                                        $lista  = mysqli_num_rows($query);
                                       
                                         while($campos = mysqli_fetch_array($query)){
                                            $diretorio = "img/filmes_uploads/";
                                            $imagem = $diretorio . $campos["url_img"];
                                            echo '<div class="col-md-2">';
                                            echo '<a href="#">';
                                            echo '<img src="',$imagem,'" alt="Image" style="max-width:100%;">';
                                            echo ' </a>';
                                            echo '</div>';
                            
                                            
                                        
                                        }
                                        
                                        
                                        ?>
                                            </div>
                                            <!--.row-->
                                        </div>
                                        <!--.item-->

                                        <div class="slime carousel-item">
                                            <div class="row">
                                                <?php
                                       
                                            while($campos = mysqli_fetch_array($query2)){
                                                $diretorio = "img/filmes_uploads/";
                                                $imagem = $diretorio . $campos["url_img"];
                                                echo '<div class="col-md-2">';
                                                echo '<a href="#">';
                                                echo '<img src="',$imagem,'" alt="Image" style="max-width:100%;">';
                                                echo ' </a>';
                                                echo '</div>';
                                
                                                
                                             }
                                            

                                        

                                        ?>

                                            </div>
                                            <!--.row-->
                                        </div>
                                        <!--.item-->

                                    </div>
                                    <!--.carousel-inner-->
                                </div>
                                <!--.Carousel-->
                                <a class="carousel-control-prev" href="#cu" data-slide="prev" style="width: 40px;">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#cu" data-slide="next" style="width: 40px;">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </section>
                <div class="divtext">
                    <h3>Animes</h3>
                    <hr class="teal mx-auto accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;" color=#21d192>
                </div>
                <section>
                    <div class="slide">
                        <div class="row blog">
                            <div class="col-md-12">
                                <div id="cu2" class="slime carousel slide" data-ride="carousel">

                                    <!-- Carousel items -->
                                    <div class="carousel-inner">

                                        <div class="slime carousel-item active">
                                            <div class="row">
                                                <div class="col-md-2">
                                                <a href="assistir.php">
                                                        <img src="img/anime/anime1.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/anime/anime2.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/anime/anime3.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/anime/anime4.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                            </div>
                                            <!--.row-->


                                        </div>
                                        <!--.item-->

                                        <div class="slime carousel-item">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/anime/anime5.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/anime/anime6.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/anime/anime7.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/anime/anime8.jpg" alt="Image" style="max-width:100%;">
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
                                <a class="carousel-control-prev" href="#cu2" data-slide="prev" style="width: 40px;">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#cu2" data-slide="next" style="width: 40px;">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>

                </section>
                <div class="divtext">
                    <h3>Ação</h3>
                    <hr class="teal mx-auto accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;" color=#21d192>
                </div>
                <section>
                    <div class="slide">
                        <div class="row blog">
                            <div class="col-md-12">
                                <div id="cu3" class="carousel slide" data-ride="carousel">


                                    <!-- Carousel items -->
                                    <div class="carousel-inner">

                                        <div class="slime carousel-item active">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="">
                                                        <img src="img/acao/acao1.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/acao/acao2.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/acao/acao3.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/acao/acao4.jpg" alt="Image" style="max-width:100%;">
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
                                                        <img src="img/acao/acao5.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/acao/acao6.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/acao/acao7.jpg" alt="Image" style="max-width:100%;">
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#">
                                                        <img src="img/acao/acao8.jpg" alt="Image" style="max-width:100%;">
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
                                <a class="carousel-control-prev" href="#cu3" data-slide="prev" style="width: 40px;">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#cu3" data-slide="next" style="width: 40px;">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                            
                        </div>

                </section>
                </div>

                </div>
                <!--test-->

                <section>
                    <div class="divtext">
                        <a href="#">
                            <i class="fab fa-twitch fa-4x" style="color:#fff;">Twitch</i>
                        </a>
                        <hr class="teal mx-auto accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;" color=#4B367C>
                        <div>
                            <div>
                                <div style="left: 0; width: 96%; height: 0; position: relative; padding-bottom: 56.1987%;">
                                    <iframe src="http://player.twitch.tv/?channel=skipnho&autoplay=false" style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;"
                                        allowfullscreen scrolling="no">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                </section>

    </body>

    </html>
    <?php
}
else{
    echo "<script>window.location='index.php';</script>";
}

?>