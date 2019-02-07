<?php

session_start();

echo $_SESSION["nome"];


?>

<form method="POST"  action="logout.php">
<button type="submit" >Sair</button>
</form>