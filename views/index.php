<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['id'])) {
?>
    <?php require "views/partials/header.php"; ?>
    <?php require "views/partials/nav.php"; ?>

    <div class="container d-grid body-main" style="height: 100vh; place-items:center">
        <div class="row w-100">
            <div class="col-md-6 d-grid mb-md-0 mb-5" style="place-items:center">
                <div class="mt-md-0 mt-5">
                    <h2 class=" fw-bold text-white">Hello I am <span style="color: #ABC4AA">Reychelle</span>,</h2>
                    <p class=" text-white">An advocate for mental health awareness and an engaging artist, I host a dynamic podcast that fearlessly addresses stigma, empowers listeners to prioritize well-being, and intensifies the emotional impact through storytelling, dancing, and poetry. Each episode provides information, inspiration, and artistic expression, contributing to the ongoing dialogue on mental health awareness. </p>
                    <button class="btn btn-dark" onclick="window.location.href ='./about'">See More...</button>
                </div>
            </div>
            <div class="col-md-6 d-grid" style="place-items:center">
                <img class="img-fluid w-75  rounded-bottom rounded-circle" src="./resources/img/me2.jpg" alt="">
            </div>
        </div>
    </div>

    <?php require "views/partials/footer.php"; ?>
<?php } else {
    header("Location: ./login");
} ?>