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
                <p class="text-second">
                    Each apartments has been individually designed to maximise space and
                    light. Smart Home Technology installed as standard in each apartment
                    putting you in total control of your home at the touch of a button
                    from wherever you might be.
                </p>
                <a href="#">Read More</a>
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
                <p>Prev</p>
                <p>Photo</p>
            </a>
            <a class="next" onclick="plusSlides(1)">
                <p>Next</p>
                <p>Photo</p>
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
</body>

</html>