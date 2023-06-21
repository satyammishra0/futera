<style>
    swiper-container {
        width: 100%;
        height: 100%;
    }

    swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    swiper-slide img {
        display: block;
        width: 100%;
        height: 100px;
        object-fit: cover;
    }

    swiper-container {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .mySwiper {
        height: 80%;
        width: 100%;
    }

    .mySwiper2 {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .mySwiper2 swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }

    .mySwiper2 .swiper-slide-thumb-active {
        opacity: 1;
    }

    swiper-slide img {
        display: block;
        width: 100%;
        height: 100px;
        object-fit: cover;
    }

    /* Arrows styling */
    .swiper-button-next,
    .swiper-button-prev {
        color: var(--dark-orange) !important;
    }

    .swiper-parent-overlay {
        position: relative;
    }

    .swiper-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #0000008f;
        color: var(--white);
        font-size: 25px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .swiper-overlay>h2 {
        font-size: 20px;
    }


    .swiper-overlay>h4 {
        font-size: 15px;
    }

    @media screen and (max-width: 700px) {
        .swiper-overlay {
            font-size: 18px;
        }
    }
</style>


<swiper-container style="--swiper-navigation-color: var(--dark-orange) !important; --swiper-pagination-color: #fff" class="mySwiper" thumbs-swiper=".mySwiper2" space-between="10" navigation="true">
    <swiper-slide>
        <div class="home_fourth-section-grid utility_grid">
            <div class="home_fourth-section-grid-content">
                <h4>Aveum- Floor Plan</h4>
                <div class="utility_flex-center-between">
                    <p>Blocks</p>
                    <p>2</p>
                </div>
                <div class="utility_flex-center-between">
                    <p>Floors Per Blocks</p>
                    <p>4</p>
                </div>
                <div class="utility_flex-center-between">
                    <p>Units Per Floor</p>
                    <p>1</p>
                </div>
                <div class="utility_flex-center-between">
                    <p>Each Unit Area</p>
                    <p>1900 Sft.</p>
                </div>
                <div class="utility_flex-center-between">
                    <p>Parking</p>
                    <p>YES</p>
                </div>
                <div class="utility_flex-center-between">
                    <p>Price</p>
                    <p><span style="color:var(--greenish-blue);font-weight:bold;">98 Lakhs</span> Onwards</p>
                </div>

                <button class="button-ani">
                    <a href="../.cpanel.yml" download>Download Brochure</a>
                </button>

            </div>
            <div class="home_fourth-section-grid-img">
                <img src="../assets/images/floor-plan.jpg" alt="">
            </div>
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="home_fourth-section-grids ">
            <img src="../Futera/futera-11.jpg" style="height:75vh; width:100%; margin:auto;" alt="">
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="home_fourth-section-grids ">
            <img src="../Futera/futera-12.jpg" style="height:75vh; width:100%; margin:auto;" alt="">
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="home_fourth-section-grids ">
            <img src="../Futera/futera-13.jpg" style="height:75vh; width:100%; margin:auto;" alt="">
        </div>
</swiper-container>

<swiper-container class="mySwiper2" space-between="10" slides-per-view="4" free-mode="true" watch-slides-progress="true">
    <swiper-slide class="swiper-parent-overlay">
        <div class="swiper-overlay">
            <h2>Aveum
            </h2>
            <h4> Floor Plan</h4>
        </div>
        <img src="../assets/images/black-bg.jpg" />
    </swiper-slide>
    <swiper-slide class="swiper-parent-overlay">
        <div class="swiper-overlay">
            <h2>Aveum</h2>
            <h4> 3d View 1st</h4>
        </div>
        <img src="../assets/images/black-bg.jpg" />
    </swiper-slide>
    <swiper-slide class="swiper-parent-overlay">
        <div class="swiper-overlay">
            <h2>Pent House</h2>
            <h4>3d View 2nd</h4>
        </div>
        <img src="../assets/images/black-bg.jpg" />
    </swiper-slide>
    <swiper-slide class="swiper-parent-overlay">
        <div class="swiper-overlay">
            <h2>Aveum</h2>
            <h4>3d View 3rd</h4>
        </div>
        <img src="../assets/images/black-bg.jpg" />
    </swiper-slide>
</swiper-container>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>