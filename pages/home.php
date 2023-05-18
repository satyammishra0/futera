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
  <!-- <link rel="stylesheet" href="../assets/css/home-slider.css" /> -->
  <link rel="stylesheet" href="../assets/css/video-slider.css" />


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
    <div class="home_first-content" data-aos="fade-up" data-aos-duration="1000">
      <p class="utility_heading-caption">Find the Best</p>
      <h1>Innovative Apartments For The Future Era of Living</h1>
      <button class="home_first-content-button">
        <a href="./about.php">Learn More</a>
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
      <div class="home_second-section-grid-img utility_background-property">

        <a class="button-ani" href="./gallery.php">Gallery</a>
      </div>
    </div>

    <div class="home_second-section-numbers utility_grid utility_grid-4" id="counter">
      <div class="home_second-section-numbers-col">
        <h2 id="counter-element" class="counter-value" data-count="300">1</h2>
        <p>Luxe Apartments</p>
      </div>
      <div class="home_second-section-numbers-col">
        <h2 class="counter-value" data-count="200">0</h2>
        <p>Bedroom</p>
      </div>
      <div class="home_second-section-numbers-col">
        <h2 class="counter-value" data-count="800">1</h2>
        <p>Square Areas</p>
      </div>
      <div class="home_second-section-numbers-col">
        <h2 class="counter-value" data-count="800">1</h2>
        <p>Happy Customers</p>
      </div>
    </div>
  </section>
  <!--------------------------- -->
  <!------------ Slider (Third)-->
  <!--------------------------- -->

  <!-- <section class="home_third-section utility_background-property">
    <div class="parent_section-headings utility_flex-total-center">
      <h2>Photo & Video Tour</h2>
    </div>

    <div class="slideshow-container">
      <div class="mySlides fade">
        <iframe width="100%" height="200%" src="https://www.youtube.com/embed/nzfI4oiG2BM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>

      <div class="mySlides fade">
        <img src="../Futera/futera-2.jpg" />
      </div>

      <div class="mySlides fade">
        <img src="../Futera/futera-3.jpg" />
      </div>

      <div class="mySlides fade">
        <img src="../Futera/futera-7.jpg" />
      </div>

      <div class="mySlides fade">
        <img src="../Futera/futera-4.jpg" />
      </div>

      <div class="mySlides fade">
        <img src="../Futera/futera-5.jpg" />
      </div>

      <div class="mySlides fade">
        <img src="../Futera/futera-6.jpg" />
      </div>
      <div class="mySlides fade">
        <img src="../Futera/futera-7.jpg" />
      </div>

      <div class="mySlides fade">
        <img src="../Futera/futera-8.jpg" />
      </div>

      <div class="mySlides fade">
        <iframe width="100%" height="200%" src="https://www.youtube.com/embed/nzfI4oiG2BM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>

      <div class="mySlides fade">
        <iframe width="100%" height="200%" src="https://www.youtube.com/embed/nzfI4oiG2BM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <a class="prev" onclick="plusSlides(-1)">
        <p>Previous</p>
      </a>
      <a class="next" onclick="plusSlides(1)">
        <p>Next</p>

      </a>
    </div>
    <br />

  </section> -->

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
      <h2>Embrace Your Futuristic Lifestyle with Exceptional Amenities Ahead
      </h2>
      <div class="home_fifth-section-content-grid utility_grid utility_grid-3">
        <div class="home_fifth-section-content-grid-one">
          <i class="bx bx-wifi"></i>
          <a href="">Children Playarea </a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-shower'></i>
          <a href="">Terrace Garden</a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-bowl-hot'></i>
          <a href="">Outdoor Sitout Area</a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-car-garage'></i>
          <a href="">Outdoor Sitout Area</a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bx-water'></i>
          <a href="">Tropical Plantation</a>
        </div>
        <div class="home_fifth-section-content-grid-one">
          <i class='bx bxs-basket'></i>
          <a href="">Water Softener</a>
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
    <div class="parent_section-headings utility_flex-total-center">
      <h2>Photo & Video Tour</h2>
    </div>
    <div class="page-5-box">
      <div class="prev icon" id="left"><span>Prev</span><i class='bx bx-left-arrow-alt'></i></div>
      <div class="slide">
        <div class="slide-box slide-box1">
          <div class="dark">
            <div class="play"><img id="icon-1" src="../assets/images/icons8-play-100.png" alt=""><img id="icon-2" src="../assets/images/icons8-play-101.png" alt=""></div>
          </div>
          <div class="video-page">

            <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
        <div class="slide-box slide-box2">
          <div class="dark">
            <div class="play"><img id="icon-1" src="../assets/images/icons8-play-100.png" alt=""><img id="icon-2" src="../assets/images/icons8-play-101.png" alt=""></div></i>
          </div>
          <div class="video-page">

            <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
        <div class="slide-box slide-box3">
          <div class="dark">
            <div class="play"><img id="icon-1" src="../assets/images/icons8-play-100.png" alt=""><img id="icon-2" src="../assets/images/icons8-play-101.png" alt=""></div>
          </div>
          <div class="video-page">

            <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
        <div class="slide-box slide-box4">
          <div class="dark">
            <div class="play"><img id="icon-1" src="../assets/images/icons8-play-100.png" alt=""><img id="icon-2" src="../assets/images/icons8-play-101.png" alt=""></div>
          </div>
          <div class="video-page">

            <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="next icon" id="right"><span>Next </span><i class='bx bx-right-arrow-alt'></i></div>
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
                //alert('finished');
              }

            });
        });
        a = 1;
      }

    });
  </script>

  <script>
    let item = document.getElementsByClassName("slide")[0]
    item.addEventListener("mousemove", move)
    item.addEventListener("touchmove", move)
    item.addEventListener("mousedown", dragdown)
    item.addEventListener("touchstart", dragdown)
    item.addEventListener("mouseup", dragup)
    item.addEventListener("touchend", dragup)
    let down = false
    let prevpage
    let prevscroll

    function move(e) {
      e.preventDefault();
      if (!down) {
        return;
      } else {

        let position = (e.pageX || e.touches[0].pageX) - prevpage
        // console.log(position)
        item.scrollLeft = prevscroll - position;
      }

    }

    function dragdown(e) {
      down = true
      prevpage = e.pageX || e.touches[0].pageX;
      prevscroll = item.scrollLeft
    }

    function dragup() {
      down = false
      // console.log(prevpage)
      // console.log(prevscroll)

    }

    ////////////////////////////////////////////////////////////////////////////////

    let icon = document.getElementsByClassName("icon");
    firstImg = item.getElementsByClassName("slide-box")[0];
    let srcremove = document.getElementsByClassName("responsive-iframe")
    let srcopen = srcremove[0].src;
    // console.log(srcopen)
    let currentActive = 0;
    for (let i = 0; i < icon.length; i++) {
      icon[i].addEventListener("click", function() {
        for (let j = 0; j < slidebox.length; j++) {
          videopage[j].classList.remove("block-vedio")
          srcremove[j].src = ' ';
        }
        let firstImgWidth = firstImg.clientWidth;
        if (i == 1) {
          currentActive += 1;
          if (currentActive == 4) {
            currentActive = 0
            item.scrollLeft = 0;
            return;
          }
          // console.log(currentActive)
          item.scrollLeft += firstImgWidth
        } else {

          if (currentActive == 0) {
            currentActive == 0
            return;
          }
          currentActive -= 1;
          // console.log(currentActive)
          item.scrollLeft -= firstImgWidth
        }

      })
    }

    ////////////////////////////////////////////////////////////////////////////////
    let slidebox = document.getElementsByClassName("slide-box")
    let play = document.querySelectorAll(".dark img");
    let videopage = document.querySelectorAll(".slide-box .video-page");

    for (let i = 0; i < slidebox.length; i++) {
      slidebox[i].addEventListener("mouseover", function() {
        document.getElementsByClassName("dark")[i].classList.add("dark-image")
        document.getElementsByClassName("play")[i].classList.add("play-button")
      })
      slidebox[i].addEventListener("mouseout", function() {
        document.getElementsByClassName("dark")[i].classList.remove("dark-image")
        document.getElementsByClassName("play")[i].classList.remove("play-button")
      })
      play[i].addEventListener("click", function() {
        videopage[i].classList.add("block-vedio")
        srcremove[i].src = srcopen;
      })
    }

    /////////////////////////////////////////////////////////////////////////////
  </script>
</body>

</html>