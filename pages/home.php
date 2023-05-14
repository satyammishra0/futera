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
  <link rel="stylesheet" href="../assets/css/home-slider.css" />



</head>

<body>
  <!--------------------------- -->
  <!------------ Header Starts  -->
  <!--------------------------- -->
  <?php include '../includes/header.php' ?>

  <!--------------------------- -->
  <!------------ First Section  -->
  <!--------------------------- -->
  <section class="home_first-section utility_flex-total-center utility_background-property">
    <div class="home_first-content" data-aos="zoom-in" data-aos-duration="1500">
      <p class="utility_heading-caption">Find The Best</p>
      <h1>MODERN APARTMENT IN A NEW RESIDENTIAL COMPLEX</h1>
      <button class="home_first-content-button">
        <a href="#">Learn More</a>
      </button>
    </div>
  </section>

  <!--------------------------- -->
  <!------------ Explore Btn  -->
  <!--------------------------- -->
  <!-- <div class="explore">
      <a href="#">
        <p>Explore More</p>
        <i class="bx bx-down-arrow-alt"></i
      ></a>
    </div> -->


  <!--------------------------- -->
  <!------------ Second Section  -->
  <!--------------------------- -->
  <section class="home_second-section">
    <div class="home_second-section-grid utility_grid">
      <div class="home_second-section-grid-content">
        <p class="utility_heading-caption">Luxury Apartments</p>
        <h2 class="utility_main-heading">
          INTRODUCING A NEW<br />
          RESIDENTIAL COMPLEX
        </h2>
        <p class="text-second">
          Each apartments has been individually designed to maximise space and
          light. Smart Home Technology installed as standard in each apartment
          putting you in total control of your home at the touch of a button
          from wherever you might be.
        </p>
        <a href="#">Read More</a>
      </div>
      <div class="home_second-section-grid-img utility_background-property">

        <a class="button-ani" href="./gallery.php">Gallery</a>
      </div>
    </div>

    <div class="home_second-section-numbers utility_grid utility_grid-4">
      <div class="home_second-section-numbers-col">
        <h2 id="counter-element">136</h2>
        <p>Luxe Apartments</p>
      </div>
      <div class="home_second-section-numbers-col">
        <h2>355</h2>
        <p>Bedroom</p>
      </div>
      <div class="home_second-section-numbers-col">
        <h2>326</h2>
        <p>Square Areas</p>
      </div>
      <div class="home_second-section-numbers-col">
        <h2>1225</h2>
        <p>Happy Customers</p>
      </div>
    </div>
  </section>
  <!--------------------------- -->
  <!------------ Slider (Third)-->
  <!--------------------------- -->

  <section class="home_third-section utility_background-property">
    <div class="parent_section-headings utility_flex-total-center">
      <h2>Photo Tour</h2>
    </div>

    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="../assets/images/slider-img-1.jpg" />
      </div>

      <div class="mySlides fade">
        <img src="../assets/images/slider-img-2.jpg" />
      </div>

      <div class="mySlides fade">
        <img src="../assets/images/slider-img-3.jpg" />
      </div>

      <div class="mySlides fade">
        <img src="../assets/images/home-bg.jpg" />
      </div>

      <div class="mySlides fade">
        <img src="../assets/images/slider-img-3.jpg" />
      </div>

      <div class="mySlides fade">
        <img src="../assets/images/slider-img-3.jpg" />
      </div>

      <div class="mySlides fade">
        <img src="../assets/images/slider-img-3.jpg" />
      </div>
      <a class="prev" onclick="plusSlides(-1)">
        <p>Previous</p>
      </a>
      <a class="next" onclick="plusSlides(1)">
        <p>Next</p>

      </a>
    </div>
    <br />

  </section>

  <!--------------------------- -->
  <!------------ Fourth Section -->
  <!--------------------------- -->
  <section class="home_fourth-section">
    <div class="parent_section-headings utility_flex-total-center">

      <h2>Apartment plans</h2>
    </div>

    <swiper-container class="mySwiper" navigation="true">
      <swiper-slide>
        <div class="home_fourth-section-grid utility_grid">
          <div class="home_fourth-section-grid-content">
            <h4>Monterey</h4>
            <div class="utility_flex-center-between">
              <p>Home</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Room</p>
              <p>3</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Windows</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Total Sq. Km</p>
              <p>120</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Parking</p>
              <p>YES</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Price</p>
              <p><span style="color:var(--greenish-blue);font-weight:bold;">$2500</span></p>
            </div>

            <button class="button-ani">
              <a href="">Schedule a tour</a>
            </button>

          </div>
          <div class="home_fourth-section-grid-img">
            <img src="../assets/images/apartement-plan-1.webp" alt="">
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="home_fourth-section-grid utility_grid">
          <div class="home_fourth-section-grid-content">
            <h4>Monterey</h4>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <button class="button-ani">
              <a href="">Schedule a tour</a>
            </button>
          </div>
          <div class="home_fourth-section-grid-img">
            <img src="../assets/images/apartement-plan-1.webp" alt="">
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="home_fourth-section-grid utility_grid">
          <div class="home_fourth-section-grid-content">
            <h4>Monterey</h4>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <button class="button-ani">
              <a href="">Schedule a tour</a>
            </button>
          </div>
          <div class="home_fourth-section-grid-img">
            <img src="../assets/images/apartement-plan-1.webp" alt="">
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="home_fourth-section-grid utility_grid">
          <div class="home_fourth-section-grid-content">
            <h4>Monterey</h4>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <button class="button-ani">
              <a href="">Schedule a tour</a>
            </button>
          </div>
          <div class="home_fourth-section-grid-img">
            <img src="../assets/images/apartement-plan-1.webp" alt="">
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="home_fourth-section-grid utility_grid">
          <div class="home_fourth-section-grid-content">
            <h4>Monterey</h4>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <div class="utility_flex-center-between">
              <p>Floor</p>
              <p>6</p>
            </div>
            <button class="button-ani">
              <a href="">Schedule a tour</a>
            </button>
          </div>
          <div class="home_fourth-section-grid-img">
            <img src="../assets/images/apartement-plan-1.webp" alt="">
          </div>
        </div>
      </swiper-slide>
    </swiper-container>
  </section>

  <!--------------------------- -->
  <!------------ Fifth Section -->
  <!--------------------------- -->
  <section class="home_fifth-section utility_background-property">
    <div class="home_fifth-section-content">
      <p class="utility_heading-caption">Apartments Amenities</p>
      <h2>STUNNING LUXURY RENTAL APARTMENTS, DESIGNED FOR LIFE</h2>
      <div class="home_fifth-section-content-grid utility_grid utility_grid-3">
        <div class="home_fifth-section-content-grid-one">
          <i class="bx bx-wifi"></i>
          <a href="">FREE HEIGHT SPEED WI-FI </a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-shower'></i>
          <a href="">LUXURY APPLICANCES </a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-bowl-hot'></i>
          <a href="">OUTDOOR BBQ AREA </a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-car-garage'></i>
          <a href="">PARKING PLACE</a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bx-water'></i>
          <a href="">SWIMMING POOL </a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-basket'></i>
          <a href="">WASHER DRY</a>
        </div>
      </div>
    </div>
  </section>

  <!--------------------------- -->
  <!------------ Sixth Section -->
  <!--------------------------- -->
  <section class="home_sixth-section utility_background-property">
    <div class="home_sixth-section-overlay"></div>
    <div class="home_sixth-section-top-content">
      <p class="utility_heading-caption"> Apartment Neiborhoods</p>
      <h2> STUNNING LUXURY RENTAL APARTMENTS, <br>DESIGNED FOR LIFE
      </h2>
    </div>
    <div class="north-bridge  tooltip" title="North Bridge">
      <p><span></span></p>
    </div>
    <div class="south-bridge  tooltip" title="South Bridge">
      <p><span></span></p>
    </div>
    <div class="parliament tooltip" title="Parliament">
      <p><span></span></p>
    </div>
    <div class="public-library  tooltip" title="Public Library">
      <p><span></span></p>
    </div>
  </section>

  <!--------------------------- -->
  <!------------ Footer  -->
  <!--------------------------- -->
  <?php include '../includes/footer.php'; ?>


  <!--------------------------- -->
  <!------------ ALL Links -->
  <!--------------------------- -->
  <?php include '../includes/links.php'; ?>


</body>

</html>