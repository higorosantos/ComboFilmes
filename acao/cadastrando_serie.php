<?php

include "../config.php";

$id = NULL;
$titulo = $_POST["serie"];
$genero = $_POST["Genero"];
$pais = $_POST["Pais"];
$censura = $_POST["Censura"];
$temporada = $_POST["temporada"];
$sinopse = $_POST["sinopse"];
$imagem = $_FILES["imagem"];
$nimagem = $imagem["name"];
$local = "../img/filmes_uploads/";
$arquivo = $local . $imagem["name"];



$query = NULL;


$query = mysqli_query($conect,"SELECT * FROM filme WHERE titulo ='$titulo'") or die(mysqli_error());
$result = mysqli_num_rows($query);

if ($result == 0){
    move_uploaded_file($imagem["tmp_name"],$arquivo);
    $query = mysqli_query($conect,"INSERT INTO filme VALUES ('$id','$titulo','$genero','$temporada','$pais','$censura','$nimagem','$sinopse')") or die(mysqli_error());
    echo "<script>alert('Cadastro de serie efetuado com sucesso!');</script>";
    echo "<script>window.location='../filmes/cadastro_serie.php';</script>";
}
else{
    echo "<script>alert('Filme ja cadastrado!');</script>";
    echo "<script>window.location='../filmes/cadastro_serie.php';</script>";
    
}

?>