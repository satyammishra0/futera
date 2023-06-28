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
        <?php include_once('../includes/apartment-plans.php') ?>

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

                    <div class="proximity-hover">
                        <h3>Nearby Schools</h3>
                        <ul>
                            <li>DRS International</li>
                            <li>St. Anns</li>
                            <li>Suchitra Academy</li>
                            <li>Delhi Public School</li>
                        </ul>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bx-plus-medical'></i>
                    <div>
                        <a href="">HOSPITALS</a>
                        <p>1.5km</p>
                    </div>

                    <div class="proximity-hover">
                        <h3>Nearby Hospitals</h3>
                        <ul>
                            <li>Renova Hospital</li>
                            <li>Ankura Hospital</li>
                            <li>Russh Hospital</li>
                            <li>Harsh Hospital</li>
                        </ul>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-building-house'></i>
                    <div>
                        <a href="">SHOPPING MALLS </a>
                        <p>2.0km</p>
                    </div>


                    <div class="proximity-hover">
                        <h3>Nearby Malls</h3>
                        <ul>
                            <li>Life Style</li>
                            <li>Raichandani Mall</li>
                            <li>Pantaloons</li>
                            <li>Westside</li>
                        </ul>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-cable-car'></i>
                    <div>
                        <a href="">NATIONAL HIGHWAY</a>
                        <p>1.5km</p>
                    </div>


                    <div class="proximity-hover">
                        <h3>Nearby Highways</h3>
                        <ul>
                            <li>NH 44 (Nagpur)</li>
                            <li>SH 1 (Karimnagar)</li>
                        </ul>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-store-alt'></i>
                    <div>
                        <a href="">BUISNESS DISTRICT</a>
                        <p>1.5km</p>
                    </div>


                    <div class="proximity-hover">
                        <h3>Buisness District</h3>
                        <ul>
                            <li>Alwal</li>
                            <li>Suchitra</li>
                            <li>Kompally</li>
                            <li>Medchal</li>
                        </ul>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-buildings'></i>
                    <div>
                        <a href="">IT PARKS</a>
                        <p>4.0km</p>
                    </div>


                    <div class="proximity-hover">
                        <h3>Nearby IT Parks</h3>
                        <ul>
                            <li>Kompally Twin Towers</li>
                        </ul>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-store-alt'></i>
                    <div>
                        <a href="">ORR</a>
                        <p>5.0km</p>
                    </div>


                    <div class="proximity-hover">
                        <h3>Nearby ORR</h3>
                        <ul>
                            <li>City Outer Ring Road</li>
                        </ul>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-train'></i>
                    <div>
                        <a href="">RAILWAY STATION</a>
                        <p>4.0km</p>
                    </div>


                    <div class="proximity-hover">
                        <h3>Railway Stations</h3>
                        <ul>
                            <li>Bolarum</li>
                            <li>Alwal</li>
                            <li>Medchal</li>
                            <li>Gundlapochampally</li>
                        </ul>
                    </div>
                </div>
                <div class="home_fifth-section-content-grid-one proximity-section-child-content">
                    <i class='bx bxs-store-alt'></i>
                    <div>
                        <a href="">Super Markets </a>
                        <p>1.5km</p>
                    </div>


                    <div class="proximity-hover">
                        <h3>Nearby Super Markets</h3>
                        <ul>
                            <li>Metro</li>
                            <li>Ratnadeep</li>
                            <li>Kompally D-Mart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--------------------------- -->
    <!-------- PROJECT HIGHLIGHT -->
    <!--------------------------- -->
    <section class="project-highlight">
        <div class="parent_section-headings utility_flex-total-center">
            <h2>PROJECT HIGHLIGHT</h2>
        </div>
        <div class="project-highlight-grid utility_grid utility_grid-2">
            <details open>
                <summary>
                    Structure
                </summary>
                <div>
                    <ul>
                        <li>
                            R.C.C Framed Structure
                        </li>
                    </ul>
                </div>
            </details>
            <details>
                <summary>
                    Stair Case
                </summary>
                <div>
                    <ul>
                        <li>Granite steps with railing</li>
                    </ul>
                </div>
            </details>
            <details>
                <summary>
                    Sit Out/ Balcony
                </summary>
                <div>
                    <ul>
                        <li>MS railing</li>
                    </ul>
                </div>
            </details>
            <details>
                <summary>
                    Windows
                </summary>
                <div>
                    <ul>
                        <li>UPVC Windows</li>
                    </ul>
                </div>
            </details>

            <details>
                <summary>
                    Super Structure
                </summary>
                <div>
                    <ul>
                        <li>All extended walls will be 9 inches with double plastering and all internal walls will be 4 inches with red brick</li>
                    </ul>
                </div>
            </details>
            <details>
                <summary>
                    Doors
                </summary>
                <div>
                    <ul>
                        <li>Main door frames of teak wood and polished venner shutter door will be given. </li>
                        <li>Internal doors sal wood frames with waterproof flush shutters.</li>
                    </ul>
                </div>
            </details>
            <details>
                <summary>
                    Bathroom
                </summary>
                <div>
                    <ul>
                        <li> I Tiles dado up to slab height. </li>
                        <li>I All sanitary ware of CERA/JAQUAR or equivalent make. </li>
                        <li> I All C.P fittings are of JAQUAR or standard make. </li>
                    </ul>
                </div>
            </details>


            <details>
                <summary>
                    Telecom
                </summary>
                <div>
                    <ul>
                        <li>Telephone and intercom points in Hall and security room in the cellar</li>
                    </ul>
                </div>
            </details>
            <details>
                <summary>
                    Painting
                </summary>
                <div>
                    <ul>
                        <li>All external & internal walls- acrylic emulsion paints with putty finishs</li>
                    </ul>
                </div>
            </details>
            <details>
                <summary>
                    Water Supply
                </summary>
                <div>
                    <ul>
                        <li>Separate municipal water provision in the kitchen</li>
                    </ul>
                </div>
            </details>
            <details>
                <summary>
                    Lift
                </summary>
                <div>
                    <ul>
                        <li>Standard make granite cladding For Lift in all Floor lobbies</li>
                    </ul>
                </div>
            </details>
            <details>
                <summary>
                    Lift
                </summary>
                <div>
                    <ul>
                        <li>Standard make granite cladding For Lift in all Floor lobbies</li>
                    </ul>
                </div>
            </details>
            <details>
                <summary>
                    Flooring
                </summary>
                <div>
                    <ul>
                        <li> Living & Dining vitrified tiles of the JHONSON / KAJARIA or equivalent standard brand</li>
                        <li> Bedrooms & Kitchen: 2x2' size vitrified tiles of JHONSON / KAJARIA or equivalent standard brand</li>
                        <li> Toilets, balcony & utilities anti-skid ceramic tiles of standard brand</li>
                        <li> Corridor will be granite</li>
                        <li> Kitchen: Stainless steel sink with 3 height DADO tiles</li>
                        <li> Utility DADO tiles</li>
                    </ul>
                </div>
            </details>
            <details>
                <summary>
                    Electrical
                </summary>
                <div>
                    <ul>
                        <li>Concealed copper
                            wiring with PVC insulated wires of FINOLEX/HAVELLS/
                            POLYCAB or equivalent make and modular switches of legrand, schneider or equivalent make</li>
                        <li>Power points for the chimney, refrigerator, microwave oven, mixer/grinder, water purifier, exhaust fan in the kitchen, and washing machine in utility areas</li>
                        <li>Power points for the geyser and exhaust fan will be provided in the bathrooms</li>
                        <li>Provision for AC points in all bedrooms and hall
                            TV point in hall and master bedroom</li>
                    </ul>
                </div>
            </details>
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