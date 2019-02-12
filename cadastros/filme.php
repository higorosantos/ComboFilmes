<?php

session_start();
if($_SESSION["privilegio"] == 2 ){
?>
<html>

<head>
    <title>Combo Filmes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.5.0/lodash.min.js'></script>
    <script src="js/script.js"></script>

    <link rel="stylesheet" href="../css/cadastro_filme.css">
</head>

<body>
    <div class="form-group">
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
        <a href="../principal.php"><button class="button" type="button" name="Retornar" id="incluir" style="width:200px;border-radius:5px;" >Retornar</button>
    </form>
    </div>
</body>
<?php
}
else{
    echo "<script>window.location='../principal.php';</script>";
}

?>



</html>

