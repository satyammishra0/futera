<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Futera -- Gallery</title>

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
    <link rel="stylesheet" href="../assets/css/anemities.css" />

</head>

<body>

    <!--------------------------- -->
    <!------------ First Section  -->
    <!--------------------------- -->
    <?php
    $page_title = "Amenities";
    include '../includes/header-section.php'; ?>

    <!--------------------------- -->
    <!------------ Second Section -->
    <!--------------------------- -->
    <section class="animities-services utility_background-property">
        <p class="utility_heading-caption">More About</p>
        <h2 class="utility_main-heading">
            OUR AMENITIES
        </h2>
        <div class="animties-services-parent utility_grid utility_grid-2">
            <div class="animities-services-grid utility_grid ">
                <div class="animities-services-grid-img utility_background-property">

                </div>
                <div class="animities-services-grid-content ">
                    <h2>GYM PROVISION</h2>
                    <p>Achieve your fitness goals with ease in a motivating environment. Whether you're an
                        avid fitness enthusiast or simply looking to stay active, our gym provision ensures a
                        space to add the equipment you need for a rewarding workout experience.
                    </p>
                </div>
            </div>

            <div class="animities-services-grid utility_grid ">
                <div class="animities-services-grid-img-1 utility_background-property">

                </div>
                <div class="animities-services-grid-content ">
                    <h2>children's play area</h2>
                    <p>Our children's play area is a haven of fun and excitement. With engaging play structures
                        and games, it's the perfect space for kids to let their imagination soar and create lasting
                        memories of joy and laughter.</p>
                </div>
            </div>

            <div class="animities-services-grid utility_grid ">
                <div class="animities-services-grid-img-2 utility_background-property">

                </div>
                <div class="animities-services-grid-content ">
                    <h2>terrace garden</h2>
                    <p>Escape to our tropical-inspired terrace garden, a serene oasis with lush greenery and
                        cozy sit-out areas. Perfect for quality time with family and friends, it's the ideal spot to
                        unwind and rejuvenate.</p>
                </div>
            </div>

            <div class="animities-services-grid utility_grid ">
                <div class="animities-services-grid-img-3 utility_background-property">

                </div>
                <div class="animities-services-grid-content ">
                    <h2>outdoor sitout area</h2>
                    <p>Our terrace garden boasts inviting sit-out areas amidst tropical greenery, creating a
                        tranquil space for families and friends to relax, unwind, and find solace from the stresses
                        of everyday life.</p>
                </div>
            </div>

            <div class="animities-services-grid utility_grid ">
                <div class="animities-services-grid-img-4 utility_background-property">

                </div>
                <div class="animities-services-grid-content ">
                    <h2>lobby room</h2>
                    <p>Our elegantly designed lobby room welcomes visitors and offers residents a comfortable
                        space to relax, read the newspaper, or simply unwind. A place where warmth and
                        comfort embrace every moment</p>
                </div>
            </div>

            <div class="animities-services-grid utility_grid ">
                <div class="animities-services-grid-img-5 utility_background-property">

                </div>
                <div class="animities-services-grid-content ">
                    <h2>multipurpose room</h2>
                    <p>Our versatile multipurpose room, nestled in the scenic roof garden, provides the perfect
                        setting for hosting parties, practicing yoga, and organizing various events. A space that
                        adapts to your every need.</p>
                </div>
            </div>

            <div class="animities-services-grid utility_grid ">
                <div class="animities-services-grid-img-6 utility_background-property">

                </div>
                <div class="animities-services-grid-content ">
                    <h2>Tropical Plantation</h2>
                    <p>Immerse yourself in the lush greenery of our Tropical Plantation, spanning across the
                        rooftop, ground floor and at every level in the building. Delight in the vibrant greenery,
                        fostering a serene and rejuvenating ambiance throughout the entire building.
                    </p>
                </div>
            </div>

            <div class="animities-services-grid utility_grid ">
                <div class="animities-services-grid-img-7 utility_background-property">

                </div>
                <div class="animities-services-grid-content ">
                    <h2>water softener</h2>
                    <p>Our advanced water softener system ensures the highest quality water throughout the
                        building. Say goodbye to hard water issues as this innovative technology provides you
                        with silky-smooth, clean, and refreshing water for all your daily needs.</p>
                </div>
            </div>

            <div class="animities-services-grid utility_grid ">
                <div class="animities-services-grid-img-8 utility_background-property">

                </div>
                <div class="animities-services-grid-content ">
                    <h2>CCTV monitoring</h2>
                    <p>Our reliable CCTV monitoring system safeguards our city-center apartment complex,
                        enabling quick response to unforeseen events. Rest easy knowing your safety is our
                        priority.</p>
                </div>
            </div>

            <div class="animities-services-grid utility_grid ">
                <div class="animities-services-grid-img-9 utility_background-property">

                </div>
                <div class="animities-services-grid-content ">
                    <h2>24 Hours Power Backup</h2>
                </div>
            </div>

            <div class="animities-services-grid utility_grid ">
                <div class="animities-services-grid-img-9 utility_background-property">

                </div>
                <div class="animities-services-grid-content ">
                    <h2>Electrical Battery Charging Provision</h2>
                </div>
            </div>
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

    <script>
        const accordion = document.querySelectorAll('.photo-selection-div');
        const accordion_content = document.querySelectorAll('.gallery-grid');


        for (let i = 0; i < accordion.length; i++) {
            accordion[i].addEventListener("click", (e) => {

                remove_cl();
                e.currentTarget.classList.add("active-service");
                document.querySelector('[name="hi"]')

                const check = document.querySelector('[name="' + e.currentTarget.id + '"]');
                check.classList.add('gallery-grid-active')
            });

        }

        function remove_cl() {
            for (let i = 0; i < accordion.length; i++) {
                accordion[i].classList.remove("active-service");
                accordion_content[i].classList.remove("gallery-grid-active")
            }
        };
    </script>
    <script src="../assets/js/home-slider.js"></script>
</body>

</html>