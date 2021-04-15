
<!DOCTYPE html>
<html>

<head>
  <title>BackStage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  
  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
        <div class="img" style="background-image: url(images/bg_3.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.php" class="logo">Back<span>Stage</span></a></h1>
              <ul>
                <li class="active"><a href="index.php"><span>Home</span></a></li>
                <li><a href="work.php"><span>Наші роботи</span></a></li>
                <li><a href="about.php"><span>Про нас</span></a></li>
                <li><a href="contact.php"><span>Контакти</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div id="colorlib-page">
      <header>
        <div class="container">
          <div class="colorlib-navbar-brand">
            <a class="colorlib-logo" href="index.php">Back<span>Stage</span></a>
          </div>
          <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        </div>
      </header>

      <section class="hero-wrap">
        <div class="overlay"></div>
        <div class="container-fluid px-0">
          <div class="row no-gutters text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Контакти</span></p>
              <h1 class="bread">Зв'яжіться з нами!</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
          <div class="row block-9">
            <div class="col-md-5 d-flex order-last contact-info ftco-animate">
              <div class="row d-flex align-items-center">
                <div class="pl-md-5 p-4">
                  <h2 class="mb-4">Контактна інформація</h2>
                  <p><span>Адреса:</span> проспект Правди 12, будинок 10, Київ, Україна</p>
                  <p><span>Телефон:</span> <a href="tel://1234567920">+380 99 416 76 56</a></p>
                  <p><span>Email:</span> <a href="mailto:info@yoursite.com">infobackst@gmail.com</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 order-first ftco-animate">
              <form action="#" method="POST" class="p-4 p-md-5">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="ПІБ" name="nameFull">
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Номер телефону у форматі 099-678-78-88" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" required>
                </div>
                <div class="form-group">
                  <textarea name="texti" id="" cols="30" rows="7" class="form-control" placeholder="Коротко про замовлення"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" id="but" value="Передзвоніть мені!" class="btn_reviews btn btn-primary py-3 px-5 ">
                  <script>
                  document.getElementById('but').onclick = function() {
                    alert("Наш менеджер зв'яжиться з вами у найближчий час!");
                  }
                  
                  </script>
                
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <div id="map"></div>

      <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-3">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2 logo"><a href="index.php">Back<span>Stage</span></a></h2>
                <p>Ми створені для того щоб приносити радість нашим клієнтам.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Навігація</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Home</a></li>
                  <li><a href="#" class="py-2 d-block">Про нас</a></li>
                  <li><a href="#" class="py-2 d-block">Наші роботи</a></li>
                  <li><a href="#" class="py-2 d-block">Контакти</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Залишились питання?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">проспект Правди 12, будинок 10, Київ, Україна</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+380 99 416 76 56</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">infobackst@gmail.com</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p>
                Copyright &copy;<script>
                document.write(new Date().getFullYear());
                </script> All rights reserved</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/ajaxrequset.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
  </body>

  </html>
