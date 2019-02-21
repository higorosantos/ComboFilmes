<?php
session_start();
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
    <link href="css/principal.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>

<body class=>
    <header>
        <div>
            <img src="img/logo.png" alt="logomarca" id="logo" style="z-index:1;">

            <div class="perfil btn-group dropleft">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="img/kk.jpg" alt="Foto de Perfil">
                </button>
                <div class="dropdown-menu">
                    <p class="dropdown-item"><?php echo $_SESSION["nome"];?></p>
                    <?php if($_SESSION["privilegio"] == 2){
                  echo  '<a class="dropdown-item" href="filmes/cadastro_filme.php">Adicionar Filme/Serie</a>';
                  echo  '<a class="dropdown-item" href="usuarios/">Gerenciar Usuarios</a>';
                }
                ?>
                    <a class="dropdown-item" href="logout.php">Sair</a>
                </div>
            </div>
        </div>
    </header>
    <section class="teste">

        <div id="carouselmain" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/boneca-russa.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/lucifer.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/titans.jpg" alt="Third slide">
                </div>
            </div>

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

                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/top/serie1.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/top/serie2.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/top/serie3.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/top/serie4.png" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                        </div>
                                        <!--.row-->
                                    </div>
                                    <!--.item-->

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/top/serie5.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/top/serie6.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/top/serie7.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/top/serie8.jpg" alt="Image" style="max-width:100%;">
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
                </div>
            </section>
            <div class="divtext">
                <h1>Animes</h1>
            </div>
            <section>
                <div class="slide">
                    <div class="row blog">
                        <div class="col-md-12">
                            <div id="cu2" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#cu2" data-slide-to="0" class="active"></li>
                                    <li data-target="#cu2" data-slide-to="1"></li>

                                </ol>

                                <!-- Carousel items -->
                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime1.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime2.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime3.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime4.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                        </div>
                                        <!--.row-->
                                    </div>
                                    <!--.item-->

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime5.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime6.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime7.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
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

                        </div>
                    </div>

            </section>
            <div class="divtext">
                <h1>Ação</h1>
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

                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime1.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime2.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime3.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime4.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                        </div>
                                        <!--.row-->
                                    </div>
                                    <!--.item-->

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime5.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime6.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="img/anime/anime7.jpg" alt="Image" style="max-width:100%;">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
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

                        </div>
                    </div>

            </section>
            </div>

            </div>
            <!--test-->
            

</body>

</html>