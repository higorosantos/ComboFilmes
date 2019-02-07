<?php

session_start();

if(($_SESSION["privilegio"] == 1 ||  $_SESSION["privilegio"] == 2 ) && $_SESSION["acesso"] = 1){

?>

<?PHP
echo $_SESSION["nome"];

?>


<form method="POST"  action="logout.php">
<button type="submit" >Sair</button>

<?php
if($_SESSION["privilegio"] ==2){
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

