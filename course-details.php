<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('admin/includes/config.php');

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Course Details | Department of Shiptechnology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

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
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include('partials/header.php') ?>
    <!-- Navbar End -->

    <?php
    $id = $_GET['id'];
    $sql = "SELECT *  from course where id= $id ";
    $query = $dbh->prepare($sql);
    $query->execute();
    $userArr = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
    ?>
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">
                    <?php echo htmlentities($userArr[0]->name); ?><br>
                    <?php echo htmlentities($userArr[0]->specialization); ?>
                </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="course.php">Course</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">
                            <?php echo htmlentities($userArr[0]->name); ?> ,
                            <?php echo htmlentities($userArr[0]->specialization); ?></li>
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
                            <img class="position-absolute img-fluid w-100 h-100" src="admin/pages/uploads/<?php echo htmlentities($userArr[0]->image); ?>" style="object-fit: cover; border-radius: 20px;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 about-text wow fadeInUp ship-contact-data" data-wow-delay="0.3s">
                        <h6 class="text-secondary text-uppercase mb-3">Department of Shiptechnology </h6>
                        <h1 class="mb-3"><?php echo htmlentities($userArr[0]->name); ?><br>
                            <?php echo htmlentities($userArr[0]->specialization); ?></h1>
                        <!-- <h6 class="text-secondary text-uppercase mb-5">From 2020 admission onwards</h6> -->

                        <h4 class="mb-2"> Number of Seats</h4>
                        <p class="mb-5" style="margin-left: 15px;"><i class="fa fa-ship me-3" aria-hidden="true" style="color:#007a9b"></i><?php echo htmlentities($userArr[0]->seat); ?></p>


                        <h4 class="mb-2"> Eligibility Criteria for Admission</h4>
                        <p class="mb-0" style=" margin-left: 15px;">
                            <!-- <i class="fa fa-ship me-3" aria-hidden="true" style="color:#007a9b"></i> -->
                            <?php echo ($userArr[0]->eligibility); ?>
                        </p>


                        <h4 class="mb-2"> Syllabus</h4>
                        <ul class="mission-dot " style=" margin-left: 15px;">

                            <!-- Syllebus 1 start  -->
                            <?php $syllabus1 = $userArr[0]->sllabusLink;
                            if (!empty($syllabus1)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus1 ?>" target="_blank"><?php echo $userArr[0]->sllabus ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 1 end  -->

                            <!-- Syllebus 2 start  -->
                            <?php $syllabus2 = $userArr[0]->link2;
                            if (!empty($syllabus2)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus2 ?>" target="_blank"><?php echo $userArr[0]->syllabus2 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 2 end  -->

                            <!-- Syllebus 3 start  -->
                            <?php $syllabus3 = $userArr[0]->link3;
                            if (!empty($syllabus3)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus3 ?>" target="_blank"><?php echo $userArr[0]->syllabus3 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 3 end  -->



                            <!-- Syllebus 4 start  -->
                            <?php $syllabus4 = $userArr[0]->link4;
                            if (!empty($syllabus4)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus4 ?>" target="_blank"><?php echo $userArr[0]->syllabus4 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 4 end  -->

                            <!-- Syllebus 5 start  -->
                            <?php $syllabus5 = $userArr[0]->link5;
                            if (!empty($syllabus5)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus5 ?>" target="_blank"><?php echo $userArr[0]->syllabus5 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 5 end  -->

                            <!-- Syllebus 6 start  -->
                            <?php $syllabus6 = $userArr[0]->link6;
                            if (!empty($syllabus6)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus6 ?>" target="_blank"><?php echo $userArr[0]->syllabus6 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 6 end  -->

                            <!-- Syllebus 7 start  -->
                            <?php $syllabus7 = $userArr[0]->link7;
                            if (!empty($syllabus7)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus7 ?>" target="_blank"><?php echo $userArr[0]->syllabus7 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 7 end  -->

                            <!-- Syllebus 8 start  -->
                            <?php $syllabus8 = $userArr[0]->link8;
                            if (!empty($syllabus8)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus8 ?>" target="_blank"><?php echo $userArr[0]->syllabus8 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 8 end  -->

                            <!-- Syllebus 9 start  -->
                            <?php $syllabus9 = $userArr[0]->link9;
                            if (!empty($syllabus9)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus9 ?>" target="_blank"><?php echo $userArr[0]->syllabus9 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 9 end  -->

                            <!-- Syllebus 10 start  -->
                            <?php $syllabus10 = $userArr[0]->link10;
                            if (!empty($syllabus10)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus10 ?>" target="_blank"><?php echo $userArr[0]->syllabus10 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 10 end  -->

                            <!-- Syllebus 11 start  -->
                            <?php $syllabus11 = $userArr[0]->link11;
                            if (!empty($syllabus11)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus11 ?>" target="_blank"><?php echo $userArr[0]->syllabus11 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 11 end  -->

                            <!-- Syllebus 12 start  -->
                            <?php $syllabus12 = $userArr[0]->link12;
                            if (!empty($syllabus12)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus12 ?>" target="_blank"><?php echo $userArr[0]->syllabus12 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 12 end  -->

                            <!-- Syllebus 13 start  -->
                            <?php $syllabus13 = $userArr[0]->link13;
                            if (!empty($syllabus13)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus13 ?>" target="_blank"><?php echo $userArr[0]->syllabus13 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 13 end  -->

                            <!-- Syllebus 14 start  -->
                            <?php $syllabus14 = $userArr[0]->link14;
                            if (!empty($syllabus14)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus14 ?>" target="_blank"><?php echo $userArr[0]->syllabus14 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 14 end  -->

                            <!-- Syllebus 15 start  -->
                            <?php $syllabus15 = $userArr[0]->link15;
                            if (!empty($syllabus15)) {
                            ?>
                                <li class="mb-0">
                                    <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>
                                    <a class="white col-11" href="<?php echo $syllabus15 ?>" target="_blank"><?php echo $userArr[0]->syllabus15 ?></a>
                                </li>
                            <?php }
                            ?>
                            <!-- Syllebus 15 end  -->


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    ?>


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