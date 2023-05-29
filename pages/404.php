<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Futera -- Contact</title>

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
    <link rel="stylesheet" href="../assets/css/404.css" />

</head>

<body>

    <!--------------------------- -->
    <!------------ First Section  -->
    <!--------------------------- -->
    <?php
    $page_title = "404";
    include '../includes/header-section.php'; ?>

    <!--------------------------- -->
    <!------------ 404 Section -->
    <!--------------------------- -->
    <section class="error-page-section">
        <div class="error-page-section-grid utility_grid utility_grid-2">
            <div class="error-page-section-grid-1">
                <p>404</p>
            </div>
            <div class="error-page-section-grid-2 utility_flex-total-center">
                <h2>OOPS...</h2>
                <p>WE'RE SORRY, BUT <br>
                    SOMETHING WENT WRONG.
                </p>
                <button class="utility_main-button"><a href="./home.php">Home Page</a></button>
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
    <script src="../assets/js/home-slider.js"></script>
</body>

</html>

<!--  https://retroscape.in/index.html-->
