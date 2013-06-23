<?php include 'header.inc.php' ?>

          <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="active item">
                <a href="sortiment.php">
                  <img src="img/slide1.jpg" alt="">
                  <div class="carousel-caption">
                    <p>Nachtw&auml;sche, Unterw&auml;sche, Miederware, Strickgarn ...</p>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="dienstleistungen.php">
                  <img src="img/slide2.jpg" alt="">
                  <div class="carousel-caption">
                    <p>Strickanleitungen, &Auml;nderungen nach Mass und Wunsch</p>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="team.php">
                  <img src="img/slide3.jpg" alt="">
                  <div class="carousel-caption">
                    <p>Seit 12 Jahren fachgerechte, kompetente und pers&ouml;nliche Beratung</p>
                  </div>
                </a>
              </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>

          <script src="js/jquery.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script>
              !function ($) {
                $(function(){
                  // carousel demo
                  $('#myCarousel').carousel()
                })
              }(window.jQuery)
          </script>

<?php include 'footer.inc.php' ?>

