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
                <form action="./send-email" method="post">
                    <?php
                    $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
                    parse_str($query, $params);
                    if (isset($params['success'])) { ?>
                        <p class="sucess text-white"><?php echo $params['success']; ?></p>
                    <?php } ?>
                    <div class="form-floating mb-3">
                        <input required type="text" class="form-control" name="name" id="floatingPassword">
                        <label for="floatingPassword">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input required type="email" class="form-control" name="email" id="floatingInput">
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating">
                        <textarea required class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea" style="resize:none; height: 150px"></textarea>
                        <label for="floatingTextarea">Message</label>
                    </div>
                    <div class=" text-center mt-2">
                        <button type="submit" class="btn btn-dark mt-3">Send</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <?php require "views/partials/footer.php"; ?>
<?php } else {
    header("Location: ./login");
} ?>