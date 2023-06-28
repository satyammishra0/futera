<!--------------------------- -->
<!------------ CSS files here  -->
<!--------------------------- -->
<link rel="stylesheet" href="../assets/css/global.css" />
<link rel="stylesheet" href="../assets/css/utility.css" />
<link rel="stylesheet" href="../assets/css/header-section.css" />
<link rel="stylesheet" href="../assets/css/footer.css" />

<!--------------------------- -->
<!------------ AOS Links Here -->
<!--------------------------- -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>



<!--------------------------- -->
<!------------ Header Starts  -->
<!--------------------------- -->

<header class="header sticky-header width-100 utility_flex-center-between sticky-header" id="main_website_header">
    <div class="header-logo">
        <a href="../pages/home.php">
            <img src="../assets/images/new-logo.png" alt="Header logo" />
        </a>
    </div>
    <nav>
        <ul class="nav-list utility_flex utility_flex-center-center">
            <li class="nav-links"><a href="../pages/home.php"> HOME</a></li>
            <li class="nav-links"><a href="../pages/about.php"> ABOUT</a></li>
            <li class="nav-links">
                <a href="../pages/project-1.php"> PROJECTS</a>
                <div class="sub-menu sub-menu-car" id="sub_menu">
                    <div class="sub-menu-child w-100 ">
                        <ul class="w-100 py-2">
                            <li class="w-100">
                                <a class="w-100" href="../pages/project-1.php">Project Aevum</a>
                            </li>
                            <li class="w-100">
                                <a class="w-100" href="../pages/project-2.php">Project Aria</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-links"><a href="../pages/amenities.php"> AMENITIES</a></li>
            <li class="nav-links"><a href="../pages/gallery.php"> GALLERY</a></li>
            <li class="nav-links"><a href="../pages/contact.php"> CONTACT</a></li>
            <li class="nav-links">
                <a href="https://www.instagram.com/futeragroup/" target="_blank"><i style="font-size:18px;" class='bx bxl-instagram'></i></a>
                <a href="https://www.facebook.com/profile.php?id=100092867637067" target="_blank"><i style="font-size:18px;" class='bx bxl-facebook-square'></i></a>
                <a href="https://www.youtube.com/@Futeragroup" target="_blank"><i style="font-size:18px;" class='bx bxl-youtube'></i></a>
            </li>
        </ul>
    </nav>
    <!-- --------------------- -->
    <!-- Mobile nav styling here -->
    <!-- --------------------- -->
    <div class="mobile-navbar-btn">
        <i class='bx bx-menu' class="mobile-nav-icon" id="menu-icon" name="menu-sharp"></i>
        <i class='bx bx-home' class="mobile-nav-icon" id="close-icon" name="close-sharp"></i>
    </div>
</header>


<!-- ----------------------- -->
<!-- On Scroll JS  -->
<!-- ----------------------- -->

<script>
    function updateHeaderColor() {
        if (window.innerWidth >= 600) {
            var header = document.getElementById('myHeader');
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;

            if (scrollPosition >= (0.2 * window.innerHeight)) {
                main_website_header.style.backgroundColor = "#000";
            } else {
                main_website_header.style.backgroundColor = "transparent";
            }
        }
    }

    window.addEventListener('scroll', updateHeaderColor);
    window.addEventListener('DOMContentLoaded', updateHeaderColor);
    window.addEventListener('resize', updateHeaderColor);
</script>