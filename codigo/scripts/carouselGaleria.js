let contenedor = document.getElementById("contenedor");
let arrFotosGaleria = ["c1.jpg", "c2.jpg", "c3.jpg"];
let contador =0;


function incrementarFoto(){
    contador++;
    if(contador>2){
        contador = 0;
    }
    let foto = '<img src="./img/' + arrFotosGaleria[contador] + '">';
    contenedor.innerHTML = foto;
}

function decrementarFoto(){
    contador--;
    if(contador<0){
        contador = 2;
    }
    let foto = '<img src="./img/' + arrFotosGaleria[contador] + '">';
    contenedor.innerHTML = foto;
}

function fotoInicial(){
    let foto = '<img src="./img/' + arrFotosGaleria[0] + '">';
    contenedor.innerHTML = foto;
}

window.addEventListener("load", fotoInicial);