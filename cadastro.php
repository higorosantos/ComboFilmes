
<html>

<head>
    <title>Combo Filmes</title>
    <link rel="stylesheet" href="css/cadastro_filme.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body class="dody">
    <form name="form" class="" method="POST" action="acao/cadastro_cliente.php">
        Nome: <input type="text" name="nome" id="nome" Style='border-radius:5px;' placeholder="Digite seu nome" /><br /><br />
        Email: <input type="email" name="email" id="email" Style='border-radius:5px;' placeholder="Digite seu email" /><br /><br />
        Senha: <input type="password" name="pwd" id="pwd" placeholder="Digite uma senha" Style='border-radius:5px;'/><br /><br />
        Confirma senha: <input type="password" id="cpwd" placeholder="Confirme sua senha" name="cpwd" Style='border-radius:5px;' />
         <br>
         <button class="button" type="submit" name="Cadastrar"  id="incluir" style='width:100px;border-radius:5px; float:right;' >Cadastrar</button>
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
    </form>
 

</body>

</html>

