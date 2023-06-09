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
    <link rel="stylesheet" href="../assets/css/contact.css" />

</head>

<body>

    <!--------------------------- -->
    <!------------ First Section  -->
    <!--------------------------- -->
    <?php
    $page_title = "Contact";
    include '../includes/header-section.php'; ?>

    <!--------------------------- -->
    <!------------ Second Section -->
    <!--------------------------- -->
    <section class="contact-grid utility_grid utility_grid-2">

        <section class="contact-details utility_background-property">
            <div class="contact-details-grid ">
                <div class="contact-details-grid-content utility_grid utility_grid-center">
                    <i class='bx bxs-phone-call'></i>
                    <p>+91 9966 906 906</p>
                    <!-- <p>www.futeragroup.com</p> -->
                </div>
                <div class="contact-details-grid-content utility_grid utility_grid-center">
                    <i class='bx bxs-envelope'></i>
                    <p>contact@futeragroup.com</p>
                    <!-- <p>www.futeragroup.com</p> -->
                </div>
                <div class="contact-details-grid-content utility_grid utility_grid-center">
                    <i class='bx bx-map-pin'></i>
                    <p>Plot no 27,28 Vaishnaoi Enclave Petbasheerabad Village, Kompally, Hyderabad 500067</p>
                    <!-- <p>www.futeragroup.com</p> -->
                </div>
            </div>

        </section>


        <section class="contact-form-section">
            <h2>Contact Us</h2>
            <form action="./form_check.php" method="POST">
                <input type="text" placeholder="Your Name" name="username">
                <input type="text" placeholder="Your Email" name="useremail">
                <textarea type="text" placeholder="Your Message" name="usermessage"></textarea>
                <div class="utility_flex-total-center">
                    <input type="submit" name="submitbtn" value="Submit">
                </div>
                <div class="success-message">
                    <?php
                    if (isset($_GET['successMessage'])) {
                        echo $_GET['successMessage'];
                    }
                    ?>
                </div>
                <div class="error-message">
                    <?php
                    if (isset($_GET['error'])) {
                        echo $_GET['error'];
                    }
                    ?>
                </div>
            </form>
        </section>

    </section>

    <!--------------------------- -->
    <!------------ Third section -->
    <!--------------------------- -->



    <!--------------------------- -->
    <!------------ MAp Section -->
    <!--------------------------- -->
    <section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3104.8368963774255!2d78.4920263755859!3d17.522900216636174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDMxJzIyLjMiTiA3OMKwMjknMzcuNiJF!5e0!3m2!1sen!2sin!4v1687271338403!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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