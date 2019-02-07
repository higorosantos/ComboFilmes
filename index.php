<?php
session_start();

if(isset($_SESSION["nome"])  != ""){
  echo "<script>window.location='principal.php';</script>";
}


?>

<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Combo Filmes</title>
  <!--font-->


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link href="css/estilo.css" rel="stylesheet">
  <script src="js/script.js"></script>

</head>

<body>
  <div class="wrapper">
    <header>
      <nav>
        <div class="menu-icon">
            
          <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="logo">
            <img src="img/Cool Text - COMBO FILMES 314260938724625.png" alt="logomarca">
        </div>
        <div class="menu">
          <ul>
            <li><a href="#">Início</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contato</a></li>
            <button type="button" class="btn btn-primary" id="login2"data-toggle="modal" data-target="#exampleModal">
            Login
            </button>
          </ul>
        </div>
      </nav>
    </header>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entrar</h5>
        <button type="button" name="close" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="d-flex justify-content-center h-100">
            <div class="card">
              <div class="card-header">
                <h3>Login</h3>
               
              </div>
              <div class="card-body">
                <form method="POST" action="acao/acesso.php">
                  <div class="input-group form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    
                  </div>
                  <div class="input-group form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" name="pwd" placeholder="Senha">
                  </div>
                  <div class="row align-items-center remember">
                    <input type="checkbox">Salvar
                  </div>
                  <div class="form-group">
                    <input type="submit" name="logar" value="Login" class="btn float-right login_btn">
                  </div>
                </form>
              </div>
              <div class="card-footer">
                <div class="d-flex justify-content-center links">
                  Não tem uma conta ?<a href="cadastro.php">Criar Conta</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <?php
              
              if(isset($_GET["error"])){

                //abrir a form de login RUAN
                //echo '';
                echo '<div class="d-flex justify-content-center">';
                echo '<div class="alert alert-danger">';
                echo '<strong>Email ou Senha Incorretos!</strong>Por favor verifique os dados digitados.';
                echo '</div>';
                echo '</div>';
              
            }
         ?> 
      </div>
    </div>
  </div>
</div>
</div>
  <!-- Footer -->
<footer class="page-footer font-small  lighten-5">

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