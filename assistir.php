<?php
session_start();
include "config.php";
if(($_SESSION["privilegio"] == 1 || $_SESSION["privilegio"] == 2) && $_SESSION["acesso"] == 1){
    $query = mysqli_query($conect,"SELECT * FROM filme WHERE id_filme>=1 and id_filme<=7")or die(myqli_erro());
    $query2 = mysqli_query($conect,"SELECT * FROM filme WHERE id_filme>=8 and id_filme<=12")or die(myqli_erro());
    //$comentario= mysqli_query($conect,"SELECT * FROM comentario WHERE id_filme='$_GET['id']'")or die(mysqli_erro());

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Combo Filmes</title>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="css/assistir.css" rel="stylesheet">
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

<!-- The video -->

<div class="box container">
<div>
  <iframe width="100%" height="550" src="https://www.youtube.com/embed/ngMTM0FqBRw?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
    <div class="content" >
  <h1 class="titulo">Frozen 2</h1>
  <h6 class="genero">Genero<h6>
  <div>
      <a href="#" class="generos">Animação</a>
      <a href="#" class="generos">Humor</a>
      <a href="#" class="generos">3D</a>
  </div>
  <h6>Descrição<h6>
  <p>Em Breve na Combo Filmes. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque fugiat eius dolore impedit, expedita corrupti incidunt voluptatum id optio velit doloremque cum, fugit, atque tenetur nulla dolorum ab at officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum explicabo ratione quam, pariatur provident sequi atque excepturi odio repellendus earum non aliquid cumque doloribus velit corporis unde necessitatibus sed ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sapiente mollitia doloribus, consequuntur nobis sit sunt error excepturi earum temporibus praesentium fugit enim blanditiis quia quae pariatur dicta iure at?</p>

</div>

</div>
<section id="comentar"class="box2 container">
    <h1>Deixe seu comentário</h1>
    <form class="comentario">
      <input type="Email" name="email" class="form-control" placeholder="Email" required style="margin-bottom:10px; width:70%;">
      <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentário</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" style="width:70%;"></textarea>
    <input id="btncoment"type="submit" class="btn btn-primary" value="Publicar Comentário">
    <input id="btncoment"type="reset" onclick="myFunction()" class="btn btn-default" value="Cancelar">

  </div>
    </form>
    
    
</section>
<div class="container">
    <?php
	echo '<div class="card">';
	echo    '<div class="card-body">';
	echo        '<div class="div_coment row">';
    echo   	    '<div class="col-sm-2">
        	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
        	        <p class="text-secondary text-center">15 Minutes Ago</p>
        	    </div>';
    echo   	    '<div class="col-sm-10">
        	        <p>
        	            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

        	       </p>
        	       <div class="clearfix"></div>
        	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        	        <p>
        	            <a id="btncoment" class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
        	            <a id="btncoment" class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
        	       </p>
        	    </div>
            </div>';
            ?>
	        	<div class="card card-inner">
            	    <div class="card-body">
            	        <div class="row">
                    	    <div class="col-sm-2">
                    	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                    	        <p class="text-secondary text-center">15 Minutes Ago</p>
                    	    </div>
                    	    <div class="col-sm-10">
                    	        <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>
                    	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    	        <p>
                    	            <a id="btncoment" class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>
                    	            <a id="btncoment" class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                    	       </p>
                    	    </div>
            	        </div>
            	    </div>
	            </div>
	    </div>
	</div>
</div>
<section>

</section>
<section class="testando123 " >
  
  <h1 class="text-center" style="color:#21d192;">Recomendados</h1>
  <hr class="teal mx-auto accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;" color=#21d192>

</section>
<div class="divtext">
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
        <p>Site de Streaming de filmes e séries divididas por categorias e faixa etaria. Catalogo sempre atualizado com o melhor conteudo para toda a Família.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Categorias</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" color=#21d192>
        <p>

          <a href=#><font color=#21d192>Ação</font></a>
        </p>
        <p>

            <a href=#><font color=#21d192>Comédia</font></a>
          </p>
        <p>

            <a href=#><font color=#21d192>Terror</font></a>
          </p>
        <p>

            <a href=#><font color=#21d192>Todos</font></a>
          </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">links Úteis</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" color=#21d192>
        <p>

          <a href=#><font color=#21d192>Ajuda</font></a>
        </p>

        <p>

          <a href=#><font color=#21d192>Baixe Nosso APP</font></a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" >

        <!-- Links -->


        
        <h6 class="text-uppercase font-weight-bold">Contato</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" color=#21d192>
        <p>
          <i class="fas fa-home mr-3" ></i> Rio de Janeiro, RJ 10012, BR</p>
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
  <div class="footer-copyright text-center py-3" >© 2018 Copyright:
    <a href="index.html"><font color=#21d192>Combo Filmes</font></a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script>
</script>

</body>

</html>
<?php
}
else{
    echo "<script>window.location='index.php';</script>";
}

?>