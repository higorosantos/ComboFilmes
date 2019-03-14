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

function scrollDireitaTerror(){
  intervalo = setInterval(function(){ document.getElementById('terror').scrollLeft += 5 }  , 5);
};
function scrollEsquerdaTerror(){
  intervalo = setInterval(function(){ document.getElementById('terror').scrollLeft -= 5 }  , 5);
};
function clearScrollTerror(){
  clearInterval(intervalo);
};

function scrollDireitaDrama(){
  intervalo = setInterval(function(){ document.getElementById('drama').scrollLeft += 5 }  , 5);
};
function scrollEsquerdaDrama(){
  intervalo = setInterval(function(){ document.getElementById('drama').scrollLeft -= 5 }  , 5);
};
function clearScrollDrama(){
  clearInterval(intervalo);
};




