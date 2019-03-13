<?php
session_start();
include "config.php";
if(($_SESSION["privilegio"] == 1 || $_SESSION["privilegio"] == 2) && $_SESSION["acesso"] == 1){
    $query = mysqli_query($conect,"SELECT * FROM filme ORDER BY data_cadastro DESC LIMIT 6")or die(myqli_erro());
    $acao = mysqli_query($conect,"SELECT * FROM filme  WHERE genero='ação' ORDER BY titulo ASC")or die(myqli_erro());
    $aventura = mysqli_query($conect,"SELECT * FROM filme  WHERE genero='aventura' ORDER BY titulo ASC")or die(myqli_erro());
    $comedia = mysqli_query($conect,"SELECT * FROM filme  WHERE genero='comedia' ORDER BY titulo ASC")or die(myqli_erro());
  ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Combo Filmes</title>




    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">





    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/jsprincipal.js"></script>
    <style>
        .slime img {
            width: 200px;
            height: 130px;
        }
    </style>
    <!-- JS DO SLIDE novo -->
    <script src="js/carrousel.js"></script>
    <link href="css/principal.css" rel="stylesheet">
</head>

<body class="container">
    <header>
        <div>
            <img src="img/logo.png" alt="logomarca" id="logo" style="z-index:1;">

            <button class="not btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
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
                        <p>Lucifer está entediado e infeliz como o Senhor do Inferno e decide tirar férias em Los
                            Angeles,
                            onde vira dono de uma casa noturna com ajuda de sua serva Mazikeen..</p>
                    </div>
                </div>
                <div class="slideimg carousel-item">
                    <a href="#">
                        <img src="img/titans.jpg" alt="Titãs">
                    </a>
                    <div class="carousel-caption" style="background-color: rgba(0,0,0,0.6);">
                        <h2>Titãs</h2>
                        <p>Titãs acompanha jovens heróis de todo o Universo DC assim que atingem a maioridade em uma
                            abordagem
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
    <div class="divtext" style="margin-bottom:-50px;">
        <h3>Em Alta</h3>
        <hr class="teal mx-auto accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;" color=#21d192>
    </div>
    <div class="slider">
        <span onmouseover="scrollEsquerda()" onmouseout="clearScroll()" class="handle handlePrev active">
            <i class="fa fa-caret-left" aria-hidden="true"></i>
        </span>

        <div id="scroller" class="row">
            <div class="row__inner">
                <?php
         while($campos = mysqli_fetch_array($query)){
           $diretorio = "img/filmes_uploads/";
           $imagem = $diretorio . $campos["url_img"];

          echo  '<div class="gui-card">';
          echo  '<div class="gui-card__media">';
          echo  '<img class="gui-card__img" src="',$imagem,'" alt="filme"  />';
          echo   '</div>';
          echo  '<div class="gui-card__details" onclick="enviar(titulo=',$campos["id_filme"],')">';
          echo    '<div class="gui-card__title">';
          echo $campos['titulo'];
          echo "<input type='hidden' id='nomefilme' value=",$campos['id_filme'],"></input>";
          echo     "</div>";
          echo "</div>";
          echo "</div>";
        }
?>
            </div>
        
            

        
        <span onmouseover="scrollDireita()" onmouseout="clearScroll()" class="handle handleNext active">
            <i class="fa fa-caret-right" aria-hidden="true"></i>
        </span>
    </div>
</div>
<div class="divtext" style="margin-bottom:-50px;">
        <h3>Ação</h3>
        <hr class="teal mx-auto accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;" color=#21d192>
    </div>
    <div class="slider">
        <span onmouseover="scrollAcaoDireita()" onmouseout="clearScrollAcao()" class="handle handlePrev active">
            <i class="fa fa-caret-left" aria-hidden="true"></i>
        </span>

        <div id="acao" class="row">
            <div class="row__inner">
                <?php
         while($campos = mysqli_fetch_array($acao)){
           $diretorio = "img/filmes_uploads/";
           $imagem = $diretorio . $campos["url_img"];

          echo  '<div class="gui-card">';
          echo  '<div class="gui-card__media">';
          echo  '<img class="gui-card__img" src="',$imagem,'" alt=""  />';
          echo   '</div>';
          echo  '<div class="gui-card__details">';
          echo    '<div class="gui-card__title">';
          echo $campos['titulo'];
          echo     "</div>";
          echo "</div>";
          echo "</div>";
        }
?>
            </div>
        
            

        
        <span onmouseover="scrollAcaoDireita()" onmouseout="clearScrollAcao()" class="handle handleNext active">
            <i class="fa fa-caret-right" aria-hidden="true"></i>
        </span>
    </div>
</div>
   
<div class="divtext" style="margin-bottom:-50px;">
        <h3>Aventura</h3>
        <hr class="teal mx-auto accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;" color=#21d192>
    </div>
    <div class="slider">
        <span onmouseover="scrollEsquerdaAventura()" onmouseout="clearScrollAventura()" class="handle handlePrev active">
            <i class="fa fa-caret-left" aria-hidden="true"></i>
        </span>

        <div id="aventura" class="row">
            <div class="row__inner">
                <?php
         while($campos = mysqli_fetch_array($aventura)){
           $diretorio = "img/filmes_uploads/";
           $imagem = $diretorio . $campos["url_img"];

          echo  '<div class="gui-card">';
          echo  '<div class="gui-card__media">';
          echo  '<img class="gui-card__img" src="',$imagem,'" alt=""  />';
          echo   '</div>';
          echo  '<div class="gui-card__details">';
          echo    '<div class="gui-card__title">';
          echo $campos['titulo'];
          echo     "</div>";
          echo "</div>";
          echo "</div>";
        }
?>
            </div>
        
            

        
        <span onmouseover="scrollDireitaAventura()" onmouseout="clearScrollAventura()" class="handle handleNext active">
            <i class="fa fa-caret-right" aria-hidden="true"></i>
        </span>
    </div>
</div>
<div class="divtext" style="margin-bottom:-50px;">
        <h3>Comedia</h3>
        <hr class="teal mx-auto accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;" color=#21d192>
    </div>
    <div class="slider">
        <span onmouseover="scrollEsquerdaComedia()" onmouseout="clearScrollComedia()" class="handle handlePrev active">
            <i class="fa fa-caret-left" aria-hidden="true"></i>
        </span>

        <div id="comedia" class="row">
            <div class="row__inner">
                <?php
         while($campos = mysqli_fetch_array($comedia)){
           $diretorio = "img/filmes_uploads/";
           $imagem = $diretorio . $campos["url_img"];

          echo  '<div class="gui-card">';
          echo  '<div class="gui-card__media">';
          echo  '<img class="gui-card__img" src="',$imagem,'" alt=""  />';
          echo   '</div>';
          echo  '<div class="gui-card__details">';
          echo    '<div class="gui-card__title">';
          echo $campos['titulo'];
          echo     "</div>";
          echo "</div>";
          echo "</div>";
        }
?>
            </div>
        
            

        
        <span onmouseover="scrollDireitaComedia()" onmouseout="clearScrollComedia()" class="handle handleNext active">
            <i class="fa fa-caret-right" aria-hidden="true"></i>
        </span>
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
                        <iframe src="http://player.twitch.tv/?channel=skipnho&autoplay=false"
                            style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;"
                            allowfullscreen scrolling="no">
                        </iframe>
                    </div>
                </div>
            </div>
    </section>
    <script>
    function enviar(titulo){
       var titulo = titulo;
       window.location='assistir.php?titulo='+ titulo;
    console.log(titulo);
}
    </script>

</body>

</html>
<?php
}
else{
    echo "<script>window.location='index.php';</script>";
}
?>