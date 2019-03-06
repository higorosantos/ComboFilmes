<?php 
include "../config.php";
$arquivo = 'usuarios.xls';

$tabela = '<table border="1">';
$tabela .= '<tr>';
$tabela .= '<td><b>Email</b></td>';
$tabela .= '<td><b>Nome</b></td>';
$tabela .= '<td><b>Privilegio</b></td>';
$tabela .= '</tr>';

$resultado = mysqli_query($conect,'SELECT * FROM usuario');

while($dados = mysqli_fetch_array($resultado))
{
$privilegio = $dados['privilegio'];
$tabela .='<tr>';
$tabela .='<td>'.$dados['email'].'</td>';
if($privilegio == 1){
    $privilegio = "Usuario";
}
else{
    $privilegio = "Administrador";
}
$tabela .='<td>'.$dados['nome'].'</td>';
$tabela .='<td>'.$privilegio.'</td>';
$tabela .='</tr>';    
}

$tabela .= '</table>';

header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');
header('Content-type: application/x-msexcel');
header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
echo $tabela;

echo "<script>alert('Relatorio Gerado com sucesso!')";
echo "<script>window.location='../principal.php';</script>";


?>