<?php

include "../config.php";
$query = NULL;
$resultado = NULL;

if(isset($_POST["pesquisa"])){

$pesquisa = $_POST["pesquisa"];

$query = mysqli_query($conect, "SELECT * FROM usuario WHERE nome LIKE  '$pesquisa%' ") or die(mysqli_error());

}

?>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
  <head>
    <title>Awesome Search Box</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/searchbar.css">
  </head>

  <!-- Coded with love by Mutiullah Samim-->
  <body>
    <div>
    <form method="POST" action="#">
      <div class="d-flex justify-content-center">
        <div class="searchbar">
          <input class="search_input" name="pesquisa" value="" type="text" name="" placeholder="Digite o nome do usuario...">
          <!--<a href="#" class="search_icon"><i class="fas fa-search"></i></a> -->
          <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
         </div>
      </form>
    </div>
   <?php
    if(isset($_POST["pesquisa"])){
      while($campos = mysqli_fetch_array($query)){
        echo '<form method="POST"  action="Alterar.php" class="formsearch form-inline justify-content-center container "  style="background-color:white; margin-top:25px; name="form">';
        echo '<div class="form-group ">';
        echo '<input type="text" readonly class="form-control-plaintext" id="staticEmail2" style="width:50%" value=',$campos["id"],' >';
        echo '</div>';
        echo '<div class="form-group ">';
        echo '<input type="text" readonly class="form-control-plaintext" name="nome" id="staticEmail2" value=',$campos["nome"],' >';
        echo '</div>';
        echo '<div class="form-group mx-sm-3 ">';
        echo ' <input type="email" readonly class="form-control-plaintext" name="email" id="inputPassword2" value=',$campos["email"],'>';
        echo '</div>';
        echo '<div class="form-group mx-sm-3 ">';
        echo ' <input type="password" readonly class="form-control-plaintext" name="pwd" id="inputPassword2" value=',$campos["pwd"],'>';
        echo '</div>';
        echo '<div class="form-group mx-sm-3 ">';
        if(isset($_POST["pesquisa"])){
          $privilegio = $campos["privilegio"];

          if($campos["privilegio"] == 1){
            $privilegio = "Usuario";
          }
          else{
            $privilegio = "Administrador";
          }
        }
        echo '<input type="text" readonly name="privilegio" class="form-control-plaintext" id="inputPassword2" style="width:70%" value=',$privilegio,'>';
        echo '</div>';
        echo '<button type="submit" class="btn btn-primary" name="alterar" style="margin-bottom:0;">Alterar</button>';
        echo '</form>';
      }
    } 
?>

  </body>
</html>
