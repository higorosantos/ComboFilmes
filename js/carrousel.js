var intervalo;

function scrollDireita(){
  intervalo = setInterval(function(){ document.getElementById('scroller').scrollLeft += 5 }  , 5);
};
function scrollEsquerda(){
  intervalo = setInterval(function(){ document.getElementById('scroller').scrollLeft -= 5 }  , 5);
};
function clearScroll(){
  clearInterval(intervalo);
};

function scrollAcaoDireita(){
  intervalo = setInterval(function(){ document.getElementById('acao').scrollLeft += 5 }  , 5);
};
function scrollAcaoEsquerda(){
  intervalo = setInterval(function(){ document.getElementById('acao').scrollLeft -= 5 }  , 5);
};
function clearScrollAcao(){
  clearInterval(intervalo);
};


function scrollDireitaAventura(){
  intervalo = setInterval(function(){ document.getElementById('aventura').scrollLeft += 5 }  , 5);
};
function scrollEsquerdaAventura(){
  intervalo = setInterval(function(){ document.getElementById('aventura').scrollLeft -= 5 }  , 5);
};
function clearScrollAventura(){
  clearInterval(intervalo);
};

function scrollDireitaComedia(){
  intervalo = setInterval(function(){ document.getElementById('comedia').scrollLeft += 5 }  , 5);
};
function scrollEsquerdaComedia(){
  intervalo = setInterval(function(){ document.getElementById('comedia').scrollLeft -= 5 }  , 5);
};
function clearScrollComedia(){
  clearInterval(intervalo);
};




