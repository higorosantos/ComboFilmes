
<html>

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
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.5.0/lodash.min.js'></script>
    <link href="css/cadastro_filme.css" rel="stylesheet">
    <script src="js/script.js"></script>

</head>
<div class="wrapper">
    <header  style="z-index:1">
      <nav  style="z-index:2">
        <div class="menu-icon">
            
          <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="logo img-responsive" >
            <img src="img/Cool Text - COMBO FILMES 314260938724625.png" alt="logomarca">
        </div>
         <div >
          <ul>
            <button type="button" class="btn btn-primary" id="login2"data-toggle="modal" data-target="#exampleModal">
            Login
            </button>
          </ul>
        </div>
      </nav>
    </header>
<body class="formcad">
<section class="container">
<form class="form1">
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
    <div class>
      <input type="email" class="form-control" name="nome" id="inputEmail3" placeholder="Email">
    </div>
  </div>  
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Senha</label>
    <div class="">
      <input type="password" name="pwd" class="form-control" id="inputEmail3" placeholder="Senha">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-form-label">Confirma Senha</label>
    <div class="">
      <input type="password" name="cpwd"class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
    <div class="form-group">
    <div class="">
      <button type="submit" class="btn btn-primary">Confirma</button>
      <button type="submit" class="btn btn-primary">Cancelar</button>
    </div>
  </div>
  </div>
  
</form>

         <?php
      if(isset($_GET["erro_email"])){
        echo '<div class="d-flex justify-content-center">';
        echo '<div class="alert alert-danger">';
        echo '<strong>Email Já Cadastrado! Por favor digite um email valido.';
        echo '</div>';
        echo '</div>';
      }
      if(isset($_GET["erro_senha"])){
        echo '<div class="d-flex justify-content-center">';
        echo '<div class="alert alert-danger">';
        echo '<strong>As Senhas não conferem! Por favor verifique a senha digitada.';
        echo '</div>';
        echo '</div>';
      }
      if(isset($_GET["erro_vazio"])){
        echo '<div class="d-flex justify-content-center">';
        echo '<div class="alert alert-danger">';
        echo '<strong>Campo Vazio! Por favor preencha todos os campos.';
        echo '</div>';
        echo '</div>';
      }
      if(isset($_GET["erro"])){
        echo '<div class="d-flex justify-content-center">';
        echo '<div class="alert alert-danger">';
        echo '<strong>Nome Invalido! Por favor digite um nome valido sem caracteres especiais.';
        echo '</div>';
        echo '</div>';
      }
    ?>
    </section>
 

</body>

</html>

