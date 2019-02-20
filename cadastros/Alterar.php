<?php
include "../config.php";
session_start();
if($_SESSION["privilegio"] == 2 ){
?>
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
  <link href="../css/alterar.css" rel="stylesheet">
  <script src="js/script.js"></script>


</head>

<body>
<section class="">
<form class="form1 container" method="POST" action="#" style="width:40%; margin-top:100px;">
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
    <div class>
      <input type="email" class="form-control" name="nome" id="inputEmail3" value="<?php echo $_POST["nome"]; ?>" placeholder="Email" readonly>
    </div>
  </div>  
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="">
      <input type="email" name="email" class="form-control" value="<?php echo $_POST["email"]; ?>" id="inputEmail3" placeholder="Email" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Senha</label>
    <div class="">
      <input type="password" name="pwd" class="form-control" id="inputEmail3" placeholder="Senha" value="<?php echo $_POST["pwd"]; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-form-label">Privilegio</label>
    <div class="">
    <select class="custom-select" name="previlegio">
  <option value="1" <?php echo $_POST["privilegio"]=='Usuario'?'selected':'';?>>Usuário</option>
  <option value="2" <?php echo $_POST["privilegio"]=='Administrador'?'selected':'';?>>Administrador</option>
  
</select>
    </div>
    <div class="form-group">
    <div class="btn">
      <button type="submit" name="alterar" class="btn btn-primary">Confirma</button>
      <button type="submit" class="btn btn-primary">Cancelar</button>
    </div>
  </div>
  </div>
    
  </div>


</form>
<?php

$query = NULL;
$resultado = NULL;
$email = $_POST["email"];
$senha = $_POST["pwd"];
$privilegio = $_POST["privilegio"];
if(isset($_POST["alterar"])){
  $query = mysqli_query($conect,"UPDATE usuario SET email='$email',pwd='$senha',privilegio='$privilegio' WHERE email = '$email'")or die(mysqli_error());

}
?>
</body>
<?php
}
else{
    echo "<script>window.location='../principal.php';</script>";
}

?>

 



</html>

