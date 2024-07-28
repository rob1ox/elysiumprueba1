<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elysium</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="/resources/Gliker-RegularExpanded.ttf">
    <link rel="icon" href="/resources/logo.ico">
    <script src="https://kit.fontawesome.com/50a147dc6f.js" crossorigin="anonymous"></script>
</head>


<!-- MENÚ NAVEGACIÓN -->
<nav>
    <a href="#" class="enlace">
        <img src="/resources/logo.png" alt="logo" class="logo">
    </a>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <ul class="nav-list">
        <li><a class="active" href="#">Inicio</a></li>
        <li><a href="#">Aromas</a></li>
        <li><a href="/html/productos.html">Productos</a></li>
        <li><a href="#">Contacto</a></li>
        <li class="search-container">
            <input type="text" placeholder="Buscar..." class="search-bar">
        </li>
        <li><a href="#" class="cart-icon"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
</nav>

<!-- BOTÓN SCROLL-TOP -->
<a href="#" class="back-to-top">
    <i class="fa-solid fa-arrow-up-wide-short"></i>
</a>


<!-- IMÁGENES -->
<div class="portada">
    <i class="fa-solid fa-chevron-left" id="prev"></i>
    <ul id="carousel">
        <li><img src="/resources/portada.png" alt="portada"></li>
        <li><img src="/resources/portada1.png" alt="portada1"></li>
        <li><img src="/resources/portada2.png" alt="portada2"></li>
        <li><img src="/resources/portada3.png" alt="portada3"></li>
    </ul>
    <i class="fa-solid fa-chevron-right" id="next"></i>
</div>

   

<!-- INFORMACIÓN -->
<section class="info">
    <div class="info_total">
        <div class="info_item">
            <i class="fa-solid fa-truck"></i>
            <p class="info_titulo">ENVÍOS A TODO EL PAÍS</p>
            <p class="info_subtitulo">COMPRÁ SIN SALIR DE TU CASA</p>
        </div>
        <div class="info_item">
            <i class="fa-solid fa-credit-card"></i>
            <p class="info_titulo">HASTA 12 CUOTAS</p>
            <p class="info_subtitulo">CON TODAS LAS TARJETAS</p>
        </div>
        <div class="info_item">
            <i class="fa-solid fa-lock"></i>
            <p class="info_titulo">COMPRA SEGURA</p>
            <p class="info_subtitulo">PROTEGEMOS TUS DATOS</p>
        </div>
    </div>
</section>


<!-- NUESTROS AROMAS -->
<div class="sec_variedades">
    <h1 class="titulo">NUESTROS AROMAS</h1>
    <h3 class="subtitulo">Descubre todas nuestras variedades y su cultura</h3>
    <div class="variedades">
        <img src="/resources/tarjeta_aromas.png" alt="tarjeta_aromas" class="tarjeta_aromas" id="tarjeta_aromas">
        <img src="/resources/packaging.png" alt="packaging" class="packaging">
        <div class="colores-aromas">
            <img src="/resources/rosa.png" alt="rosa" class="color-aroma" id="rosa" data-aroma="rosa">
            <img src="/resources/ruda.png" alt="ruda" class="color-aroma" id="ruda" data-aroma="ruda">
            <img src="/resources/manzanilla.png" alt="manzanilla" class="color-aroma" id="manzanilla" data-aroma="manzanilla">
            <img src="/resources/citronela.png" alt="citronela" class="color-aroma" id="citronela" data-aroma="citronela">
            <img src="/resources/jazmin.png" alt="jazmin" class="color-aroma" id="jazmin" data-aroma="jazmin">
            <img src="/resources/vainilla.png" alt="vainilla" class="color-aroma" id="vainilla" data-aroma="vainilla">
            <img src="/resources/romero.png" alt="romero" class="color-aroma" id="romero" data-aroma="romero">
        </div>
    </div>
</div>


<!-- PRODUCTOS -->
<section class="sec_productos">
<h1 class="titulo">PRODUCTOS</h1>
<h3 class="subtitulo">Ultimas novedades</h3>
<br>
</section>


<div class="container_products">
<!-- PRODUCTO 1 -->
<div class="card-product">
    <div class="container-img">
        <img src="/resources/producto1.png" alt="producto1">
        <span class="discount">-10%</span>
        <div class="button-group">
            <span>
                <i class="fa-regular fa-eye"></i>
            </span>
            <span>
                <i class="fa-regular fa-heart"></i>
            </span>
            <span>
                <i class="fa-solid fa-code-compare"></i>
            </span>
        </div>
    </div>
        <div class="content-card-product">
            <div class="intensidad">
                <i class="fa-solid fa-spray-can-sparkles"></i>
                <i class="fa-solid fa-spray-can-sparkles"></i>
                <i class="fa-solid fa-spray-can-sparkles"></i>
            </div>
                <h3>Pack citronela</h3>
                <span class="add-cart">
                    <i class="fa-solid fa-basket-shopping"></i>
                </span>
                <p class="price">$2.700 <span>$3.000</span></p>
        </div>
