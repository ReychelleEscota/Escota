<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['id'])) {
?>
    <?php require "views/partials/header.php"; ?>
    <?php require "views/partials/nav.php"; ?>

    <style>
        .error {
            background: #f2dede;
            color: #a94442;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            margin: 20px auto;
        }

        .contact>li {
            background: none;
            color: white;
            font-weight: lighter;
        }

        .contact-label {
            margin-top: 1rem;
            font-weight: bold;
        }

        h5 {
            font-weight: lighter;
        }
    </style>

    <div class="container d-grid" style="min-height: 100vh; place-items:center">
        <div class="row justify-content-center w-100">
            <div class="col-md-6 d-grid text-white align-self-center justify-content-center">
                <label class="contact-label" for="">Name:</label>
                <h5>Reychelle Escota</h5>

                <label class="contact-label" for="">Birthday:</label>
                <h5>April 29, 2001</h5>

                <label class="contact-label" for="">Address:</label>
                <h5>Tagaytay Gubat, Sorsogon</h5>

                <label class="contact-label" for="">Contact:</label>
                <ul class="list-group contact">
                    <li class=" list-group-item fa-list-squares"> reychelledemonteverde.escota@bicol-u.edu.ph</li>
                    <li class=" list-group-item fa-list-squares"> 09665377985</li>
                </ul>
                <label class="contact-label" for="">Socials:</label>
                <ul class=" list-group list-group-horizontal gap-2">
                    <li class=" list-group-item rounded"> <a class="text-dark" href="https://www.facebook.com/reychelle.escota.3/"><i class="fab fa-facebook-f"></i></a></li>
                    <li class=" list-group-item rounded"> <a class="text-dark" href="https://www.instagram.com/ylleiz_zhh/?igshid=1q9q8q8q8q8q8q"> <i class="fab fa-instagram"></i></a></li>
                    <li class=" list-group-item rounded"> <a class="text-dark" href="https://twitter.com/ylle_verde?t=mSzl8hteWxK27J6ML7jd4A&s=07"> <i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6 p-4 pb-5 border border-dark shadow border-1 rounded border-opacity-25  bg-opacity-25 bg-dark" style="margin: 7rem 0 5rem 0">
                <h4 class="mb-3 fw-bold text-white">Contact me.</h4>
                <form action="./send-email" method="post">
                    <?php
                    $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
                    parse_str($query, $params); ?>
                    <?php if (isset($params['success'])) { ?>
                        <p class="sucess text-white bg-success p-2 rounded bg-opacity-75"><?php echo $params['success']; ?></p>
                    <?php } ?>
                    <?php if (isset($params['error'])) { ?>
                        <p class="error"><?php echo $params['error']; ?> Please use gmail server, thank you</p>
                    <?php } ?>

                    <div class="form-floating mb-3">
                        <input required type="text" class="form-control" name="name" id="floatingPassword" placeholder="username">
                        <label for="floatingPassword">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input required type="email" class="form-control" name="email" id="floatingInput" placeholder="email">
                        <label for="floatingInput">Email Address</label>
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