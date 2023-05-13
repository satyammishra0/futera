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
        <h2>Our Gallery </h2>
        <div class="gallery-grid utility_grid">
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