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
    <link rel="stylesheet" href="../assets/css/gallery.css" />

</head>

<body>

    <!--------------------------- -->
    <!------------ First Section  -->
    <!--------------------------- -->
    <?php
    $page_title = "Gallery";
    include '../includes/header-section.php'; ?>

    <!--------------------------- -->
    <!------------ Second Section -->
    <!--------------------------- -->
    <section class="gallery-section">

        <div class="photo-selection utility_flex-total-center">
            <div class="photo-selection-div active-service button-ani" id="all-img">ELEVATIONS</div>
            <div class="photo-selection-div button-ani" id="building-process-img">BUILDING ENTRANCE</div>
            <div class="photo-selection-div button-ani" id="envoirnment-img">GROUND FLOOR</div>
            <div class="photo-selection-div button-ani" id="views-img">FLOOR</div>
            <div class="photo-selection-div button-ani" id="visualizing-complex-img">APARTMENT UNTIS</div>
            <div class="photo-selection-div button-ani" id="terrace-img">TERRACE</div>
        </div>

        <div class="gallery-grid gallery-grid-active" name="all-img">
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
        </div>

        <div class="gallery-grid " name="building-process-img">
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
        </div>

        <div class="gallery-grid " name="envoirnment-img">
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
        </div>

        <div class="gallery-grid " name="views-img">
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
        </div>

        <div class="gallery-grid " name="visualizing-complex-img">
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
        </div>

        <div class="gallery-grid " name="terrace-img">
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img src="../assets/images/home-bg.jpg" alt="Slider Image"></div>
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