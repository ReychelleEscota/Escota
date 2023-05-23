<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['id'])) {
?>
    <?php require "views/partials/header.php"; ?>

    <?php require "views/partials/nav.php"; ?>
    <div class="container d-grid" style="min-height: 100vh; place-items:center">

    </div>
    <?php require "views/partials/footer.php"; ?>
<?php } else {
    header("Location: ./login");
} ?>