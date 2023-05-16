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
                    INTRODUCING A NEW<br />
                    RESIDENTIAL COMPLEX
                </h2>
                <style>
                    #more {
                        display: none;
                    }
                </style>
                <p class="text-second">
                    Step into our world, where the future of apartment living is already a reality. Our team of
                    experienced and visionary apartment builders is dedicated to crafting exceptional living spaces
                    designed specifically for the future era. <span id="dots">...</span><span id="more">We are passionate about innovation and sustainability,
                        and we believe that building for the future is not just a goal but a necessity.
                        Our focus is on quality, affordability, and customer service, with the aim of delivering an
                        unparalleled living experience to our residents. Our approach to apartment building is inspired
                        by the future era of living, where modern design and sustainable practices come together to
                        create a better world.
                        Innovation is at the heart of what we do, and we are continuously pushing the limits to explore
                        new possibilities. We are committed to provide sustainability, comfort and privacy of a luxurious
                        home, complemented by the modern amenities and hassle-free living of an upscale apartment.
                        At our company, we are building a community where luxury, futuristic living, modernity and
                        community are at the forefront. We believe that everyone deserves to live in a comfortable,
                        modern, and sustainable living space, and we are committed to bringing this vision to life for our
                        residents.
                    </span>
                </p>
                <a href="#" onclick="myFunction()" id="myBtn">Read More</a>
            </div>
            <div class="home_second-section-grid-img utility_background-property">
                <a href="#">Gallery</a>
            </div>
        </div>

        <div class="home_second-section-numbers utility_grid utility_grid-4">
            <div class="home_second-section-numbers-col">
                <h2>136</h2>
                <p>Luxe Apartments</p>
            </div>
            <div class="home_second-section-numbers-col">
                <h2>136</h2>
                <p>Luxe Apartments</p>
            </div>
            <div class="home_second-section-numbers-col">
                <h2>136</h2>
                <p>Luxe Apartments</p>
            </div>
            <div class="home_second-section-numbers-col">
                <h2>136</h2>
                <p>Luxe Apartments</p>
            </div>
        </div>
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