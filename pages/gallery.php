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
    $img_path = "Futera/futera-1.jpg";
    $page_title = "Gallery";
    include '../includes/header-section.php'; ?>

    <!--------------------------- -->
    <!------------ Second Section -->
    <!--------------------------- -->
    <section class="gallery-section">

        <div class="photo-selection utility_flex-total-center">
            <div class="photo-selection-div active-service button-ani" id="all-img">ALL</div>
            <div class="photo-selection-div button-ani" id="interior-img">INTERIOR</div>
            <div class="photo-selection-div button-ani" id="exterior-img">EXTERIOR</div>
            <div class="photo-selection-div button-ani" id="videos-img">VIDEOS</div>
            <div class="photo-selection-div button-ani" id="work-progress-img">WORK PROGRESS</div>
        </div>

        <div class="gallery-grid gallery-grid-active" name="all-img">
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Aerial-left.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Aerial-right-night.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Ariel-right-Day.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Balcony-2.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Balcony.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/compound-wall-day.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/compound-wall-Night.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Front-Day.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Front-Night.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Left-ISO-Day.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Left-ISO-Night.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/lobby.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Right-ISO -2.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Right-ISO.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Terrace-day.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Terrace-Entry.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Terrace-Night.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Terrace-view -2.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Terrace-view-2.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Terrace-view.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Totlot.png" alt="Slider Image"></div>
        </div>

        <div class="gallery-grid" name="interior-img">
            <div class="gallery-grid-img"> <img loading="lazy" src="../file2/Dining-2.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file2/Dining.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file2/guest-Bedroom.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file2/Kids-Bedroom.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file2/Kitchen-2.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file2/Kitchen.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file2/Living-room-2.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file2/Living-Room.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file2/Master-Bedroom.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file2/Master-Bedroom2.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file2/Revised-Master-Bedroom.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file2/Toilet.png" alt="Slider Image"></div>

        </div>

        <div class="gallery-grid " name="exterior-img">
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Aerial-left.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Aerial-right-night.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Ariel-right-Day.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/compound-wall-day.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/compound-wall-Night.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Front-Day.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Front-Night.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Left-ISO-Day.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Left-ISO-Night.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Right-ISO -2.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Right-ISO.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Terrace-day.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Terrace-Entry.png" alt="Slider Image"></div>
            <div class="gallery-grid-img"> <img loading="lazy" src="../file1/Terrace-Night.png" alt="Slider Image"></div>
        </div>

        <div class="gallery-grid " name="videos-img">
        </div>

        <div class="gallery-grid " name="work-progress-img">
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