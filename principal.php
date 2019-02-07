<?php
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s');

session_start();

if(($_SESSION["privilegio"] == 1 ||  $_SESSION["privilegio"] == 2 ) && $_SESSION["acesso"] = 1){

  
   $hora1 =  date('d') * 24;
   $hora2 =  (date('d')+5) * 24;
   echo $hora1;


   echo "<br>" ,$hora2;
   echo "<br>" ,($hora2 - $hora1) / 24;
?>

<?php
echo $_SESSION["nome"];

?>


<form method="POST"  action="logout.php">
<button type="submit" >Sair</button>

<?php
if($_SESSION["privilegio"] == 2){
echo '<a href="cadastros/filme.php"><button type="button"  >Cadastrar Filmes</button></a>';
echo '</form>';
}
?>





<?php
}

else{
    echo "<script>window.location='index.php';</script>";
}
?>

