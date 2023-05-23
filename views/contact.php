<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['id'])) {
?>
    <?php require "views/partials/header.php"; ?>
    <?php require "views/partials/nav.php"; ?>

    <div class="container d-grid" style="min-height: 100vh; place-items:center">
        <div class="row justify-content-center w-100">
            <div class="col-md-5 p-4 pb-5 border border-dark shadow border-1 rounded border-opacity-25  bg-opacity-25 bg-dark" style="margin: 7rem 0 5rem 0">
                <h4 class="mb-3 fw-bold ">Contact me.</h4>
                <form action="">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="resize:none; height: 150px"></textarea>
                        <label for="floatingTextarea">Message</label>
                    </div>
                </form>
                <div class=" text-center mt-2">
                    <button class="btn btn-dark mt-3" onclick="window.location.href ='./contact'">Send</button>
                </div>
            </div>
        </div>

    </div>

    <?php require "views/partials/footer.php"; ?>
<?php } else {
    header("Location: ./login");
} ?>