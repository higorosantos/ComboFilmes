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

    <link rel="stylesheet" href="../css/cadastro_filme.css">
</head>

<label style="color: white;font-size:40px;font-family:Colibri,Comic Sans;" id="filme">Cadastro de Filmes</label>
<label style="color: white;font-size:40px;font-family:Colibri,Comic Sans;" id="serie" class="series" >Cadastro de Series</label>

<body class="dody" >
    <div class="form-group">
    <div class="container">
  <form method="POST" action="../acao/cadastrando_filmes.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25" class="filme">
        <label for="fname" id="lname">Titulo</label>
      </div>
      <div class="col-75"  class="filme">
        <input type="text" id="fname" name="Titulo" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-25"  class="filme">
        <label for="Genero">Tipo</label>
      </div>
      <div class="col-75">
        <select id="Tipo" name="tipo" onchange="validar();" style="cursor: pointer">
          <option value="filme" >Filme</option>
          <option value="serie" >Serie</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25"  class="filme">
        <label for="fname">Pais de origem</label>
      </div>
      <div class="col-75"  class="filme">
        <input type="text" id="fname" name="Pais" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-25"  class="filme">
        <label for="fname" id="ltemporadas"  class="series" >Temporadas</label>
      </div>
      <div class="col-75">
        <select id="temporadas" name="temporadas"   class="series"  style="cursor: pointer;">
          <option value="1" >1º Temporada</option>
          <option value="2" >2º Temporada</option>
          <option value="3" >3º Temporada</option>
          <option value="4" >4º Temporada</option>
          <option value="5" >5º Temporada</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25"  class="filme">
        <label for="fname" id="lduracao">Duração</label>
      </div>
      <div class="col-75"  class="filme">
        <input type="text" id="duracao" name="Duracao" placeholder="">
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
          <option value="animacao">Drama</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25"  class="filme">
        <label for="fname" id="lduracao">Link do video</label>
      </div>
      <div class="col-75"  class="filme">
        <input type="text" id="video" name="video" placeholder="">
        <p>Obs: Colocar somente o codigo do video. Exemplo: https://www.youtube.com/watch?v=<strong>9sjWU5dGcGI </strong>, so adcionar o <strong>9sjWU5dGcGI.</strong></p>
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
           CARREGAR IMAGEM
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
<script>
   function validar() {
        var teste = document.getElementById("Tipo").value;
        if(teste == "serie"){
          document.getElementById("duracao").style.display = "none";
          document.getElementById("lduracao").style.display = "none";
          document.getElementById("filme").style.display = "none";
          document.getElementById("temporadas").style.display = "block";
          document.getElementById("ltemporadas").style.display = "block";
          document.getElementById("serie").style.display = "block";
          console.log(teste);
        }
        else{
          document.getElementById("lname").style.display = "block";
          document.getElementById("fname").style.display = "block";
          document.getElementById("duracao").style.display = "block";
          document.getElementById("lduracao").style.display = "block";
          document.getElementById("filme").style.display = "block";
          document.getElementById("lnames").style.display = "none";
          document.getElementById("temporadas").style.display = "none";
          document.getElementById("ltemporadas").style.display = "none";
          document.getElementById("serie").style.display = "none";
        }
        
      
    }
</script>
<?php
}
else{
    echo "<script>window.location='../principal.php';</script>";
}

?>



</html>

