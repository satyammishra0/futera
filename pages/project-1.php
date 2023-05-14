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
    <link rel="stylesheet" href="../assets/css/project-1.css" />

</head>

<body>
    <!--------------------------- -->
    <!------------ First Section  -->
    <!--------------------------- -->
    <?php
    $page_title = "Project 1";
    include '../includes/header-section.php'; ?>


    <!--------------------------- -->
    <!------------ Second Section  -->
    <!--------------------------- -->
    <section class="home_second-section">
        <div class="home_second-section-grid utility_grid">
            <div class="home_second-section-grid-content">
                <p class="utility_heading-caption">Futera Aurem</p>
                <h2 class="utility_main-heading">
                    YOUR OWN SENSE OF PARADISE<br />
                    FLOOR TO CALL YOUR OWN
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

            </div>
        </div>
        <div class="home_second-section-numbers utility_grid utility_grid-4">
            <div class="home_second-section-numbers-col">
                <h2 id="counter-element">3</h2>
                <p>Bedroom Apartments</p>
            </div>
            <div class="home_second-section-numbers-col">
                <h2>2</h2>
                <p>Blocks</p>
            </div>
            <div class="home_second-section-numbers-col">
                <h2>8</h2>
                <p>Floor</p>
            </div>
            <div class="home_second-section-numbers-col">
                <h2>8</h2>
                <p>Units</p>
            </div>
        </div>
        <div class="home_second-section-price">
            <p>Price starts from 90 Lakhs</p>
        </div>
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
                            <p>$2500</p>
                        </div>
                        <button class="">
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
                        <button class="utility_main-button">
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
                        <button class="utility_main-button">
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
                        <button class="utility_main-button">
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
                        <button class="utility_main-button">
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
    <!------------ Slider (Third)-->
    <!--------------------------- -->

    <section class="home_third-section utility_background-property">
        <div class="parent_section-headings utility_flex-total-center">
            <h2 style="color:var(--dark-color);">Photo Tour</h2>
        </div>

        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="../assets/images/slider-img-1.jpg" style="width: 70vw;" />
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/slider-img-2.jpg" style="width: 70vw;" />
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/slider-img-3.jpg" style="width: 70vw;" />
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/home-bg.jpg" style="width: 70vw;" />
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/slider-img-3.jpg" style="width: 70vw;" />
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
    </section>

    <!--------------------------- -->
    <!------------ PROXIMITY-->
    <!--------------------------- -->
    <section class="proximity-section utility_background-property">
        <div class="proximity-section-overlay">
            <div class="parent_section-headings utility_flex-total-center">
                <h2>PROXIMITY</h2>
            </div>
            <div class="home_fifth-section-content-grid utility_grid utility_grid-3">
                <div class="home_fifth-section-content-grid-one">
                    <i class='bx bxs-school'></i>
                    <a href="">SCHOOLS </a>
                    <p>1.5km</p>
                </div>
                <div class="home_fifth-section-content-grid-one">
                    <i class='bx bx-plus-medical'></i>
                    <a href="">HOSPITALS</a>
                    <p>1.5km</p>
                </div>
                <div class="home_fifth-section-content-grid-one">
                    <i class='bx bxs-building-house'></i>
                    <a href="">SHOPPING MALLS </a>
                    <p>1.5km</p>
                </div>
                <div class="home_fifth-section-content-grid-one">
                    <i class='bx bxs-cable-car'></i>
                    <a href="">NATIONAL HIGHWAY</a>
                    <p>1.5km</p>
                </div>
                <div class="home_fifth-section-content-grid-one">
                    <i class='bx bxs-store-alt'></i>
                    <a href="">BUISNESS DISTRICT </a>
                    <p>1.5km</p>
                </div>
                <div class="home_fifth-section-content-grid-one">
                    <i class='bx bxs-buildings'></i>
                    <a href="">IT PARKS</a>
                    <p>1.5km</p>
                </div>
            </div>
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