const contenedor = document.getElementsByClassName("container");
const titulo = document.getElementById("header2");
titulo.innerHTML = `
  <script type="application/processing">
    PFont miFuente;

    String[] titulo = {"R", "e", "g", "y", " ", "E", "s", "p", "a", "c", "i", "o", " ", "D", "e", "c", "o"};
    int [] espacios = {25,30,30,32,24,24,31,30,30,31,29,29,24,24,32,31,31,29};
    int acumulador = 12;

    int j = 0;
    int currentIndex = 0;
    int nextLetterTime = 0;
    int letterDelay = 10; // Tiempo en milisegundos entre cada letra

    void setup (){
      size(515, 100);
      fill(0);
      miFuente = createFont("Courier Prime", 48);
      textFont(miFuente);
      background(232, 228, 227); 
      frameRate(5); // Reducir la velocidad de fotogramas por segundo
    }

    void draw() {
    if (millis() > nextLetterTime && currentIndex < titulo.length) {
      text(titulo[currentIndex], acumulador, 50);
      j++;
      acumulador=acumulador+espacios[j];
      currentIndex++;
      nextLetterTime = millis() + letterDelay;
    }
    }
  </script>
  <canvas> </canvas>`;


function ordenarDivs() {
  const headerHTML = `
    <div class="datos">
      <p><i class="fa-brands fa-whatsapp" style="color: #034132;"></i> 11-7144-7569</p>
      <a href="https://www.facebook.com/profile.php?id=100083780238446"><p><i class="fa-brands fa-facebook-f" style="color: #034132;"></i> Facebook</p></a>
      <a href="https://www.instagram.com/regyespaciodeco/"><p><i class="fa-brands fa-instagram" style="color: #034132;"></i> Instagram</p></a>
      <p id="mail">regy.espaciodeco@gmail.com</p>
    </div>
  `;

  const divfantasma1 = document.getElementById('fantasma1');
  const divfantasma2 = document.getElementById('fantasma2');

  if (window.innerWidth > 900) {
    divfantasma2.innerHTML = headerHTML;
    divfantasma1.innerHTML = '';
  } 
  else {
    titulo.innerHTML = `<p> Regy Espacio Deco</p>`;
    divfantasma1.innerHTML = headerHTML;
    divfantasma2.innerHTML = '';
  }
}

const contenedorGeneral = document.getElementsByClassName("container")[0];


// Call the function when the page loads or when the window is resized
document.addEventListener("DOMContentLoaded", ordenarDivs);
window.addEventListener('resize', ordenarDivs);