<?php

session_start();
if($_SESSION["privilegio"] == 2 ){
?>
<html>

<head>
    <title>Combo Filmes</title>
    <link rel="stylesheet" href="../css/cadastro_filme.css">
</head>

<body class="dody">
    <form name="form" method="POST" action="../acao/cadastrando_filmes.php">
        Titulo do Filme <input type="text" name="Titulo"Style='border-radius:5px;' /><br /><br />
        Genero <input type="text" name="Genero"Style='border-radius:5px;' /><br /><br />
        Pais de origem <input type="test" name="Pais" Style='border-radius:5px;'/><br /><br />
        <div style='float:right;margin-right:55px;'>
            <label for="inputEvento"Style='border-radius:5px;'>Censura</label>
            <select name="Censura" id="Censura" /><br /><br />
            <option value="0">Livre</option>
            <option value="10">10</option>
            <option value="14">14</option>
            <option value="16">16</option>
            <option value="18">18+</option>


            </select><br><br><br>
        </div>

        Duração <input type="text" name="Duracao" style='width:100px;border-radius:5px;' />

        <label >Sinopse</label> <textarea rows="4" cols="50"  name="sinopse" style='width:350px;height:100px;border-radius:5px;'></textarea><br /><br />
        URL da imagem <input type="text" name="Url"style='border-radius:5px;><br' /><br />
        <button class="button" type="submit" name="Cadastrar" id="incluir" style='width:200px;border-radius:5px;' >Cadastrar</button>
        <a href="../principal.php"><button class="button" type="button" name="Retornar" id="incluir" style="width:200px;border-radius:5px;" >Retornoar</button>
    </form>

</body>
<?php
}
else{
    echo "<script>window.location='../principal.php';</script>";
}

?>



</html>

