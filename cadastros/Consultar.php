<?php

include "../config.php";
$query = NULL;
$resultado = NULL;
$pesquisa = $_POST["pesquisa"];



$query = mysqli_query($conect, "SELECT * FROM usuario WHERE nome LIKE  '$pesquisa%' ") or die(mysqli_error());

$resultado =  mysqli_fetch_row($query);
$nome = $resultado[1];
$email = $resultado[2];
$senha = $resultado[3];
$privilegio = $resultado[4];




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
    <div class="form-group row"> 
    <form class="form-inline justify-content-center container " style="margin-top:50px; background-color:white;" id="formsearch">
  <div class="form-group ">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="<?php echo $nome; ?>" >
</div>
<div class="form-group row"> 
  <div class="form-group mx-sm-3 ">
    <input type="email" readonly class="form-control-plaintext" id="inputPassword2" placeholder="" value="<?php echo $email; ?>">
  </div>
</div>
<div class="form-group row"> 
  <div class="form-group mx-sm-3 ">
    <input type="password" readonly class="form-control-plaintext" id="inputPassword2" placeholder="" value="<?php echo $senha; ?>">
  </div>
</div>
<div class="form-group row"> 
  <div class="form-group mx-sm-3 ">
    <input type="text" readonly class="form-control-plaintext" id="inputPassword2" placeholder="" value="<?php if($privilegio == 1){
        echo "Usuario";
    } 
    else{
        echo "Administrador";
    }?>">
  </div>
</div>
  <button type="submit" class="btn btn-primary " style="margin-bottom:0;">Ver</button>
</form>
<form class="form-inline justify-content-center container " style="margin-top:50px; background-color:white;" id="formsearch">
  <div class="form-group ">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="<?php echo $nome; ?>" >
</div>
<div class="form-group row"> 
  <div class="form-group mx-sm-3 ">
    <input type="email" readonly class="form-control-plaintext" id="inputPassword2" placeholder="" value="<?php echo $email; ?>">
  </div>
</div>
<div class="form-group row"> 
  <div class="form-group mx-sm-3 ">
    <input type="password" readonly class="form-control-plaintext" id="inputPassword2" placeholder="" value="<?php echo $senha; ?>">
  </div>
</div>
<div class="form-group row"> 
  <div class="form-group mx-sm-3 ">
    <input type="text" readonly class="form-control-plaintext" id="inputPassword2" placeholder="" value="<?php if($privilegio == 1){
        echo "Usuario";
    } 
    else{
        echo "Administrador";
    }?>">
  </div>
</div>
  <button type="submit" class="btn btn-primary " style="margin-bottom:0;">Ver</button>
</form>

  </body>
</html>
