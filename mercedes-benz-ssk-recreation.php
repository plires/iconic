<?php require ('includes/config.inc.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="This Mercedes-Benz SSK Comte Trossi (Recreation) is a unique masterpiece built to original specifications by OA Automobili. OA Automobili is an exclusive recreation car company which specializes only in unique classic cars. It's a master craftsman and coachbuilder based in Argentina.">
  <title>Iconic Auto Sports. - Mercedes Benz SSK Recreation</title>

  <!-- Favicons -->
  <?php include('includes/favicon.php'); ?>

  <link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/@fortawesome/fontawesome-free/css/all.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
  
  <?php $current = 'ssk'; ?>

  <!-- Modal -->
  <?php include('includes/contacto-modal.php'); ?>

  <!-- Header -->
  <?php include('includes/header.php'); ?>

  <!-- PAGE -->
  <sction class="page_ssk">

    <!-- Slide -->
    <?php include('includes/slide-home.php'); ?>

    <!-- Available -->
    <section data-aos="fade-up" class="container-fluid available">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">

          <div class="row">
            
            <div class="col-lg-6 carusel">
              <div id="carouselSskControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <img src="./img/ssk-slide-1.jpg" class="d-block w-100" alt="slide 1 Mercedes benz ssk recreation">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/ssk-slide-2.jpg" class="d-block w-100" alt="slide 2 Mercedes benz ssk recreation">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/ssk-slide-3.jpg" class="d-block w-100" alt="slide 3 Mercedes benz ssk recreation">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/ssk-slide-4.jpg" class="d-block w-100" alt="slide 4 Mercedes benz ssk recreation">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/ssk-slide-5.jpg" class="d-block w-100" alt="slide 5 Mercedes benz ssk recreation">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/ssk-slide-6.jpg" class="d-block w-100" alt="slide 6 Mercedes benz ssk recreation">
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselSskControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselSskControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>

            <div class="col-lg-6 data">
              <ul>
                <li><h2 class="title">available</h2></li>
                <li><p class="modelo">1966 mercedes-benz<br><span>SSK RECREATION</span></p></li>
                <li><p class="caracteristicas">ENGINE SIZE<br><span>manual</span></p></li>
                <li><p class="caracteristicas">BODY STYLE<br><span>roadster</span></p></li>
                <li><p class="caracteristicas">VIN<br><span>RPA054906</span></p></li>
                <li><p class="caracteristicas">STOCK<br><span>82321</span></p></li>
              </ul>
            </div>

          </div>

          <div class="row">
            
            <div class="col-xl-6 descripcion_auto">
              <h2>description</h2>
              <p>
                This Mercedes-Benz SSK Comte Trossi (Recreation) is a unique masterpiece built to original specifications by OA Automobili. OA Automobili is an exclusive recreation car company which specializes only in unique classic cars. It's a master craftsman and coachbuilder based in Argentina.
              </p>

              <p>
                This masterpiece known as the Comte Trossi has many components of the period. 1953 MB 300 engine, dual Solex Carbs, original Bosch dynamo, external MB water pump, MB box. Steering box manufactured in brass with worm gears of three entires (idem original). Stainless steel-coated exhaust pipe. Cast Iron front axle with brakes, bodywork completely made in handcrafted sheet metal according to scale, Rays wheels with Rudge centre (number 18), windsheild frame in chrome-plated solid brass, cast iron rear differential with rim brakes, rear light in stainless steel, dashboard with the horology as from original, Bosch ignition and light keys, 380mm cast-iron coated bells and Perrot brakes, Marshall Trilux headlights.
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
                    <li><p class="caracteristicas_small">BODY SizE<br><span>-</span></p></li>
                    <li><p class="caracteristicas_small">Fuel Specification<br><span>-</span></p></li>
                  </ul>                  
                </div>

                <div class="col-lg-6 content_categoria">
                  <h3 class="subtitulo">body</h3>
                  <ul>
                    <li><p class="caracteristicas_small">body color<br><span>black</span></p></li>
                    <li><p class="caracteristicas_small">BODY Style<br><span>roadster</span></p></li>
                    <li><p class="caracteristicas_small">doors<br><span>-</span></p></li>
                    <li><p class="caracteristicas_small">paint type<br><span>-</span></p></li>
                  </ul>                  
                </div>

              </div>

              <div class="row">
                
                <div class="col-lg-6 content_categoria">
                  <h3 class="subtitulo">basic</h3>
                  <ul>
                    <li><p class="caracteristicas_small">year<br><span>1969</span></p></li>
                    <li><p class="caracteristicas_small">make<br><span>mercedes-benz</span></p></li>
                    <li><p class="caracteristicas_small">model<br><span>ssk recreation</span></p></li>
                    <li><p class="caracteristicas_small">miles<br><span>-</span></p></li>
                  </ul>                  
                </div>

                <div class="col-lg-6 content_categoria">
                  <h3 class="subtitulo">interior</h3>
                  <ul>
                    <li><p class="caracteristicas_small">interior Color<br><span>Black</span></p></li>
                    <li><p class="caracteristicas_small">Secondary Interior Color<br><span>-</span></p></li>
                    <li><p class="caracteristicas_small">Seating Type<br><span>bench</span></p></li>
                    <li><p class="caracteristicas_small">Seat Material<br><span>vinyl</span></p></li>
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

    <!-- Galeria -->
    <section data-aos="fade-up" class="container-fluid galeria">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">

          <div class="row">
            
            <div class="col-md-6 img_galeria">
              <img class="img-fluid" src="./img/ssk-a.jpg" alt="galeria mercedes benz ssk recreation a">
            </div>

            <div class="col-md-6 img_galeria">
              <img class="img-fluid" src="./img/ssk-b.jpg" alt="galeria mercedes benz ssk recreation b">
            </div>

            <div class="col-md-6 img_galeria">
              <img class="img-fluid" src="./img/ssk-c.jpg" alt="galeria mercedes benz ssk recreation c">
            </div>

            <div class="col-md-6 img_galeria">
              <img class="img-fluid" src="./img/ssk-d.jpg" alt="galeria mercedes benz ssk recreation d">
            </div>

            <div class="col-md-12 img_galeria">
              <img class="img-fluid" src="./img/ssk-e.jpg" alt="galeria mercedes benz ssk recreation e">
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