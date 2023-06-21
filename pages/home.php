<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Futera</title>

  <!--------------------------- -->
  <!------------ SEO Meta tags  -->
  <!--------------------------- -->
  <meta name="description" content="This is a property website to get you the right property.. " />
  <meta name="keywords" content="Property, Broker, Real estate" />
  <meta name="author" content="John Doe" />

  <!--------------------------- -->
  <!------------ CSS Files -->
  <!--------------------------- -->
  <link rel="stylesheet" href="../assets/css/home.css" />
  <link rel="stylesheet" href="../assets/css/video-slider.css" />
  <!--------------------------- -->
  <!------------ ALL Links -->
  <!--------------------------- -->
  <?php include '../includes/links.php'; ?>

</head>

<body>
  <!--------------------------- -->
  <!------------ Header Starts  -->
  <!--------------------------- -->
  <?php
  include '../includes/header.php'
  ?>

  <!-- ----------------------- -->
  <!-- Discalimer Box -->
  <!-- ----------------------- -->
  <div id="dialog" class="dialog">
    <div class="dialog-content">
      <h2>Please agree to the terms and conditions.</h2>
      <p>
        The information provided on this website is intended for general purposes
        only. While we make every effort to ensure the accuracy and timeliness of
        the information, we recommend contacting our authorized representatives
        for the latest updates. We do not provide any warranty for the information
        on this website, and we are not liable for any loss or damage that may
        occur as a result of using this website. The design, specifications, and
        other details may change without prior notice. The images and visuals are
        for representation purposes only and may not reflect the actual designs.
        <br /><br />

        The purpose of this website is to provide information about the Futera
        Group, including our projects and initiatives. The information is subject
        to change, and it should not be considered as an advertisement,
        invitation, or offer for sale. If you want more information about our
        projects, please contact our Sales Office or authorized Futera Sales
        Representative. By providing your contact details on the website, you give
        us permission to contact you with information about our projects via phone
        calls, SMS, and emails, even if your number is registered on the Do Not
        Disturb (DND) Registry.

        <br /><br />
        We use cookies to improve your browsing experience and personalize the
        content based on your preferences. By agreeing to our policies, you
        consent to the use of cookies. You can manage your cookie settings at any
        time by clicking on 'Cookie Settings'.

        <br /><br />
        Please note that it's important to consult with a legal professional to
        ensure compliance with local regulations and specific requirements for
        your website.
      </p>
      <button id="agreeBtn">Agree</button>
    </div>
  </div>

  <!--------------------------- -->
  <!------------ First Section  -->
  <!--------------------------- -->
  <section class="home_first-section utility_flex-total-center utility_background-property">
    <div class="home_first-content" data-aos="fade-up" data-aos-duration="1000">
      <p class="utility_heading-caption">Find the Best</p>
      <h1>Innovative Apartments For The Future Era of Living</h1>
      <button class="home_first-content-button">
        <a href="./about.php">Learn More</a>
      </button>
    </div>

    <button><a href="#home_second-section">Explore More</a></button>
  </section>

  <!--------------------------- -->
  <!------------ Second Section  -->
  <!--------------------------- -->
  <section class="home_second-section" id="home_second-section">
    <div class="home_second-section-grid utility_grid">
      <div class="home_second-section-grid-content">
        <p class="utility_heading-caption">Luxury Apartments</p>
        <h2 class="utility_main-heading">
          Luxury of a home,<br> convenience of an apartment
        </h2>
        <p class="text-second">
          Luxury meets convenience in our futuristic & beautiful residences. Experience the
          comfort and privacy of a luxurious home, complemented by the modern
          amenities and hassle-free living of an upscale apartment. Indulge in elegant
          finishes, spacious interiors, and personalized services, creating a refined lifestyle
          that redefines your expectations. Welcome to a new level of future era living.

        </p>
        <a href="./about.php">Read More</a>
      </div>
      <div class="home_second-section-grid-img w3-content w3-section">
        <img src="../Futera/futera-6.jpg" class="mySlide" alt="Slider img">
        <img src="../Futera/futera-7.jpg" class="mySlide" alt="Slider img">
        <img src="../Futera/futera-8.jpg" class="mySlide" alt="Slider img">
        <img src="../Futera/futera-9.jpg" class="mySlide" alt="Slider img">
        <a class="button-ani" href="./gallery.php">Gallery</a>
      </div>
    </div>

    <div class="home_second-section-numbers utility_grid utility_grid-4" id="counter">
      <div class="home_second-section-numbers-col">
        <h2 id="counter-element" class="counter-value" data-count="3">3</h2>
        <p>Bedroom Apartments</p>
      </div>
      <div class="home_second-section-numbers-col">
        <h2 class="counter-value" data-count="2">2</h2>
        <p>Blocks</p>
      </div>
      <div class="home_second-section-numbers-col">
        <h2 class="counter-value" data-count="8">8</h2>
        <p>Floors</p>
      </div>
      <div class="home_second-section-numbers-col">
        <h2 class="counter-value" data-count="8">8</h2>
        <p>Units</p>
      </div>
    </div>
  </section>
  <!--------------------------- -->
  <!------------ Slider (Third)-->
  <!--------------------------- -->


  <!--------------------------- -->
  <!------------ Fourth Section -->
  <!--------------------------- -->
  <section class="home_fourth-section">
    <div class="parent_section-headings utility_flex-total-center">
      <h2>Apartment plans</h2>
    </div>

    <?php include_once('../includes/apartment-plans.php') ?>
  </section>

  <!--------------------------- -->
  <!------------ Fifth Section -->
  <!--------------------------- -->
  <section class="home_fifth-section utility_background-property">
    <div class="home_fifth-section-content">

      <p class="utility_heading-caption">Apartments Amenities</p>
      <h2>Embrace Your Futuristic Lifestyle with Exceptional Amenities Ahead
      </h2>
      <div class="home_fifth-section-content-grid utility_grid utility_grid-4">
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-home'></i>
          <a href="">play area </a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bx-leaf'></i>
          <a href="">terrace garden </a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-leaf'></i>
          <a href="">tropical planatation </a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bx-chair'></i>
          <a href="">sitout area</a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-cable-car'></i>
          <a href="">lobby room </a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-bed'></i>
          <a href="">multipurpose room</a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-camera-home'></i>
          <a href="">cctv monitoring </a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bx-dumbbell'></i>
          <a href="">gym provision </a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bx-water'></i>
          <a href="">water softener </a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-car-battery'></i>
          <a href="">24 hour power backup</a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-car'></i>
          <a href="">electric vehicle charging</a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bx-street-view'></i>
          <a href="">outdoor yoga</a>
        </div>
      </div>

      <button class="button-ani">
        <a href="./amenities.php">Know More</a>
      </button>
    </div>
  </section>

  <!--------------------------- -->
  <!------------ video slider Section -->
  <!--------------------------- -->
  <div class="page-5">
    <div class="utility_flex-total-center">
      <h2>Photo & Video Tour</h2>
    </div>
    <div class="page-5">
      <div class="page-5-box">
        <div class="prev icon" id="left"><span>Previous</span><i class='bx bx-left-arrow-alt'></i></div>
        <div class="slide">

          <div class="slide-box slide-box1">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box2">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box3">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">

              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box4">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box3">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">

              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box4">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>

          <!-- ----------------------- -->
          <!-- Aerial images -->
          <!-- ----------------------- -->

          <div class="slide-box slide-box5">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box6">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box7">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box8">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box9">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box10">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box11">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box12">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box13">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box14">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box15">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box16">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box17">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="slide-box slide-box18">
            <div class="dark">
              <div class="play">
                <div class="img">
                  <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                  <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                </div>
              </div>
            </div>
            <div class="video-page">
              <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>

        </div>
        <div class="next icon" id="right"><span>Next</span><i class='bx bx-right-arrow-alt'></i></div>
      </div>
    </div>
  </div>
  <!--------------------------- -->
  <!------------ Sixth Section -->
  <!--------------------------- -->
  <section class="home_sixth-section utility_background-property">
    <div class="home_sixth-section-overlay"></div>
    <div class="home_sixth-section-top-content">
      <p class="utility_heading-caption"> Apartment Neiborhoods</p>
      <h2> Where Community and Convenience<br> Converge, Your Perfect Neighborhood
        Awaits
      </h2>
    </div>
  </section>
  <!--  -->
  <!--------------------------- -->
  <!------------ Footer  -->
  <!--------------------------- -->
  <?php include '../includes/footer.php'; ?>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script>
    var a = 0;
    $(window).scroll(function() {

      var oTop = $('#counter').offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter-value').each(function() {
          var $this = $(this),
            countTo = $this.attr('data-count');
          $({
            countNum: $this.text()
          }).animate({
              countNum: countTo
            },

            {

              duration: 2000,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
              }

            });
        });
        a = 1;
      }

    });
  </script>



  <script>
    // ---------------------------------
    // Second section carousel JS
    // ---------------------------------

    var slideIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlide");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {
        slideIndex = 1
      }
      x[slideIndex - 1].style.display = "block";
      setTimeout(carousel, 4000); // Change image every 2 seconds
    }
  </script>


  <script src="../assets/js/video-slider.js">

  </script>


  <!-- ----------------------- -->
  <!-- Popup JS -->
  <!-- ----------------------- -->
  <script>
    var dialog = document.getElementById('dialog');
    var agreeBtn = document.getElementById('agreeBtn');

    function hideDialog() {
      dialog.style.display = 'none'; // Hide the dialog box
    }

    agreeBtn.addEventListener('click', function() {
      hideDialog();
    });

    var dialogShown = localStorage.getItem('dialogShown');

    if (!dialogShown) {
      dialog.style.display = 'block'; // Show the dialog box
      localStorage.setItem('dialogShown', 'true');
    }
  </script>
</body>

</html>