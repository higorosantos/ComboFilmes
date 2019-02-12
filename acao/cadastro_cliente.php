<?php

session_start();
validar();

function cadastrar_cliente($nome,$id,$senha,$email,$privilegio,$data_cadastro){
include "../config.php";

$query = NULL;
$resultado = NULL;

$query = mysqli_query($conect,"SELECT * FROM usuario where email = '$email'") or die(mysqli_error());

$resultado = mysqli_num_rows($query);

if ($resultado == 0){

    $query = mysqli_query($conect,"INSERT INTO usuario VALUES ('$id','$nome','$email','$senha','$privilegio','$data_cadastro')") or die(mysqli_error());
     
    echo "<form type='hidden'>
    <labe>
    </form>"


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
    cadastrar_cliente($nome,$id,$senha,$email,$privilegio,$data_cadastro);

}

}



?>