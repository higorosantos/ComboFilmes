<?php

session_start();
if($_SESSION["privilegio"] == 2 ){
?>
<html>


<head>
    <title>Combo Filmes - Adcionar Filmes</title>
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

    <link rel="stylesheet" href="../css/cadastro_serie.css">
</head>

<label style="color: white;font-size:40px;font-family:Colibri,Comic Sans;">Cadastro de Séries</label>


<body class="dody" >
    <div class="form-group">
    <div class="container">
  <form method="POST" action="../acao/cadastrando_filmes.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="sname">Titulo da Serie</label>
      </div>
      <div class="col-75">
        <input type="text" id="sname" name="serie" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="sname">Pais de origem</label>
      </div>
      <div class="col-75">
        <input type="text" id="sname" name="Pais" placeholder="">
      </div>
    </div>
    <div class="row">
    <div class="col-25">
        <label for="Censura">Temporads</label>
      </div>
      <div class="col-75">
        <select id="Censura" name="temp" style="cursor: pointer">
        <option value="0">1</option>
          <option value="10">2</option>
          <option value="14">3</option>
          <option value="16">4</option>
          <option value="18">5+</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Censura">Censura</label>
      </div>
      <div class="col-75">
        <select id="Censura" name="Censura" style="cursor: pointer">
        <option value="0">Livre</option>
          <option value="10">10</option>
          <option value="14">14</option>
          <option value="16">16</option>
          <option value="18">+18</option>
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="Genero">Genero</label>
      </div>
      <div class="col-75">
        <select id="Genero" name="Genero" style="cursor: pointer">
          <option value="aventura">Aventura</option>
          <option value="acao">Ação</option>
          <option value="comedia">Comédia</option>
          <option value="terror">Terror</option>
          <option value="adulto">Adulto</option>
          <option value="animacao">Animação</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Sinopse</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="sinopse" placeholder="" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row" style="position:relative">
        <a class='btn btn-primary' href='javascript:;'>
           CARREGAR Serie
            <input type="file" name="imagem" style='cursor:pointer;position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info"></span>
</div>
    <div class="button" >
    <a href="../principal.php" ><button  type="button" name="retornar" id="Retornar" style ='width:200px;cursor: pointer'/>RETORNAR</button></a>
    <button  type="submit" name="cadastrar" id="Cadastrar" style ='width:200px;cursor: pointer'/>CADASTRAR</button>
    

   </div>
   
   
</div>
</body>
<?php
}
else{
    echo "<script>window.location='../principal.php';</script>";
}

?>



</html>

