<?php require ('includes/config.inc.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="We love classic cars.  Everything about them, the curves, the design, the feeling of riding history, but something was missing.">
  <title>Iconic Auto Sports.</title>

  <!-- Favicons -->
  <?php include('includes/favicon.php'); ?>

  <link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/@fortawesome/fontawesome-free/css/all.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
  
  <?php $current = 'index'; ?>

  <!-- Modal -->
  <?php include('includes/contacto-modal.php'); ?>

  <!-- Header -->
  <?php include('includes/header.php'); ?>

  <!-- PAGE -->
  <sction class="page">

    <!-- Slide -->
    <section class="container-fluid carousel-fade slides_home">

      <div class="row">

        <div class="col-md-12 p-0">

          <div id="carouselHomeControls" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

              <div id="slide_1" class="carousel-item active">
                <div class="content">
                  <h1>Alfa Romeo Fianchi Stretti</h1>
                  <div class="content_button">
                    <a href="#" class="transition btn btn-primary">discover more</a>
                  </div>
                </div>
              </div>

              <div id="slide_2" class="carousel-item">
                <div class="content">
                  <h2>1933 Alfa Romeo 8c<br><span>Monza Brianza</span></h2>
                  <div class="content_button">
                    <a href="#" class="transition btn btn-primary">discover more</a>
                  </div>
                </div>
              </div>

              <div id="slide_3" class="carousel-item">
                <div class="content">
                  <h2>1969 Mercedes-Benz Ssk<br><span>Recreation Comte Trossi</span></h2>
                  <div class="content_button">
                    <a href="#" class="transition btn btn-primary">discover more</a>
                  </div>
                </div>
              </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomeControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHomeControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

          </div>

        </div>

      </div>

    </section>
    <!-- Slide end -->

    <!-- Legacy -->
    <section data-aos="fade-up" class="container-fluid legacy">
      <div class="row">

        <div style="position: relative;" class="col-lg-6 ps-0 img">
          <img class="img-fluid" src="./img/legacy.jpg" alt="legacy iconic">
          <div class="shape"></div>
        </div>

        <div class="col-lg-5 data">
          <h2>Legacy</h2>
          <h3>Get to know our award winning cars</h3>
          <p>
            We love classic cars.  Everything about them, the curves, the design, the feeling of riding history, but something was missing. So we created the SP40 Restomod, a car that is both vintage and modern. A unique car that combines the best of both worlds.  Modern technology and the classic elegance of our award winning 1934 Ford 40 Special Speedster Boattail.
          </p>
        </div>

      </div>

      <div class="row detalle">
        <div class="col-lg-10 offset-lg-1">
          <div class="row">
            
            <div data-aos="fade-up" class="col-md-4 car_details">

              <div id="carouselMercedesControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/mercedes-slide-1.jpg" class="d-block w-100" alt="mercedes slide 1">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/mercedes-slide-2.jpg" class="d-block w-100" alt="mercedes slide 2">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/mercedes-slide-3.jpg" class="d-block w-100" alt="mercedes slide 3">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/mercedes-slide-4.jpg" class="d-block w-100" alt="mercedes slide 4">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMercedesControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselMercedesControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

              <h4>1930 Mercedes Benz SSK</h4>
              <p>Autoclásica 2016 - Mejor Artesanía</p>
            </div>

            <div data-aos="fade-up" class="col-md-4 car_details">
              
              <div id="carouselAlfaControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/alfa-slide-1.jpg" class="d-block w-100" alt="alfa slide 1">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/alfa-slide-2.jpg" class="d-block w-100" alt="alfa slide 2">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/alfa-slide-3.jpg" class="d-block w-100" alt="alfa slide 3">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAlfaControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAlfaControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

              <h4>1952 Alfa Romeo DV C52</h4>
              <p>Autoclásica 2017 - Mejor Artesanía</p>
            </div>

            <div data-aos="fade-up" class="col-md-4 car_details">

              <div id="carouselFordControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/ford.jpg" class="d-block w-100" alt="ford slide 1">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/ford.jpg" class="d-block w-100" alt="ford slide 1">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselFordControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselFordControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

              <h4>1934 Ford 40 Special Speedster</h4>
              <p>Autoclásica 2018 - Mejor Artesanía</p>
            </div>

          </div>
        </div>
      </div>

    </section>
    <!-- Legacy end -->

    <!-- Video -->
    <section data-aos="fade-up" class="container-fluid p-0 video">
      <div class="row">

        <div class="col-md-12">
          <div class="ratio ratio-16x9">
            <iframe src="https://player.vimeo.com/video/700977151?h=4000b6e842&autoplay=1&loop=1&title=0&portrait=0&muted=1" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>

      </div>
    </section>
    <!-- Video end -->

    <!-- Story -->
    <section data-aos="fade-up" class="container-fluid story">
      <div class="row">

        <div class="col-md-10 offset-md-1">

          <div class="row">
            
            <div class="col-lg-6 col-xl-5 data">
              <h2>Our Story</h2>
              <p>
                Iconic Auto Sports is a classic car evocation custom made company, that specializes in the body building and craftsmanship of recreations of the most famous and unique vehicles in the world.
              </p>

              <p>
                It also restores original cars and has its own unique racing, classic and vintage models. In its production records, it denotes over 100 cars built through the last decades, many of them for the top classic car collectors in South America and abroad. 
              </p>

              <p>
                Iconic Auto Sports cars have been presented in some of the finest international auction houses with excellent estimates and selling results, as well as being awarded by specialized classic car juries in renowned exhibitions, the best price for construction quality and supreme bodybuilding.
              </p>

              <p>
                But it wasn´t until the year 2016 that it was formally registered under the name of OHA Automobili and in 2020 changed its name to Iconic Auto Sports.  The firm is currently settled in its new state of the art car boutique factory in San Isidro, Buenos Aires, Argentina.
              </p>

            </div>

            <div class="col-lg-6 col-xl-7 img">
              <img class="img-fluid" src="./img/history.jpg" alt="history iconic">
            </div>

          </div>

        </div>

      </div>

    </section>
    <!-- Story end -->

    <!-- Instagram -->
    <section data-aos="fade-up" class="container-fluid instagram">
      <div class="row">

        <div class="col-md-10 offset-md-1">

          <div class="row">
            
            <div class="col-md-12">
              PLUGIN DE INSTAGRAM????
            </div>

          </div>

        </div>

      </div>

    </section>
    <!-- Instagram end -->

    <!-- Lauch -->
    <section data-aos="fade-up" class="container-fluid lauch">
      <div class="row">

        <div class="col-md-12 content">
          <img src="./img/logo-sp40-large.png" class="img-fluid" alt="logo sp40 large">
          <h2 class="arimo">LAUNCHING 2022</h2>
          <button 
            data-bs-toggle="modal" 
            data-bs-target="#contactModal" 
            class="btn btn-primary arimo transition">JOIN THE WAITING LIST
          </button>
        </div>

      </div>
    </section>
    <!-- Lauch end -->

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