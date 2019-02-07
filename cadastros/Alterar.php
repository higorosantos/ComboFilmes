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
    <form name="form" method="POST" action="../acao/cadastrando_filme.php">
        Titulo do Filme <input type="text" name="Titulo"Style='border-radius:5px;'  /><br /><br />
        Genero <input type="text" name="Genero"Style='border-radius:5px;'readonly /><br /><br />
        Pais de origem <input type="test" name="Pais" Style='border-radius:5px;'readonly/><br /><br />
        <div style='float:right;margin-right:55px;'>
            <label for="inputEvento"Style='border-radius:5px;'>Censura</label>
            <select name="Censura" id="Censura"readonly /><br /><br />
            <option value="0">Livre</option>
            <option value="10">10</option>
            <option value="14">14</option>
            <option value="16">16</option>
            <option value="18">18+</option>


            </select><br><br><br>
        </div>

        Duração <input type="text" name="Duracao" style='width:100px;border-radius:5px;'readonly />

        <label >Sinopse</label> <textarea rows="4" cols="50"  name="sinopse" style='width:350px;height:100px;border-radius:5px;'readonly></textarea><br /><br />
        URL da imagem <input type="text" name="Url"style='border-radius:5px;><br'readonly /><br />
        <button class="button" type="submit" name="Alterar" id="incluir" style='width:100px;border-radius:5px;' >Alterar</button>
        <button class="button" type="submit" name="Excluir" id="incluir" style='width:100px;border-radius:5px;' >Exluir</button>
        <a href=""><button class="button" type="button" name="Retornar" id="incluir" style="width:100px;border-radius:5px;" >Retornar</button>
    </form>

</body>
<?php
}
else{
    echo "<script>window.location='../principal.php';</script>";
}

?>



</html>

