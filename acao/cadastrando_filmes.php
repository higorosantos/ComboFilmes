<?php

include "../config.php";

$id = NULL;
$titulo = $_POST["Titulo"];
$genero = $_POST["Genero"];
$pais = $_POST["Pais"];
$censura = $_POST["Censura"];
$duracao = $_POST["Duracao"];
$sinopse = $_POST["sinopse"];
$url = $_POST["Url"];

$query = NULL;
$resultado = NULL;

$query = mysqli_query($conect,"SELECT * FROM filme WHERE titulo ='$titulo'") or die(mysqli_error());
$result = mysqli_num_rows($query);

if ($result == 0){
    $query = mysqli_query($conect,"INSERT INTO filme VALUES ('$id','$titulo','$genero','$duracao','$pais','$censura','$url','$sinopse')") or die(mysqli_error());
}
else{
    
}

?>