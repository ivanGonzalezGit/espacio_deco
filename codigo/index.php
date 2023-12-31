<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regy Espacio Deco</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com/ae9d2c6195.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/processing.js/1.6.0/processing.min.js"></script>

</head>

<body> 
  <div class="container">
    
    <div id="decoracionNavbar"></div>

    <nav id="navbar" class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button id="bordeBotonNavbar" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header id="contentHeader">
      <div id="header1">
        <img src="./img/logo_header.jpeg" alt="logo_header">
      </div>

      <div id="fantasma1"></div>

      <div id="header2">   
      </div>
    
      <div id="fantasma2"></div>
    </header>

    <nav>
        <div class="nav-foto">
            <div><img src="./img/img2.jpeg" alt="imagen_2"></div>
            <div><img src="./img/img3.jpeg" alt="imagen_3"></div>
            <div><img src="./img/img4.jpeg" alt="imagen_4"></div>
            <div><img src="./img/img5.jpeg" alt="imagen_5"></div>
        </div>
    </nav>
  
    <div id="centrar">
      <div id="carousel">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>

            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./img/carousel/c1.jpeg" class="d-block w-100 h-auto" alt="foto_1">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="./img/carousel/c2.jpeg" class="d-block w-100 h-auto" alt="foto_2">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="./img/carousel/c3.jpeg" class="d-block w-100 h-auto" alt="foto_3">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="./img/carousel/c4.jpeg" class="d-block w-100 h-auto" alt="foto_4">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="./img/carousel/c5.jpeg" class="d-block w-100 h-auto" alt="foto_5">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="./img/carousel/c6.jpeg" class="d-block w-100 h-auto" alt="foto_6">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
    </div>
  
    <section>
      <div class="centrar2">
        <article class="articulo">

          <div class="contenedor_articulo_foto">
              <img src="./img/img8.jpeg" alt="imagen_2">
          </div>

          <div class="contenedor_articulo_texto">
              <div class="titulo_articulo">Mi Producto</div>

              <p class="contenido_articulo">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, voluptatem, enim adipisci dolorem sit sunt distinctio laborum harum ut aspernatur odit error alias impedit blanditiis culpa unde natus ullam fugit.
              </p>
          </div>

        </article>

        <article class="articulo">
          <div class="contenedor_articulo_foto">
              <img src="./img/img9.jpeg" alt="imagen_2">
          </div>

          <div class="contenedor_articulo_texto">
              <div class="titulo_articulo">Mi Producto</div>

              <p class="contenido_articulo">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, voluptatem, enim adipisci dolorem sit sunt distinctio laborum harum ut aspernatur odit error alias impedit blanditiis culpa unde natus ullam fugit.
              </p>
          </div>
        </article>
      </div> 

      <div class="centrar2">
        <article class="articulo">
          <div class="contenedor_articulo_foto">
              <img src="./img/img8.jpeg" alt="imagen_2">
          </div>

          <div class="contenedor_articulo_texto">
              <div class="titulo_articulo">Macetas</div>

              <p class="contenido_articulo">
                  Juego de tres macetas en colores y diseños variados
              </p>
          </div>
        </article>

        <article class="articulo">

            <div class="contenedor_articulo_foto">
              <img src="./img/img9.jpeg" alt="imagen_2">
            </div>

            <div class="contenedor_articulo_texto">
              <div class="titulo_articulo">Velas de Madera</div>

              <p class="contenido_articulo">
                  Juego de dos velas de madera de cera de soja
              </p>
          </div>

        </article>
      </div> 

      <div id="centrar3-fondo">
        <div id="contenedorGaleria" class="centrar3">
        </div>
    </section>  
  
    <footer>
      <img src="./img/logo_footer.jpeg" alt="logo_footer">

      <div class="datos">
        <p><i class="fa-brands fa-whatsapp" style="color: #ffffd5;"></i> 11-7144-7569</p>
        <a href="https://www.facebook.com/profile.php?id=100083780238446"><p><i class="fa-brands fa-facebook-f" style="color: #ffffd5;"></i> Facebook</p></a>
        <a href="https://www.instagram.com/regyespaciodeco/"><p><i class="fa-brands fa-instagram" style="color: #ffffd5;"></i> Instagram</p></a>
        <p id="mail">regy.espaciodeco@gmail.com</p>
      </div>

      <div id="citoconceptos">Powered by Citoconceptos</div>        
    </footer>
  
  </div>  

  <script src="./scripts/ordenarTitulo.js"></script>
  <script src="./scripts/llenarGaleria.js"></script>
  <script src="./scripts/carouselGaleria.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>