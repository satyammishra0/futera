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

<header class="header width-100 utility_flex-center-between">
    <div class="header-logo">
        <a href="">
            <img src="../assets/images/logo.webp" alt="Header logo" />
        </a>
    </div>
    <nav>
        <ul class="nav-list utility_flex utility_flex-center-center">
            <li class="nav-links"><a href="../pages/home.php"> HOME</a></li>
            <li class="nav-links"><a href="../pages/about.php"> ABOUT</a></li>
            <li class="nav-links"><a href=""> FEATURES</a></li>
            <li class="nav-links"><a href="../pages/gallery.php"> GALLERY</a></li>
            <li class="nav-links"><a href="../pages/gallery.php"> PROJECTS</a></li>
            <li class="nav-links"><a href="../pages/contact.php"> CONTACTS</a></li>
            <li class="nav-links"><a href="../pages/contact.php"> ANEMITIES</a></li>
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