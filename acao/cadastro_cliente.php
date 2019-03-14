<?php

session_start();
validar();

function cadastrar_cliente($nome,$id,$senha,$email,$privilegio,$data_cadastro,$local,$arquivo,$imagem,$nimagem){
include "../config.php";

$query = NULL;
$resultado = NULL;

$query = mysqli_query($conect,"SELECT * FROM usuario where email = '$email'") or die(mysqli_error());

$resultado = mysqli_num_rows($query);

if ($resultado == 0){
    move_uploaded_file($imagem["tmp_name"],$arquivo);
    echo $arquivo;

    $query = mysqli_query($conect,"INSERT INTO usuario VALUES ('$id','$nome','$email','$senha','$privilegio','$data_cadastro','$nimagem')") or die(mysqli_error());

    //enviar um formulario invisivel
    echo '<form  name="formulario" method="POST" action="acesso.php">';
    echo "<input name='email' type='hidden' value='$email'></input>" ;
    echo "<input name='pwd' type='hidden' value='$senha'></input>";
    echo "</form>";
    echo '<script>document.formulario.submit();</script>';

}

else{
    echo "<script>window.location='../cadastro.php?erro_email';</script>"; 
}
}


function validar(){
date_default_timezone_set('America/Sao_Paulo');
$id = NULL;
$nome = $_POST["nome"];
$senha = $_POST["pwd"];
$email = $_POST["email"];
$cSenha = $_POST["cpwd"];
$imagem = $_FILES["imagem"];
$nimagem = $imagem["name"];
$local = "../img/perfil_usuarios/";
$arquivo = $local . $imagem["name"];
$caracteres = array("!", "@", "#", "$","%","¨","&","*","(",")","-","_","=","+");
//tamanho do array para o for funcionar.
$size = count($caracteres);
$privilegio = 1;
$data_cadastro = date('Y-m-d');


//for para o stripos funcionar , pois o stripos nao funciona com o array inteiro.
for($i = 0; $i < $size ; $i++){
    $teste = stripos($nome , $caracteres[$i]);

    if($teste != ""){
        echo "<script>window.location='../cadastro.php?erro';</script>"; 

    }
   

}

if(($nome || $senha || $email)  == ""){
    echo "<script>window.location='../cadastro.php?erro_vazio';</script>";
 
}


elseif($cSenha != $senha){
    echo "<script>window.location='../cadastro.php?erro_senha';</script>";
}

else{
    cadastrar_cliente($nome,$id,$senha,$email,$privilegio,$data_cadastro,$local,$arquivo,$imagem,$nimagem);

}

}
?>