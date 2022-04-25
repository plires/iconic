<?php require ('includes/config.inc.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Hand built full Aluminum body 1952 Alfa Romeo 1900 C52 Disco Volante Fianchi Stretti.">
  <title>Iconic Auto Sports. - Alfa Romeo Fianchi Stretti</title>

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
  <?php $submenu = 'fianchi'; ?>

  <!-- Modal -->
  <?php include('includes/contacto-modal.php'); ?>

  <!-- Header -->
  <?php include('includes/header.php'); ?>

  <!-- PAGE -->
  <sction class="page_fianchi">

    <!-- Slide -->
    <?php include('includes/slide-home.php'); ?>

    <!-- Available -->
    <section data-aos="fade-up" class="container-fluid available">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">

          <div class="row">
            
            <div class="col-lg-6 carusel">
              <div id="carouselfianchiControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <img src="./img/alfa-1900-slide-1.jpg" class="d-block w-100" alt="slide 1 alfa romeo">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/alfa-1900-slide-2.jpg" class="d-block w-100" alt="slide 2 alfa romeo">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/alfa-1900-slide-3.jpg" class="d-block w-100" alt="slide 3 alfa romeo">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/alfa-1900-slide-4.jpg" class="d-block w-100" alt="slide 4 alfa romeo">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/alfa-1900-slide-5.jpg" class="d-block w-100" alt="slide 5 alfa romeo">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/alfa-1900-slide-6.jpg" class="d-block w-100" alt="slide 6 alfa romeo">
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselfianchiControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselfianchiControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>

            <div class="col-lg-6 data">
              <ul>
                <li><h2 class="title">available</h2></li>
                <li><p class="modelo">1952 alfa romeo<br><span>1900 c52</span></p></li>
                <li><p class="caracteristicas">ENGINE SIZE<br><span>1600</span></p></li>
                <li><p class="caracteristicas">BODY STYLE<br><span>roadster</span></p></li>
                <li><p class="caracteristicas">MILES<br><span>3,009</span></p></li>
                <li><p class="caracteristicas">VIN<br><span>OHA005FS18</span></p></li>
                <li><p class="caracteristicas">STOCK<br><span>FS18</span></p></li>
              </ul>
            </div>

          </div>

          <div class="row">
            
            <div class="col-xl-6 descripcion_auto">
              <h2>description</h2>
              <h4>Hand built full Aluminum body</h4>
              <p>
                <span>1952 Alfa Romeo 1900 C52 Disco Volante Fianchi Stretti.</span>
              </p>

              <p>
                The only Fianchi Stretti built by Alfa Romeo is sitting at the Schlumpf
                museum in France.
              </p>

              <p>
                The Fianch Stretti uses the Carrozzeria Touring Superleggera space
                frame technology. This was the car that essentially set that standard
                for the race cars of that era. This example is powered by an Alfa
                Romeo dual overhead cam 1600 motor, matted to a 4 speed manual
                transmission.
              </p>

              <p>
                Exact dimensions and materials as the real car with a
                high level of craftsman ship. The is titled clean in Florida as an 1952
                Alfa Romeo.
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
                    <li><p class="caracteristicas_small">ENGINE type<br><span>gasoline</span></p></li>
                    <li><p class="caracteristicas_small">BODY SizE<br><span>1600</span></p></li>
                    <li><p class="caracteristicas_small">Fuel Specification<br><span>92/93 Octane</span></p></li>
                  </ul>                  
                </div>

                <div class="col-lg-6 content_categoria">
                  <h3 class="subtitulo">body</h3>
                  <ul>
                    <li><p class="caracteristicas_small">body color<br><span>rosso</span></p></li>
                    <li><p class="caracteristicas_small">BODY Style<br><span>ROADSTER</span></p></li>
                    <li><p class="caracteristicas_small">doors<br><span>2</span></p></li>
                    <li><p class="caracteristicas_small">paint type<br><span>-</span></p></li>
                  </ul>                  
                </div>

              </div>

              <div class="row">
                
                <div class="col-lg-6 content_categoria">
                  <h3 class="subtitulo">basic</h3>
                  <ul>
                    <li><p class="caracteristicas_small">year<br><span>1952</span></p></li>
                    <li><p class="caracteristicas_small">make<br><span>alfa romeo</span></p></li>
                    <li><p class="caracteristicas_small">year<br><span>1900</span></p></li>
                    <li><p class="caracteristicas_small">miles<br><span>10900</span></p></li>
                  </ul>                  
                </div>

                <div class="col-lg-6 content_categoria">
                  <h3 class="subtitulo">interior</h3>
                  <ul>
                    <li><p class="caracteristicas_small">interior Color<br><span>Burgundy</span></p></li>
                    <li><p class="caracteristicas_small">Secondary Interior Color<br><span>-</span></p></li>
                    <li><p class="caracteristicas_small">Seating Type<br><span>Bucket</span></p></li>
                    <li><p class="caracteristicas_small">Seat Material<br><span>Leather</span></p></li>
                    <li><p class="caracteristicas_small">Shifter Type<br><span>Floor</span></p></li>
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

    <!-- Slide Video Alfa 1900 -->
    <?php include('includes/video-alfa-1900.php'); ?>

    <!-- Galeria -->
    <section data-aos="fade-up" class="container-fluid galeria">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">

          <div class="row">
            
            <div class="col-md-6 img_galeria">
              <img class="img-fluid" src="./img/alfa-1900-a.jpg" alt="galeria alfa romeo a">
            </div>

            <div class="col-md-6 img_galeria">
              <img class="img-fluid" src="./img/alfa-1900-b.jpg" alt="galeria alfa romeo b">
            </div>

            <div class="col-md-6 img_galeria">
              <img class="img-fluid" src="./img/alfa-1900-c.jpg" alt="galeria alfa romeo c">
            </div>

            <div class="col-md-6 img_galeria">
              <img class="img-fluid" src="./img/alfa-1900-d.jpg" alt="galeria alfa romeo d">
            </div>

            <div class="col-md-12 img_galeria">
              <img class="img-fluid" src="./img/alfa-1900-e.jpg" alt="galeria alfa romeo e">
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