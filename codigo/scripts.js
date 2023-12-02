
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

  if (window.innerWidth > 991) {
    divfantasma2.innerHTML = headerHTML;
    divfantasma1.innerHTML = ''; // Limpiar el otro div si es necesario
  } else {
    divfantasma1.innerHTML = headerHTML;
    divfantasma2.innerHTML = ''; // Limpiar el otro div si es necesario
  }
}

// Llama a la función al cargar la página
document.addEventListener("DOMContentLoaded", ordenarDivs);

// Llama a la función cuando cambie el tamaño de la ventana
window.addEventListener('resize', ordenarDivs);