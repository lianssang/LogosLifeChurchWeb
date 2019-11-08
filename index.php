<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Logos Life</title>
    <link
      rel="icon"
      href="../img/logoslife.png"
      type="image/x-icon"
      sizes="16x16"
    />
    <link rel="stylesheet" href="./dist/css/main.css" />
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/dist/php/"; include($IPATH."cdn.html") ?>
  </head>

  <body>
    <!--Navigation Bar-->
    <?php include($IPATH."navbar.html") ?>

    <!--Image Slider-->
    <div class="carousel slide" id="slides" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="./img/JPEG/IMG1.jpg" alt="" />
          <div class="carousel-caption">
              <a class="btn btn-primary btn-lg" href="./live.php" role="button">Watch Us Live</a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="./img/JPEG/IMG2.jpg" alt="" />
        </div>
        <div class="carousel-item">
          <img class="w-100" src="./img/JPEG/IMG3.jpg" alt="" />
        </div>
      </div>
    </div>

    <!--Welcome Section-->
    <div class="container-fluid padding">
      <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
          <p class="lead">
              We are a community of Oneness believers, located in Nashville, Tennessee. We welcome everyone regardless of denomination. We hope to spread the gospel of Jesus Christ through our media. Thank you for visiting and supporting us through this platform.
          </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
          <a href="#"
            ><button class="btn btn-outline-secondary btn-lg" type="button">
              Read More
            </button></a
          >
        </div>
      </div>
    </div>

    <!--Social Media Section-->
    <div class="container-fluid padding">
      <div class="row welcome text-center">
        <div class="col-12">
          <h2>Reach Us</h2>
        </div>
        <hr>
        <div class="col-12">
          <p class="lead">
            through our social media platforms.
          </p>
        </div>
      </div>
    </div>

    <div class="container-fluid padding">
      <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4 ">
          <a target="_blank" href="https://www.facebook.com/pg/thelogoslifechurch"><i class="fab fa-facebook" style='font-size:48px;color:#3b5998'></i></a>
          <h5>Facebook</h5>
          <h6>(Logos Life)</h6>
          <p>to witness the presence of God</p>
          </p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 ">
          <a target="_blank" href="https://www.instagram.com/thelogoslifechurch"><i class="fab fa-instagram" style='font-size:48px;color:#E1306C'></i></a>
          <h5>Instagram</h5>
          <h6>(@thelogoslifechurch)</h6>
          <p>to cherish all God's work</p>
          </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 ">
          <a target="_blank" href="https://www.youtube.com/channel/UC2S4n73ufHKMRrLsuMYo4pg"><i class="fab fa-youtube" style='font-size:48px;color:#e52d27'></i></a>
          <h5>YouTube</h5>
          <h6>(Logos Life Media)</h6>
          <p>to spread the word of God</p>
          </p>
        </div>
      </div>
    </div>

    <hr>
    <!--Service & Map-->
    <div class="container-fluid padding">
      <div class="row padding text-center">
        <div class="col-md-12 col-lg-6">
          <h2>Join our Services</h2>
          <br>
          <p>Saturday Night Service: 7:00 PM to 9:00 PM</p>
          <p>Sunday Service: 5:00 PM to 7:30 PM</p>
        <br>
        <a href="#" class="btn btn-primary">Upcoming Events</a> <br> <br>
        </div>
      <div class="col-lg-6">
          <iframe width="400" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.549664019194!2d-86.71740118454106!3d36.080086815600986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88646fa4679ec8fd%3A0xdc1c4f8e22867859!2sMill%20Creek%20Baptist%20Church!5e0!3m2!1sen!2sus!4v1572855023076!5m2!1sen!2sus"></iframe>
      </div>
      </div>
    </div>
    
    <!--Contact Container & Footer Bar-->
    <?php include($IPATH."footerbar.html") ?>

  </body>
</html>

<!--
Extra small devices (<768px): width: auto (or no width)
Small Devices (≥768px): width: 750px
Medium Devices (≥992px): width: 970px
Larger Devices (≥1200px): width: 1170px
-->
