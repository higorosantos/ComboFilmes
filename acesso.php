<?php

session_start();
$_SESSION["acesso"] = 1;
include  "config.php";


$resultado = NULL;
$query = NULL;
$senha = $_POST["pwd"];
$email = $_POST["email"];
$acao = true;
$query = mysqli_query($conect, "SELECT * from usuario  WHERE email  = '$email' AND pwd ='$senha' ") or die(mysqli_error());
$resultado = mysqli_num_rows($query);
if($resultado == 0){
    $_SESSION["nome"] = NULL;
    
  
    echo "<script>window.location='index.php?error';</script>";
    
  
    

}
else {
 
   $registro = mysqli_fetch_row($query);
   $id = $registro[0];
   $nome = $registro[1];
   $email = $registro[2];
   $senha = $registro[3];
   $privilegio = $registro[4];
   $_SESSION["privilegio"] = $privilegio;
   $_SESSION["nome"] = $nome;
   $_SESSION["id"] = $id;   
   if($privilegio == 1){
   echo "<script>window.location='principal.php';</script>";

   /*
   0 = Banido.
   1 = Usuario comum.
   2 = Administrador
   */
}
  /*else if($privilegio == "Usuario"){,
    echo "<script>alert('Bem Vindo Ao Sistema Usuario');</script>";
    echo "<script>window.location='principal.php';</script>";

  }
*/}


?>