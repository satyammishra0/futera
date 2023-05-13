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
    <section class="contact-details utility_background-property">
        <div class="contact-details-grid utility_grid utility_grid-3">
            <div class="contact-details-grid-content utility_grid utility_grid-center">
                <i class='bx bx-map-pin'></i>
                <p>176.W D street name</p>
                <p>www.yourwebsite.com</p>
            </div>
            <div class="contact-details-grid-content utility_grid utility_grid-center">
                <i class='bx bx-map-pin'></i>
                <p>176.W D street name</p>
                <p>www.yourwebsite.com</p>
            </div>
            <div class="contact-details-grid-content utility_grid utility_grid-center">
                <i class='bx bx-map-pin'></i>
                <p>176.W D street name</p>
                <p>www.yourwebsite.com</p>
            </div>
        </div>

    </section>

    <!--------------------------- -->
    <!------------ Third section -->
    <!--------------------------- -->

    <section class="contact-form-section">
        <h2>Contact Us</h2>
        <form action="">
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Your Email">
            <textarea type="text" placeholder="Your Message"></textarea>
            <div class="utility_flex-total-center">
                <button type="submit">Submit</button>
            </div>
        </form>
    </section>


    <!--------------------------- -->
    <!------------ MAp Section -->
    <!--------------------------- -->
    <section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387194.0624612241!2d-74.30933914058495!3d40.69701925381924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1682802076924!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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