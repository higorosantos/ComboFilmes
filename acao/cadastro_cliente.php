<?php
session_start();
include "../config.php";
date_default_timezone_set('America/Sao_Paulo');



$id = NULL;
$nome = $_POST["nome"];
$senha = $_POST["pwd"];
$email = $_POST["email"];
$privilegio = 1;
$data_cadastro = date('Y-m-d');

$query = NULL;
$resultado = NULL;

$query = mysqli_query($conect,"SELECT * FROM usuario where email = '$email'") or die(mysqli_error());

$resultado = mysqli_num_rows($query);

if ($resultado == 0){

    $query = mysqli_query($conect,"INSERT INTO usuario VALUES ('$id','$nome','$email','$senha','$privilegio','$data_cadastro')") or die(mysqli_error());


}
else{
    echo "<script>window.location='../cadastro.php?erro_usuario';</script>";
}