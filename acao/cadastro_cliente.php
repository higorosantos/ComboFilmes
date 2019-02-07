<?php
session_start();
include "../config.php";



$id = NULL;
$nome = $_POST["nome"];
$senha = $_POST["pwd"];
$email = $_POST["email"];
$privilegio = 1;

$query = NULL;
$resultado = NULL;

$query = mysqli_query($conect,"SELECT * FROM usuario where email = '$email'") or die(mysqli_error());

$resultado = mysqli_num_rows($query);

if ($resultado == 0){

    $query = mysqli_query($conect,"INSERT INTO usuario VALUES ('$id','$nome','$email','$senha','$privilegio')") or die(mysqli_error();


}
else{
    echo "<script>window.location='../cadastro.php?erro_usuario';</script>";
}