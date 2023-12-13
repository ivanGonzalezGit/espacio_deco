import require from fs;
const fs = require('fs');

let carpetafoto = './img/galeria/';

fs.readdir(carpetafoto, (err, archivos)=> {
    if (err){
        console.error('error al leer la carpeta: ', err);
        return;
    }
})

let contenedorGaleria = document.getElementById("contenedorGaleria");

for (let i=0;i<carpetafoto.length;i++){
    console.log(carpetafoto[i]);
}

let carro = '<img src="'+carpetafoto[0]+'">';
contenedorGaleria.innerHTML = carro;