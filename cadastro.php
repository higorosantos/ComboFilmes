
<html>

<head>
    <title>Combo Filmes</title>
    <link rel="stylesheet" href="css/cadastro_filme.css">
</head>

<body class="dody">
    <form name="form" method="POST" action="acao/cadastro_cliente.php">
        Nome: <input type="text" name="nome" Style='border-radius:5px;' placeholder="Digite seu nome" /><br /><br />
        Email: <input type="email" name="email"Style='border-radius:5px;' placeholder="Digite seu email" /><br /><br />
        Senha: <input type="password" name="pwd" placeholder="Digite uma senha" Style='border-radius:5px;'/><br /><br />
        Confirma senha: <input type="password" placeholder="Confirme sua senha" name="cpwd" Style='border-radius:5px;' />
         <br>
         <button class="button" type="submit" name="Cadastrar" id="incluir" style='width:100px;border-radius:5px; float:right;' >Cadastrar</button>
         <?php
      if(isset($_GET["erro_usuario"])){
        echo '<div class="d-flex justify-content-center">';
        echo '<div class="alert alert-danger">';
        echo '<strong>Email Já Cadastrado! Por favor digite um email valido.';
        echo '</div>';
        echo '</div>';
      }
    ?>
    </form>
   
    

</body>




</html>

