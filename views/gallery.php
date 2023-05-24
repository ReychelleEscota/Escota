<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['id'])) {
?>
    <?php require "views/partials/header.php"; ?>

    <?php require "views/partials/nav.php"; ?>
    <div class="container d-grid" style="min-height: 100vh; place-items:center">
        <!-- Gallery -->
        <div class="row mt-xxl-5 mb-5" style="margin-top:8rem">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="resources/img/photo_2023-05-24_09-13-39.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                <img src="resources/img/photo_2023-05-24_09-14-07.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="resources/img/photo_2023-05-24_09-14-10.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                <img src="resources/img/photo_2023-05-24_09-14-12.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="resources/img/photo_2023-05-24_09-14-15.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="resources/img/photo_2023-05-24_09-14-18.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="resources/img/photo_2023-05-24_09-14-22.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="resources/img/photo_2023-05-24_09-14-25.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="resources/img/photo_2023-05-24_09-14-36.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="resources/img/photo_2023-05-24_09-14-37.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="resources/img/photo_2023-05-24_09-14-39.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="resources/img/photo_2023-05-24_09-14-40.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="resources/img/photo_2023-05-24_09-14-41.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="resources/img/photo_2023-05-24_09-14-42.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="resources/img/photo_2023-05-24_09-14-44.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="resources/img/photo_2023-05-24_09-14-46.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>
        </div>
        <!-- Gallery -->
    </div>
    <?php require "views/partials/footer.php"; ?>
<?php } else {
    header("Location: ./login");
} ?>