</div>
<!-- PRODUCTO 2 -->
        <div class="card-product">
            <div class="container-img">
                <img src="/resources/producto1.png" alt="producto2">
                <span class="discount">-5%</span>
                <div class="button-group">
                    <span>
                        <i class="fa-regular fa-eye"></i>
                    </span>
                    <span>
                        <i class="fa-regular fa-heart"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-code-compare"></i>
                    </span>
                </div>
            </div>
                <div class="content-card-product">
                    <div class="intensidad">
                        <i class="fa-solid fa-spray-can-sparkles"></i>
                    </div>
                        <h3>Pack vainilla</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$2.850 <span>$3.000</span></p>
                </div>
        </div>
<!-- PRODUCTO 3 -->
<div class="card-product">
    <div class="container-img">
        <img src="/resources/producto1.png" alt="producto3">
        <div class="button-group">
            <span>
                <i class="fa-regular fa-eye"></i>
            </span>
            <span>
                <i class="fa-regular fa-heart"></i>
            </span>
            <span>
                <i class="fa-solid fa-code-compare"></i>
            </span>
        </div>
    </div>
        <div class="content-card-product">
            <div class="intensidad">
                <i class="fa-solid fa-spray-can-sparkles"></i>
                <i class="fa-solid fa-spray-can-sparkles"></i>
            </div>
                <h3>Pack manzanilla</h3>
                <span class="add-cart">
                    <i class="fa-solid fa-basket-shopping"></i>
                </span>
                <p class="price">$3.000</p>
        </div>
</div>
<!-- PRODUCTO 4 -->
<div class="card-product">
    <div class="container-img">
        <img src="/resources/producto1.png" alt="producto4">
        <div class="button-group">
            <span>
                <i class="fa-regular fa-eye"></i>
            </span>
            <span>
                <i class="fa-regular fa-heart"></i>
            </span>
            <span>
                <i class="fa-solid fa-code-compare"></i>
            </span>
        </div>
    </div>
        <div class="content-card-product">
            <div class="intensidad">
                <i class="fa-solid fa-spray-can-sparkles"></i>
                <i class="fa-solid fa-spray-can-sparkles"></i>
            </div>
                <h3>Pack rosa</h3>
                <span class="add-cart">
                    <i class="fa-solid fa-basket-shopping"></i>
                </span>
                <p class="price">$3.000</p>
        </div>
</div>
</div>

<div class="see-more">
    <a href="#" class="see-more-btn">VER MÁS</a>
</div>


<!-- CONTACTO -->

<div class="container">
    <main class="content">
      <div class="form-container">
        <h2>Contacto</h2>
        <form class="form" method="post">
          <div class="grid">
            <div class="input-group">
              <label for="first-name"> Nombre </label>
              <input type="text" name="nombre" id="first-name" placeholder="Ingresa tu nombre" required />
            </div>
            <div class="input-group">
              <label for="last-name"> Apellido </label>
              <input type="text" name="apellido" id="last-name" placeholder="Ingresa tu apellido" required />
            </div>
          </div>
          <div class="input-group">
            <label for="email"> Correo Electrónico </label>
            <input type="email" name="email" id="email" placeholder="Ingresa tu correo electrónico" required type="email" />
          </div>
          <div class="input-group">
            <label for="message"> Mensaje </label>
            <div class="textarea-container">
              <textarea name="msg" id="message" placeholder="Escribe tu mensaje aquí" maxlength="1000" required></textarea>
            </div>
          </div>
          <button type="submit" name="enviar">ENVIAR MENSAJE</button>
        </form>
      </div>
    </main>
  </div>
  
  <?php 
  include("contacto.php")
  ?>

  <!-- FOOTER -->

  <footer class="footer">
    <div class="container-footer">
      <div class="footer-top">
        <div class="logo-section">
          <a href="#" class="logo-link">
            <img src="/resources/logo-footer.png" alt="logo_footer" class="logo-footer">
          </a>
          <p class="description">Encuentra la paz en cada aroma.</p>
        </div>
        <div class="links-section">
          <h3 class="section-title">Enlaces</h3>
          <ul class="links-list">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Sobre Nosotros</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Política de privacidad</a></li>
          </ul>
        </div>
        <div class="contact-section">
          <h3 class="section-title">Contacto</h3>
          <p><i class="fa-solid fa-envelope"></i> elysium2024.ja@gmail.com</p>
          <p><i class="fa-solid fa-phone"></i> (351) 123-4567</p>
          <a href="https://maps.app.goo.gl/nwkWK8r8idpYMqgz5"><p><i class="fa-solid fa-location-dot"></i> Colegio de la Inmaculada</p></a>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="social-media">
          <a href="https://www.instagram.com/elysium.ja/" class="social-link"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.facebook.com/people/Elysium-Ja/pfbid0akYoQEc3qxVXsPsshHGqkQr8ARCJiYkb46vKJdYY9cyFp6FUBRDoQeumKoShn9tEl/?mibextid=LQQJ4d" class="social-link"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://x.com/elysium_ja/" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="https://www.tiktok.com/@elysium.ja" class="social-link"><i class="fa-brands fa-tiktok"></i></a>
          <a href="mailto:elysium2024.ja@gmail.com" class="social-link"><i class="fa-regular fa-envelope"></i></a>
        </div>
        <p class="copyright">&copy; 2024 Elysium.</p>
      </div>
    </div>
  </footer>
  
  



<script src="/js/script.js"></script>
</body>
</html>
