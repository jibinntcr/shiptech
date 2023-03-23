<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('includes/config.php');
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Research | Department of Shiptechnology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/courseDetails.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <!-- <span class="sr-only">Loading...</span> -->
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include('partials/header.php') ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Research</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Research</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg"
                            style="object-fit: cover; border-radius: 20px;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp ship-contact-data" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">Research</h6>
                    <h1 class="mb-3">Course Description</h1>
                    <p class="mb-5 justify-para" style=" margin-left: 15px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque saepe adipisci rem sunt sint
                        error, laborum aperiam velit dolorum? Sunt accusantium maiores alias eaque facilis sit incidunt
                        culpa dignissimos vitae doloribus qui unde facere enim, ducimus quas veniam. Voluptas,
                        consequuntur ipsam rem doloremque voluptate laborum ratione fugit maiores dignissimos nesciunt
                        cupiditate dolores molestias. Nemo accusantium vero quia eaque debitis hic, nostrum magni
                        repellat labore adipisci quis deleniti quos cumque alias animi voluptas ducimus totam pariatur
                        illo aliquid sit cum enim! Ea similique totam et modi nihil. Veritatis debitis quia cumque ab
                        odio voluptatem, eveniet exercitationem ipsum alias perferendis atque molestiae.
                    </p>
                    <h4 class="mb-2">Regulations</h4>
                    <ul class="mission-dot " style=" margin-left: 15px;">
                        <?php

                        $sql = "SELECT * from regulations  WHERE status='1' ORDER BY `regulations`.`year` DESC";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = 1;
                        if ($query->rowCount() > 0) {
                            foreach ($results as $result) {
                        ?>
                        <li class="mb-0">
                            <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                            <a href="uploads/<?php echo $result->file ?>" target="_blank" class="white col-11"
                                href="link"><?php echo $result->name ?></a>
                        </li>
                        <?php }
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div>
                <h1 class="row justify-content-center mb-4">Research Guides</h1>
                <div class="row gy-5 gx-4 mb-4">
                    <div class="container-xxl py-5 wow fadeInUp p-4" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="container">
                            <div class="row g-4">
                                <?php

                                $sql = "SELECT * from researchguide  WHERE status='1'";
                                $query = $dbh->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                $cnt = 1;
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $result) {
                                ?>

                                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s"
                                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <div class="our-teamRec">
                                        <img src="uploads/<?php echo $result->image ?>" alt="">
                                        <div class="team-content">
                                            <h3 class="team-title">
                                                <a><?php echo $result->name ?></a><small><?php echo $result->designation ?></small>
                                            </h3>
                                            <!-- <a class="mb-0 centerIcon" data-toggle="collapse" href="#Rec1"><i class="fa-solid fa-circle-chevron-down"></i> -->

                                            <hr class="hrline">
                                            <!-- <div id="Rec1" class="p-4 collapse"> -->

                                            <?php echo $result->area ?>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                                <?php }
                                } ?>


                            </div>
                        </div>
                    </div>

                    <!-- <div>
                        <div class="">
                            <h2 class="Hbg mb-4 paddingR">Candidates are selected based on the following criteria</h2>
                        </div>
                        <div class="row gy-3 gx-4 mb-4">
                            <div class="team-left">
                                <ul>
                                    <li class="post1"><i class="fa solid fa-book-open" aria-hidden="true"></i><span
                                            class="">Qualifying examination eligibility</span>
                                    </li>

                                    <li class="post1"><i class="fa solid fa-book-open" aria-hidden="true"></i><span
                                            class="">Strong academic records.</span>
                                    </li>

                                    <li class="post1"><i class="fa solid fa-book-open" aria-hidden="true"></i><span
                                            class="">Merit in the synopsis, the candidate intends to study</span>
                                    </li>
                                    <li class="post1"><i class="fa solid fa-book-open" aria-hidden="true"></i><span
                                            class="">Vacancy availability with the research guides</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <span>If selected, the candidate is to be in a position to complete full-time course work for a
                            duration as
                            stipulated by the university/UGC. The stages of progress of the study are to be reviewed by
                            the
                            doctoral committee every six months.</span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>




    <!-- Footer Start -->
    <?php include('partials/footer.php') ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>