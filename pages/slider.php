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

    <!-- Link to the file hosted on your server, -->
    <link rel="stylesheet" href="path-to-the-file/splide.min.css">

    <!-- or link to the CDN -->
    <link rel="stylesheet" href="url-to-cdn/splide.min.css">

    <style>
        .body {
            position: relative;
            height: 100vh;
        }

        .wrapper {
            display: inline-block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .video-main {
            position: relative;
            display: inline-block;
        }

        .video {
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 100%;
            background: transparent;
            color: #fff;
            display: inline-block;
            background: #000000;
            z-index: 999;
        }

        @keyframes waves {
            0% {
                -webkit-transform: scale(0.2, 0.2);
                transform: scale(0.2, 0.2);
                opacity: 0;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            }

            50% {
                opacity: 0.9;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)";
            }

            100% {
                -webkit-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9);
                opacity: 0;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            }
        }

        .fa-play:before {
            content: "\f04b";

        }

        .waves {
            position: absolute;
            width: 150px;
            height: 150px;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            border-radius: 100%;
            right: -50px;
            bottom: -50px;
            z-index: -1;
            -webkit-animation: waves 3s ease-in-out infinite;
            animation: waves 3s ease-in-out infinite;
        }

        .video>i {
            font-size: 20px;
        }

        .wave-1 {
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
        }

        .wave-2 {
            -webkit-animation-delay: 1s;
            animation-delay: 1s;
        }

        .wave-3 {
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
        }
    </style>
</head>

<body>
    <!--------------------------- -->
    <!------------ Header Starts  -->
    <!--------------------------- -->
    <?php include '../includes/header.php' ?>



    <!--------------------------- -->
    <!------------ Slider (Third)-->
    <!--------------------------- -->

    <section class="home_third-section utility_background-property">
        <div class="parent_section-headings utility_flex-total-center">
            <h2>Photo Tour</h2>

        </div>

        <div class="slideshow-container">
            <div class="mySlides fade">
                <iframe id="video" src="//www.youtube.com/embed/FKWwdQu6_ok?enablejsapi=1&html5=1&mute=1" frameborder="0" allowfullscreen></iframe>
                <img src="../assets/images/slider-img-1.jpg" style="width: 70vw;" />
                <div class="wrapper">
                    <div class="video-main">
                        <div class="promo-video">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <p id="play-button" class="video video-popup mfp-iframe" data-lity><i class='bx bx-play'></i></p>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/slider-img-2.jpg" style="width: 70vw;" />
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/slider-img-3.jpg" style="width: 70vw;" />
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/home-bg.jpg" style="width: 70vw;" />
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/slider-img-3.jpg" style="width: 70vw;" />
            </div>
            <a class="prev" onclick="plusSlides(-1)">
                <p>Prev</p>
                <p>Photo</p>
            </a>
            <a class="next" onclick="plusSlides(1)">
                <p>Next</p>
                <p>Photo</p>
            </a>
        </div>
        <br />

        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>

    <!-- <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide" data-splide-html-video="path or URL to the video">
                    <img src="../assets/images/slider-img-3.jpg">
                </li>
                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=cdz__ojQOuU">
                    <img src="../assets/images/slider-img-3.jpg">
                </li>
                <li class="splide__slide" data-splide-vimeo="https://vimeo.com/215334213">
                    <img src="../assets/images/slider-img-3.jpg">
                </li>
            </ul>
        </div>
    </div> -->

    <section class="body">

    </section>


    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <script>
        const splide = new Splide('.splide', {
            heightRatio: 0.5625,
            cover: true,
            video: {
                loop: true,
            },
        });

        splide.mount({
            Video
        });
    </script>

    <script>
        // https://developers.google.com/youtube/iframe_api_reference

        // global variable for the player
        var player;

        // this function gets called when API is ready to use
        function onYouTubePlayerAPIReady() {
            // create the global player from the specific iframe (#video)
            player = new YT.Player("video", {
                events: {
                    // call this function when player is ready to use
                    onReady: onPlayerReady
                }
            });
        }

        function onPlayerReady(event) {
            // bind events
            var playButton = document.getElementById("play-button");
            playButton.addEventListener("click", function() {
                player.playVideo();
            });

            var pauseButton = document.getElementById("pause-button");
            pauseButton.addEventListener("click", function() {
                player.pauseVideo();
            });
        }

        // Inject YouTube API script
        var tag = document.createElement("script");
        tag.src = "//www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName("script")[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    </script>
    <?php include '../includes/footer.php'; ?>


    <!--------------------------- -->
    <!------------ ALL Links -->
    <!--------------------------- -->
    <?php include '../includes/links.php'; ?>


</body>

</html>