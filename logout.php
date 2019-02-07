<?php

session_start();

unset($_SESSION["privilegio"]);
unset($_SESSION["nome"]);
unset($_SESSION["id"]);


echo "<script>window.location='index.php';</script>";


?>