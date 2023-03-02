<?php require ('includes/config.inc.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="1933 Alfa Romeo 8C Monza Brianza. A recreation of the highest levels completed two decades ago commission by a very well known collector">
  <title>Iconic Auto Sports. - Alfa Romeo Monza brianza</title>

  <!-- Favicons -->
  <?php include('includes/favicon.php'); ?>

  <link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/@fortawesome/fontawesome-free/css/all.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
  
  <?php $menu = 'inventory'; ?>
  <?php $submenu = 'available'; ?>
  <?php $submenuItem = 'monza_001'; ?>

  <!-- Modal -->
  <?php include('includes/contacto-modal.php'); ?>

  <!-- Header -->
  <?php include('includes/header.php'); ?>

  <!-- PAGE -->
  <sction class="page_fianchi">

    <!-- Slide -->
    <section class="container-fluid carousel-fade slides_home">

      <div class="row">

        <div class="col-md-12 p-0">

          <div id="carouselHomeControls" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

              <div id="slide_2" class="carousel-item active">
                <div class="content">
                  <h1>1933 Alfa Romeo 8c<br><span>Monza Brianza</span></h1>
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

    </section>
    <!-- Slide end -->

    <!-- Available -->
    <section data-aos="fade-up" class="container-fluid available">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">

          <div class="row">
            
            <div class="col-lg-6 carusel">
              <div id="carouselMonzaControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <img src="./img/monza-slide-1.jpg" class="d-block w-100" alt="slide 1 alfa romeo monza stretti">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/monza-slide-2.jpg" class="d-block w-100" alt="slide 2 alfa romeo monza stretti">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/monza-slide-3.jpg" class="d-block w-100" alt="slide 3 alfa romeo monza stretti">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/monza-slide-4.jpg" class="d-block w-100" alt="slide 4 alfa romeo monza stretti">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/monza-slide-5.jpg" class="d-block w-100" alt="slide 5 alfa romeo monza stretti">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/monza-slide-6.jpg" class="d-block w-100" alt="slide 6 alfa romeo monza stretti">
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMonzaControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselMonzaControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>

            <div class="col-lg-6 data">
              <ul>
                <li><h2 class="title">available</h2></li>
                <li><p class="modelo">1933 alfa romeo<br><span>8C MONZA BRIANZA</span></p></li>
                <li><p class="caracteristicas">BODY NUMBER<br><span>001</span></p></li>
                <li><p class="caracteristicas">ENGINE SIZE<br><span>3200cc</span></p></li>
                <li><p class="caracteristicas">VIN<br><span>132911</span></p></li>
                <li><p class="caracteristicas">STOCK<br><span>82313</span></p></li>
              </ul>
            </div>

          </div>

          <div class="row">
            
            <div class="col-xl-6 descripcion_auto">
              <h2>description</h2>
              <p>
                1933 Alfa Romeo 8C Monza Brianza. A recreation of the highest levels completed two decades ago commission by a very well known collector. Powered by a Bi Block 8C 3200cc straight 8 cylinder engine with supercharger, mated to an Alfa Romeo gearbox. Period tires and Rudge wheels, period friction shock absorbers, period diameter lights and Brooklands windshield. A hand crafted work of art identical to the original.
              </p>

              <div class="content_button">
                <button data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-primary">contact dealer</button>
              </div>

            </div>

            <div class="col-xl-6 specs">
              <h2 class="title">specs</h2>

              <div class="row">
                
                <div class="col-lg-6 content_categoria">
                  <h3 class="subtitulo">engine</h3>
                  <ul>
                    <li><p class="caracteristicas_small">ENGINE type<br><span>-</span></p></li>
                    <li><p class="caracteristicas_small">BODY SizE<br><span>3200cc</span></p></li>
                    <li><p class="caracteristicas_small">Fuel Specification<br><span>-</span></p></li>
                  </ul>                  
                </div>

                <div class="col-lg-6 content_categoria">
                  <h3 class="subtitulo">body</h3>
                  <ul>
                    <li><p class="caracteristicas_small">body number<br><span>001</span></p></li>
                    <li><p class="caracteristicas_small">body color<br><span>rosso</span></p></li>
                    <li><p class="caracteristicas_small">BODY Style<br><span>-</span></p></li>
                    <li><p class="caracteristicas_small">doors<br><span>-</span></p></li>
                    <li><p class="caracteristicas_small">paint type<br><span>-</span></p></li>
                  </ul>                  
                </div>

              </div>

              <div class="row">
                
                <div class="col-lg-6 content_categoria">
                  <h3 class="subtitulo">basic</h3>
                  <ul>
                    <li><p class="caracteristicas_small">year<br><span>1933</span></p></li>
                    <li><p class="caracteristicas_small">make<br><span>alfa romeo</span></p></li>
                    <li><p class="caracteristicas_small">model<br><span>8c monza</span></p></li>
                    <li><p class="caracteristicas_small">miles<br><span>-</span></p></li>
                  </ul>                  
                </div>

                <div class="col-lg-6 content_categoria">
                  <h3 class="subtitulo">interior</h3>
                  <ul>
                    <li><p class="caracteristicas_small">interior Color<br><span>Black</span></p></li>
                    <li><p class="caracteristicas_small">Secondary Interior Color<br><span>-</span></p></li>
                    <li><p class="caracteristicas_small">Seating Type<br><span>-</span></p></li>
                    <li><p class="caracteristicas_small">Seat Material<br><span>-</span></p></li>
                    <li><p class="caracteristicas_small">Shifter Type<br><span>-</span></p></li>
                    <li><p class="caracteristicas_small">Center Console<br><span>No</span></p></li>
                  </ul>                  
                </div>

              </div>

            </div>
            
          </div>

        </div>
      </div>
    </section>
    <!-- Available end -->

    <!-- Galeria -->
    <section data-aos="fade-up" class="container-fluid galeria">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">

          <div class="row">
            
            <div class="col-md-6 img_galeria">
              <img class="img-fluid" src="./img/monza-a.jpg" alt="galeria alfa romeo monza a">
            </div>

            <div class="col-md-6 img_galeria">
              <img class="img-fluid" src="./img/monza-b.jpg" alt="galeria alfa romeo monza b">
            </div>

            <div class="col-md-6 img_galeria">
              <img class="img-fluid" src="./img/monza-c.jpg" alt="galeria alfa romeo monza c">
            </div>

            <div class="col-md-6 img_galeria">
              <img class="img-fluid" src="./img/monza-d.jpg" alt="galeria alfa romeo monza d">
            </div>

            <div class="col-md-12 img_galeria">
              <img class="img-fluid" src="./img/monza-e.jpg" alt="galeria alfa romeo monza e">
            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- Galeria end -->

  </sction>
  <!-- PAGE end -->

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>
  
  <script src="./node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
  <script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
  <script src="./node_modules/jquery-easing/dist/jquery.easing.1.3.umd.min.js"></script>
  <script type="text/javascript" src="js/app.js"></script>

  <?php 

    if (isset($_GET['errors']) || isset($_GET['msg_contacto'])) {

      ?>
      <script>

        var modal = new bootstrap.Modal(document.getElementById('contactModal'), {
          keyboard: false
        })

        modal.show()
        
      </script>
      <?php 

    } 

  ?>

</body>

</html>