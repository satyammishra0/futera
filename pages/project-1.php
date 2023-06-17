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
    $page_title = "Project Aevum";
    include '../includes/header-section.php'; ?>


    <!--------------------------- -->
    <!------------ Second Section  -->
    <!--------------------------- -->
    <section class="home_second-section">
        <div class="home_second-section-grid utility_grid">
            <div class="home_second-section-grid-content">
                <p class="utility_heading-caption">Futera Aevum</p>
                <h2 class="utility_main-heading">
                    Your own slice of paradise, <br> an entire floor to call your own
                </h2>
                <p class="text-second">
                    Welcome to Aevum, a pioneering residential project by Futera that embodies the essence of
                    future living in the vibrant neighborhood of Kompally. Nestled amidst the bustling city, Aevum
                    offers an oasis of peace and tranquility. With its unique floor living concept, residents enjoy the
                    luxury of an entire floor to themselves. Strategically located, Aevum provides easy access to
                    prestigious educational institutions, world-class healthcare facilities, vibrant entertainment
                    centers, diverse dining options, high-end shopping malls, and the upcoming IT district.
                    Experience the epitome of modernity and sophistication with our exceptional amenities and
                    embrace a futuristic lifestyle at Aevums
                </p>
                <a href="#">Read More</a>
            </div>
            <div class="home_second-section-grid-img w3-content w3-section">
                <img src="../Futera/futera-6.jpg" class="mySlides" alt="Slider img">
                <img src="../Futera/futera-7.jpg" class="mySlides" alt="Slider img">
                <img src="../Futera/futera-8.jpg" class="mySlides" alt="Slider img">
                <img src="../Futera/futera-9.jpg" class="mySlides" alt="Slider img">

                <a class="button-ani" href="./gallery.php">Gallery</a>
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
            <p>Prices starting from <span style="color:var(--greenish-blue);cursor:pointer;">98 Lakhs</span></p>
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
                    <i class='bx bxs-car-battery'></i>
                    <a href="">electric vehicle charging</a>
                </div>
                <div class="home_fifth-section-content-grid-one">
                    <i class='bx bx-street-view'></i>
                    <a href="">outdoor yoga</a>
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
                            <p>4</p>
                        </div>
                        <div class="utility_flex-center-between">
                            <p>Total Unti area</p>
                            <p>1850</p>
                        </div>
                        <div class="utility_flex-center-between">
                            <p>Unit per floor</p>
                            <p>1</p>
                        </div>
                        <div class="utility_flex-center-between">
                            <p>Bedroom</p>
                            <p>3</p>
                        </div>
                        <div class="utility_flex-center-between">
                            <p>Price</p>
                            <p><span style="color:var(--greenish-blue);font-weight:bold;">90 Lakhs</span></p>
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
    <!------------ PROXIMITY-->
    <!--------------------------- -->
    <section class="proximity-section utility_background-property">
        <div class="proximity-section-overlay">
            <div class="parent_section-headings utility_flex-total-center">
                <h2>PROXIMITY</h2>
            </div>
            <div class="home_fifth-section-content-grid utility_grid utility_grid-3">
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-school'></i>
                    <div>
                        <a href="">SCHOOLS </a>
                        <p>1.5km</p>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bx-plus-medical'></i>
                    <div>
                        <a href="">HOSPITALS</a>
                        <p>1.5km</p>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-building-house'></i>
                    <div>
                        <a href="">SHOPPING MALLS </a>
                        <p>2.0km</p>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-cable-car'></i>
                    <div>
                        <a href="">NATIONAL HIGHWAY</a>
                        <p>1.5km</p>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-store-alt'></i>
                    <div>
                        <a href="">BUISNESS DISTRICT </a>
                        <p>1.5km</p>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-buildings'></i>
                    <div>
                        <a href="">IT PARKS</a>
                        <p>4.0km</p>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-store-alt'></i>
                    <div>
                        <a href="">ORR</a>
                        <p>5.0km</p>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-train'></i>
                    <div>
                        <a href="">RAILWAY STATION</a>
                        <p>4.0km</p>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-store-alt'></i>
                    <div>
                        <a href="">D MART </a>
                        <p>1.5km</p>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bx-train'></i>
                    <div>
                        <a href="">METRO</a>
                        <p>3.5km</p>
                    </div>
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

    <script>
        // ---------------------------------
        // Second section carousel JS
        // ---------------------------------

        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
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

</body>

</html>