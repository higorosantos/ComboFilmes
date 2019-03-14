<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
include "config.php";
$id_filme =  $_GET['titulo'];
if(($_SESSION["privilegio"] == 1 || $_SESSION["privilegio"] == 2) && $_SESSION["acesso"] == 1){
   
    $filme = mysqli_query($conect,"SELECT * FROM filme WHERE id_filme='$id_filme'")or die(myqli_erro());

    $resultado = mysqli_fetch_row($filme);
    $titulo =  $resultado[2];
    $genero = $resultado[3];
    $sinopse = $resultado[10];
    $duracao = $resultado[4];
    $censura = $resultado[7];
    $pais = $resultado[6];
    $filme = $resultado[9];
    $temporada = $resultado[5];
    $tipo = $resultado[1];

    if($censura == "0"){
        $censura = "Livre";
    }
    else{
        $censura = $censura . " Anos";
    }
    
    $recomendado = mysqli_query($conect,"SELECT * FROM filme WHERE genero='$genero'")or die(myqli_erro()); 
    $l_comentarios = mysqli_query($conect,"SELECT * FROM comentario WHERE id_filme='$id_filme' ORDER BY  data_comentario DESC");
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Combo Filmes</title>



  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <link href="css/assistir.css" rel="stylesheet">
  <script src="js/script.js"></script>
  <script src="js/carrousel.js"></script>
  <link href="css/carrousel.css" rel="stylesheet">

  <style>
    .slime img {
      width: 295px;
      height: 150px;

    }
  </style>
</head>

<body class=>
  <header>
    <div>
      <img src="img/logo.png" alt="logomarca" id="logo" style="z-index:1;">

      <button class="not btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
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
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <img class="fotoperfil" src="img/perfil_usuarios/<?php echo $_SESSION["fPerfil"]; ?>" alt="Foto de Perfil">
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

    <!-- The video -->

    <div class="box container">
      <div>
        <iframe width="100%" height="550" src="<?php echo "https://www.youtube.com/embed/",$filme; ?>" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="content">
        <h1 class="titulo"><?php echo $titulo;  ?></h1>
        <h6 class="genero">Genero<h6>
            <div>
              <a href="#" class="generos"><?php echo ucfirst($genero); ?></a>
            </div>
            
                <div>
                <?php
                if($tipo == "serie"){
                  echo "<h6 class='genero'>Temporada<h6>";
                  echo " <a href='#' class='generos'>$temporada º Temporada</a>";
                  
                }
                else{
                  echo "<h6 class='genero'>Duração<h6>";
                  echo " <a href='#' class='generos'> $duracao Min</a>";

                }
                ?>
                </div>
                <h6 class="genero">Censura<h6>
                    <div>
                      <a href="#" class="generos"><?php echo $censura; ?></a>
                    </div>
                    <h6 class="genero">País de origem<h6>
                        <div>
                          <a href="#" class="generos"><?php echo $pais ; ?></a>
                        </div>
                        <h6>Descrição<h6>
                            <p><?php echo $sinopse; ?></p>

      </div>

    </div>
    <section id="comentar" class="box2 container">
      <h1>Deixe seu comentário</h1>
      <form class="comentario" method="POST" action="#">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Comentário</label>
          <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" rows="6" style="width:70%;"
            required></textarea>
          <input id="btncoment" type="submit" name="enviarComentario" class="btn btn-primary"
            value="Publicar Comentário">
          <input id="btncoment" type="reset" onclick="myFunction()" class="btn btn-default" value="Cancelar">

        </div>
      </form>
      <?php 
    if(isset($_POST["enviarComentario"])){
    $id = NULL;
    $nome_usuario = $_SESSION["nome"];
    $id_fime  = $_GET["titulo"];
    $texto = $_POST["texto"];
    $foto = $_SESSION["fPerfil"];
    $dataComentario = date('Y-m-d H:i:s');;
    $i_comentario = mysqli_query($conect, "INSERT INTO comentario VALUES('$id','$nome_usuario','$id_fime','$texto','$foto','$dataComentario')")or die(mysqli_error());
    echo "<script>window.location='assistir.php?titulo=",$id_filme,"';</script>";
  }
    ?>


    </section>
    <div class="container">
      <?php
  
  while($comentarios = mysqli_fetch_array($l_comentarios)){
  
	echo '<div class="card">';
	echo    '<div class="card-body">';
	echo        '<div class="div_coment row">';
    echo   	    '<div class="col-sm-2">
        	        <img  class="fotocomentario" src="img/perfil_usuarios/',$comentarios["foto_perfil"],'" class="img img-rounded img-fluid"/>
        	        
        	    </div>';
    echo   	    '<div class="col-sm-10">';
    echo   	        '<p>';
     echo   	            '<a class="float-left" href="#"><strong>',$comentarios["nome_usuario"],'</strong></a>';
      echo 	            '<span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

        	       </p>';
    echo       '<div class="clearfix"></div>';
       echo 	        '<p>',$comentarios["comentario"],'</p>';
       if($_SESSION["privilegio"]== 2){
        echo	        '<p>';

       
        echo	            '
        	            <button type="submit" id="btncoment" class="float-right btn text-white btn-danger"> <i class="fa ">Remover Comentario</i></button>
                 </p>';
       }
        echo	    '</div>
            </div>
            </div>
            </div>
            ';
          }
            ?>
  
   
    <section>

    </section>
    <section class="testando123 ">

      <h1 class="text-center" style="color:#21d192;">Recomendados</h1>
      <hr class="teal mx-auto accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;" color=#21d192>

    </section>
    <div class="divtext">
      <div class="slider">
        <span onmouseover="scrollAcaoEsquerda()" onmouseout="clearScrollAcao()" class="handle handlePrev active">
          <i class="fa fa-caret-left" aria-hidden="true"></i>
        </span>

        <div id="acao" class="row">
          <div class="row__inner">
            <?php
         while($campos = mysqli_fetch_array($recomendado)){
           $diretorio = "img/filmes_uploads/";
           $imagem = $diretorio . $campos["url_img"];

          echo  '<div class="gui-card">';
          echo  '<div class="gui-card__media">';
          echo  '<img class="gui-card__img" src="',$imagem,'" alt=""  />';
          echo   '</div>';
          echo  '<div class="gui-card__details" onclick="enviar(titulo=',$campos["id_filme"],')">';
          echo    '<div class="gui-card__title">';
          echo $campos['titulo'];
          echo     "</div>";
          echo "</div>";
          echo "</div>";
        }
?>
          </div>
          <span onmouseover="scrollAcaoDireita()" onmouseout="clearScrollComedia()" class="handle handleNext active">
            <i class="fa fa-caret-right" aria-hidden="true"></i>
          </span>
        </div>
      </div>
      <!-- Optional: some overlay text to describe the video -->

      <!-- Footer -->
      <footer class="page-footer font-small mt-5 lighten-5">

        <div style="background-color: #21d192;">
          <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

              <!-- Grid column -->
              <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                <h6 class="mb-0">FIQUE SEMPRE CONECTADO EM NOSSAS REDES SOCIAIS.</h6>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6 col-lg-7 text-center text-md-right">

                <!-- Facebook -->
                <a class="fb-ic">
                  <i class="fab fa-facebook-f white-text mr-4"> </i>
                </a>
                <!-- Twitter -->
                <a class="tw-ic">
                  <i class="fab fa-twitter white-text mr-4"> </i>
                </a>
                <!-- Google +-->
                <a class="gplus-ic">
                  <i class="fab fa-google-plus-g white-text mr-4"> </i>
                </a>
                <!--Linkedin -->
                <a class="li-ic">
                  <i class="fab fa-linkedin-in white-text mr-4"> </i>
                </a>
                <!--Instagram-->
                <a class="ins-ic">
                  <i class="fab fa-instagram white-text"> </i>
                </a>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row-->

          </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

          <!-- Grid row -->
          <div class="row mt-3 dark-grey-text">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

              <!-- Content -->
              <h6 class="text-uppercase font-weight-bold">Combo Filmes</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" color=#21d192>
              <p>Site de Streaming de filmes e séries divididas por categorias e faixa etaria. Catalogo sempre
                atualizado com o melhor conteudo para toda a Família.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">Categorias</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" color=#21d192>
              <p>

                <a href=#>
                  <font color=#21d192>Ação</font>
                </a>
              </p>
              <p>

                <a href=#>
                  <font color=#21d192>Comédia</font>
                </a>
              </p>
              <p>

                <a href=#>
                  <font color=#21d192>Terror</font>
                </a>
              </p>
              <p>

                <a href=#>
                  <font color=#21d192>Todos</font>
                </a>
              </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">links Úteis</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" color=#21d192>
              <p>

                <a href=#>
                  <font color=#21d192>Ajuda</font>
                </a>
              </p>

              <p>

                <a href=#>
                  <font color=#21d192>Baixe Nosso APP</font>
                </a>
              </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

              <!-- Links -->



              <h6 class="text-uppercase font-weight-bold">Contato</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" color=#21d192>
              <p>
                <i class="fas fa-home mr-3"></i> Rio de Janeiro, RJ 10012, BR</p>
              <p>
                <i class="fas fa-envelope mr-3"></i> suporte@combofilmes.com</p>
              <p>
                <i class="fas fa-phone mr-3"></i> + 55 21 9999-9998</p>
              <p>
                <i class="fas fa-print mr-3"></i> + 55 21 9999-9999</p>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href="index.html">
            <font color=#21d192>Combo Filmes</font>
          </a>
        </div>
        <!-- Copyright -->

      </footer>
      <!-- Footer -->


      <script>

        function enviar(titulo) {
          var titulo = titulo;
          window.location = 'assistir.php?titulo=' + titulo;
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