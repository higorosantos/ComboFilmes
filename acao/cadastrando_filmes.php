<?php
if($_POST["Titulo"] == "" && $_POST["sinopse"] == ""){
    echo "<script>alert('Há campos em branco!')</script>";
    echo "<script>window.location='../filmes/cadastro_filme.php';</script>";


}
else{
    cadastrarFilme();
}
function cadastrarFilme(){
date_default_timezone_set('America/Sao_Paulo');

include "../config.php";

$id = NULL;
$tipo = $_POST["tipo"];
$titulo = $_POST["Titulo"];
$genero = $_POST["Genero"];
$pais = $_POST["Pais"];
$censura = $_POST["Censura"];
$duracao = $_POST["Duracao"];
$sinopse = $_POST["sinopse"];
$video = $_POST["video"];
$imagem = $_FILES["imagem"];
$nimagem = $imagem["name"];
$local = "../img/filmes_uploads/";
$arquivo = $local . $imagem["name"];
$dataCadastro = date('Y-m-d H:i:s');;
$temporada = $_POST["temporadas"];



$query = NULL;


$query = mysqli_query($conect,"SELECT * FROM filme WHERE titulo ='$titulo'")or die(mysqli_error());
$result = mysqli_num_rows($query);

if ($result == 0){
    move_uploaded_file($imagem["tmp_name"],$arquivo);
    $query = mysqli_query($conect,"INSERT INTO filme VALUES ('$id','$tipo','$titulo','$genero','$duracao','$temporada','$pais','$censura','$nimagem','$video','$sinopse','$dataCadastro')") or die(mysqli_error());
    echo "<script>alert('Cadastro de filme efetuado com sucesso!');</script>";
    echo "<script>window.location='../filmes/cadastro_filme.php';</script>";
}
else{
    echo "<script>alert('Filme ja cadastrado!');</script>";
    echo "<script>window.location='../filmes/cadastro_filme.php';</script>";
    
}

}

?>