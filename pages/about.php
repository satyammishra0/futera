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
    <!------------ First Section  -->
    <!--------------------------- -->
    <?php
    $page_title = "About Us";
    include '../includes/header-section.php'; ?>


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
            <div class="home_second-section-grid-img w3-content w3-section">
                <img src="../Futera/futera-6.jpg" class="mySlides" alt="Slider img">
                <img src="../Futera/futera-7.jpg" class="mySlides" alt="Slider img">
                <img src="../Futera/futera-8.jpg" class="mySlides" alt="Slider img">
                <img src="../Futera/futera-9.jpg" class="mySlides" alt="Slider img">

                <a class="button-ani" href="./gallery.php">Gallery</a>
            </div>
        </div>

        <!-- <div class="home_second-section-numbers utility_grid utility_grid-4" id="counter">
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
    </div> -->
    </section>

    <!--------------------------- -->
    <!------------ Slider (Third)-->
    <!--------------------------- -->

    <section class="home_third-section utility_background-property">
        <div class="parent_section-headings utility_flex-total-center">
            <span>02</span>
            <h2>Photo Tour</h2>
        </div>

        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="../assets/images/slider-img-1.jpg" style="width: 100%" />
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/slider-img-2.jpg" style="width: 100%" />
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/slider-img-3.jpg" style="width: 100%" />
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/home-bg.jpg" style="width: 100%" />
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/slider-img-3.jpg" style="width: 100%" />
            </div>
            <a class="prev" onclick="plusSlides(-1)">
                <p>Prev.</p>
            </a>
            <a class="next" onclick="plusSlides(1)">
                <p>Next</p>
            </a>
        </div>
        <br />

        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>


    <!--------------------------- -->
    <!------------ Footer -->
    <!--------------------------- -->
    <?php include '../includes/footer.php'; ?>
    <!--------------------------- -->
    <!------------ ALL Links -->
    <!--------------------------- -->
    <?php include '../includes/links.php'; ?>
    <script src="../assets/js/home-slider.js"></script>
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
</body>

</html>