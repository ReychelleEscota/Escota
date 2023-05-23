<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['id'])) {
?>
    <?php require "views/partials/header.php"; ?>
    <?php require "views/partials/nav.php"; ?>

    <style>
        .list-group-item {
            /* color: white; */
            /* background-color: rgba(255, 255, 255, .1); */
            background-color: transparent;
        }

        .list-group-item {
            color: #fff;
        }
    </style>

    <div id="container" class="container d-grid" style="min-height: 100vh; place-items:center;">
        <div class="row">
            <div class="col-sm-12 mt-xlg-0" style="margin-top:6rem">
                <div class="row">
                    <div class="col-md-6 d-grid" style="place-items:center">
                        <img class="img-fluid w-75  rounded-bottom rounded-circle" src="./resources/img/me.jpg" alt="">
                    </div>
                    <!-- this is the part where you put your educational background -->
                    <div class="col-md-6 mb-lg-0 mb-5 d-grid align-self-center">
                        <h5 class=" text-center text-white fw-bold">Educational Background</h5>
                        <ul class="list-group list-group-flush shadow rounded">
                            <li class="list-group-item"><span class=" fw-bold">Elementary:</span> I attended Tagaytay Elementary School in Tagaytay, Gubat, Sorsogon from 2008 to 2014.</li>
                            <li class="list-group-item"><span class="fw-bold">Secondary (High School):</span> : I completed my high school education at Gubat National High School in Bonifacio St. Brgy, Paradijon, Gubat, Sorsogon from 2014 to 2018.</li>
                            <li class="list-group-item"><span class="fw-bold">Senior High School:</span> I continued my studies at Gubat National High School from 2018 to 2020.</li>
                            <li class="list-group-item"><span class="fw-bold">Tertiary:</span> Currently, I am pursuing my Bachelor's degree at Bicol University in Legazpi City, Albay, majoring in Information Technology. I am expected to graduate in 2025.</li>
                        </ul>
                    </div>
                </div>

                <div class="row mt-5">
                    <!-- this is the part where you put your skills -->
                    <div class="col-lg-12">
                        <h5 class=" text-center text-white fw-bold">Skills</h5>
                        <ul class="list-group list-group-flush shadow rounded">
                            <li class="list-group-item"><span class=" fw-bold">Data Analysis:</span> I possess strong skills in analyzing data, deriving insights, and making informed decisions based on data-driven findings.</li>
                            <li class="list-group-item"><span class=" fw-bold">Business Acumen:</span> I have a good understanding of business principles and practices, allowing me to contribute effectively to business-related tasks and projects.</li>
                            <li class="list-group-item"><span class=" fw-bold">Problem-solving:</span> I am skilled at identifying problems, evaluating options, and implementing effective solutions to overcome challenges.</li>
                            <li class="list-group-item"><span class=" fw-bold">Adaptability:</span> I am flexible and can quickly adapt to new environments and tasks, allowing me to thrive in dynamic and changing situations.</li>
                            <li class="list-group-item"><span class=" fw-bold">Database Management:</span> I have experience in managing and organizing databases, ensuring data integrity and efficient retrieval when needed.</li>
                        </ul>
                    </div>
                </div>
                <p class="m-5 text-white">With my educational background and skills, I am motivated to contribute to meaningful projects and make a positive impact in my field of study. I am passionate about continuous learning and exploring new opportunities to enhance my knowledge and expertise.</p>
            </div>

        </div>
    </div>
    <?php require "views/partials/footer.php"; ?>
<?php } else {
    header("Location: ./login");
} ?>