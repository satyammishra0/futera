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
    <link rel="stylesheet" href="../assets/css/video-slider.css" />

</head>

<body>

    <!--------------------------- -->
    <!------------ First Section  -->
    <!--------------------------- -->
    <?php
    $page_title = "About Us";
    include '../includes/header-section.php'; ?>


    <!--------------------------- -->
    <!------------ Second Section  -->
    <!--------------------------- -->
    <section class="home_second-section">
        <div class="home_second-section-grid utility_grid">
            <div class="home_second-section-grid-content">
                <p class="utility_heading-caption">Luxury Apartments</p>
                <h2 class="utility_main-heading">
                    Luxury of a home,<br> convenience of an apartment
                </h2>
                <p class="text-second">
                    Luxury meets convenience in our futuristic & beautiful residences. Experience the
                    comfort and privacy of a luxurious home, complemented by the modern
                    amenities and hassle-free living of an upscale apartment. Indulge in elegant
                    finishes, spacious interiors, and personalized services, creating a refined lifestyle
                    that redefines your expectations. Welcome to a new level of future era living.

                </p>
                <a href="./about.php">Read More</a>
            </div>
            <div class="home_second-section-grid-img w3-content w3-section">
                <img loading="lazy" src="../Futera/futera-6.jpg" class="mySlide" alt="Slider img">
                <img loading="lazy" src="../Futera/futera-7.jpg" class="mySlide" alt="Slider img">
                <img loading="lazy" src="../Futera/futera-8.jpg" class="mySlide" alt="Slider img">
                <img loading="lazy" src="../Futera/futera-9.jpg" class="mySlide" alt="Slider img">

                <a class="button-ani" href="./gallery.php">Gallery</a>
            </div>
        </div>
    </section>

    <!--------------------------- -->
    <!------------ Slider (Third)-->
    <!--------------------------- -->
    <div class="page-5" style="background-color: #fff;">
        <div class="utility_flex-total-center">
            <h2>Photo & Video Tour</h2>
        </div>
        <div class="page-5" style="background-color: #fff;">
            <div class="page-5-box">
                <div class="prev icon" id="left"><span>Previous</span><i class='bx bx-left-arrow-alt'></i></div>
                <div class="slide">

                    <div class="slide-box slide-box1">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box2">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <video controls>
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                            <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box3">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <video controls>
                                <source src="../assets/videos/video-2.mp4" type="video/mp4">
                            </video>
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->


                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>


                    <!-- ----------------------- -->
                    <!-- Aerial images -->
                    <!-- ----------------------- -->

                    <div class="slide-box slide-box5">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/images/../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box6">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box7">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box8">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box9">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box10">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box11">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box12">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box13">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box14">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box15">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box16">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box17">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="slide-box slide-box18">
                        <div class="dark">
                            <div class="play">
                                <div class="img">
                                    <img id="icon-1" src="../assets/images/icons8-play-100.png" alt="">
                                    <img id="icon-2" src="../assets/images/icons8-play-101.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="video-page">
                            <!-- <iframe class="responsive-iframe" width="560" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

                            <video autoplay muted controls loop id="vid2" class="responsive-iframe">
                                <source src="../assets/videos/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                </div>
                <div class="next icon" id="right"><span>Next</span><i class='bx bx-right-arrow-alt'></i></div>
            </div>
        </div>
    </div>

    <!--------------------------- -->
    <!------------ Footer -->
    <!--------------------------- -->
    <?php include '../includes/footer.php'; ?>
    <!--------------------------- -->
    <!------------ ALL Links -->
    <!--------------------------- -->
    <?php include '../includes/links.php'; ?>
    <!-- <script src="../assets/js/home-slider.js"></script> -->
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>

    <script>
        // ---------------------------------
        // Second section carousel JS
        // ---------------------------------

        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlide");
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

    <script src="../assets/js/video-slider.js">
    </script>
</body>

</html>