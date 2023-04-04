<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Department of Ship Technology | CUSAT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <link rel="stylesheet" href="testimonial/css/bootstrap.min.css">
    <link rel="stylesheet" href="testimonial/css/owl.carousel.min.css">
    <link rel="stylesheet" href="testimonial/fonts/icomoon/style.css">
    <link rel="stylesheet" href="testimonial/css/style.css">

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
    <link href="lib/icons/css/all.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/date.css" rel="stylesheet">

    <link href="css/event.css" rel="stylesheet" />
    <link href="css/index.css" rel="stylesheet">





    <style type="text/css">
    .hod-img {
        width: 450px;
    }

    @media (max-width: 576px) {
        .hod-img {
            width: 300px;
        }
    }


    .toggleLink {
        color: red;
        text-decoration: underline
    }

    .toggleLink:hover {
        cursor: pointer
    }

    .elaboration {
        display: none
    }
    </style>
</head>

<body style="box-flex-group: #d6d6d6;">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        </div>
    </div>
    <!-- Spinner End -->

    <!-- HEADER START  -->
    <?php include('partials/header.php') ?>
    <!-- HEADER END  -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1-new-.jpg" alt="">
            </div>

            <?php
            $sql = "SELECT * from banner WHERE status = '1'";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            $cnt = 1;
            if ($query->rowCount() > 0) {
                foreach ($results as $result) {
            ?>

            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="uploads/<?php echo   $result->image ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h2 class="text-white mb-3 animated slideInDown"><?php echo   $result->topcaption ?>
                                </h2>
                                <h1 class="display-1 text-white animated slideInDown mb-4">
                                    <?php echo   $result->mainCaption ?></h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2"><?php echo   $result->subCaption ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
            } ?>
        </div>
    </div>
    <!-- Carousel End -->



    <div class="container-xxl pb-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <a class="cat-item d-block bg-light text-center rounded p-3" target="_blank"
                        href="https://snas.in/">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/tile-icon-snas.png" alt="Icon">
                            </div>
                            <h6>SNAS</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <a class="cat-item d-block bg-light text-center rounded p-3" target="_blank"
                        href="https://descon.cusat.ac.in/">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/descon.png" alt="Icon">
                            </div>
                            <h6>DESCON</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <a class="cat-item d-block bg-light text-center rounded p-3" target="_blank"
                        href="Approvals-and-Affiliations.php">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/Approvals-icon.png" alt="Icon">
                            </div>
                            <h6>Approvals &amp; Affiliations </h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s"
                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="placement.php">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/placement-icon.png" alt="Icon">
                            </div>
                            <h6>Placement</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
    $sql = "SELECT * from announcement where status='1'";
    $query = $dbh->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;
    if ($query->rowCount() > 0) { ?>

    <!-- SCROLL NEWS START  -->
    <div class="container-xxl  wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center breaking-news bg-dark">
                        <div
                            class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news">
                            <span class="d-flex align-items-center">&nbsp;Announcements </span>
                        </div>
                        <marquee class="news-scroll " behavior="scroll" direction="left" onmouseover="this.stop();"
                            onmouseout="this.start();">&nbsp;&nbsp;<b class="text-white"></b>
                            &nbsp;&nbsp;
                            <?php
                                foreach ($results as $result) {
                                ?>


                            <a class="news-scroll text-white" href="<?php echo  $result->link ?>"
                                target="_blank"><?php echo   $result->announcements ?></a>

                            &nbsp;&nbsp;
                            <b class="text-white">|</b>
                            &nbsp;&nbsp;
                            <?php }
                                ?>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- SCROLL NEWS END  -->



    <!-- NEWS AND EVENTS START -->

    <div class="container-xxl  wow fadeInUp py-5" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <!-- event start -->
                <div class="container my-5 row col-xl-6">
                    <div class="text-center mb-3">
                        <!-- <h6 class="text-secondary text-uppercase">Upcoming</h6> -->
                        <a href="news-home.php">

                            <h1 class="eventHover" class="mb-0">Events</h1>
                        </a>
                    </div>

                    <div class=" container2">
                        <ul>

                            <?php
                            $sql = "SELECT * from events  WHERE status='1' ORDER BY `date` DESC LIMIT 3";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {
                            ?>

                            <li>
                                <div class="d-flex  border p-1 my-4 align-items-center max-w-665"
                                    style="border-radius: 20px; max-width: 655px; margin: 0 auto">
                                    <div class="circle bg-primary d-flex justify-content-center container">
                                        <div class="cell">

                                            <?php $date = $result->date;
                                                    $date = date_create($date);
                                                    ?>
                                            <h3 class="text-white"><?php echo date_format($date, "d"); ?></h3>
                                        </div>
                                        <div class="cell">
                                            <h5 class="text-white"><?php echo date_format($date, "M"); ?></h5>
                                        </div>
                                        <div class="cell">
                                            <h6 class="text-white"><?php echo date_format($date, "Y"); ?></h6>
                                        </div>
                                    </div>

                                    <div class="d-flex col-md-8 mb-0 mx-md-3">
                                        <div class="ms-4">

                                            <a href="events-view.php?id=<?php echo   $result->id ?>">
                                                <h6 class="my-1 my-lg-2 eventHover">
                                                    <?php $title =  substr($result->title, 0, 48);
                                                            echo $title ?>
                                                </h6>
                                            </a>

                                            <p>
                                                <span style="color: #ff3e41; font-weight: bold">
                                                    <!-- <i class="fa-solid fa-location-dot"></i> -->
                                                </span>
                                                <span class="font-bold">
                                                    <?php $subHeading = substr($result->content, 0, 18);
                                                            echo $subHeading ?>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php }
                            } ?>

                        </ul>
                    </div>

                </div>

                <!-- event end -->

                <!-- news start -->
                <div class="container my-5 row col-xl-6">
                    <div class="text-center mb-3">
                        <a href="news-home.php">
                            <h1 class="eventHover" class="mb-0">News</h1>
                        </a>
                    </div>

                    <div class="container3">
                        <ul>


                            <?php
                            $sql = "SELECT * from news WHERE status='1' ORDER BY `news`.`date` DESC LIMIT 3; ";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {
                            ?>
                            <li>
                                <div class="d-flex news border p-1 my-4 align-items-center"
                                    style="border-radius: 20px; max-width: 655px; height:120px;  margin: 0 auto">
                                    <img class="d-block" style="
                      width: 110px;
                      height: 110px;
                      object-fit: contain;
                      border-radius: 20px;" src="uploads/<?php echo $result->image ?>" alt="" />

                                    <div class="d-flex col-md-8 mb-0 mx-md-3">
                                        <div class="ms-4 overflow-hidden">
                                            <a href="news-view.php?id=<?php echo   $result->id ?>">
                                                <h6 class="eventHover">
                                                    <?php
                                                            $title =  substr($result->title, 0, 27);
                                                            $subHeading = substr($result->content, 0, 29);
                                                            echo  $title
                                                            ?> </h6>
                                            </a>

                                            <p class="mb-0">
                                                <?php echo  $subHeading ?>...
                                            </p>

                                            <p class="mb-0">
                                                <span style="
                            color: #ff3e41;
                            font-weight: bold;
                            font-size: smaller;
                          ">
                                                    <i class="fa-regular fa-calendar"></i></span>
                                                <span class="font-bold" style="font-size: smaller">
                                                    <?php $date = $result->date;
                                                            $date = date_create($date);
                                                            echo date_format($date, "d/m/Y"); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php }
                            } ?>


                        </ul>
                    </div>
                </div>

                <!-- news end -->
            </div>
        </div>
    </div>


    <!-- NEWS AND EVENTS END -->




    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100 fac-img-curv" src="img/cusat.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp ship-contact-data" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">Ship Technology CUSAT</h6>
                    <h1 class="mb-5">Vision</h1>
                    <p class="mb-5">To evolve into a globally recognized department in the frontier areas of Naval
                        Architecture and Ship Building.</p>
                    <h1 class="mb-5">Mission</h1>
                    <p class="mb-5">
                    <ul class="mission-dot justify-para">
                        <li><i class="fa fa-ship me-3" aria-hidden="true"></i>
                            <span>We are committed to achieve academic
                                excellence in the field of Naval Architecture and ShipBuilding through innovative
                                teaching and learning processes</span>
                        </li>
                        <li><i class="fa fa-ship me-3" aria-hidden="true"></i>To prepare the students to be
                            professionally competent to face the
                            challenges in academics, the industry and research.</li>
                        <li><i class="fa fa-ship me-3" aria-hidden="true"></i>Promote inter-disciplinary research
                            among
                            the faculty and the students to
                            create state of art research facilities.
                        </li>
                        <li><i class="fa fa-ship me-3" aria-hidden="true"></i>To promote quality and ethics among
                            the
                            students</li>
                        <li><i class="fa fa-ship me-3" aria-hidden="true"></i>Motivate the students to acquire
                            entrepreneurial skills to become global
                            leaders.</li>
                    </ul>
                    </p>
                    <!-- <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                            <h5>Global Coverage</h5>
                            <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo.
                            </p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                            <h5>On Time Delivery</h5>
                            <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo.
                            </p>
                        </div>
                    </div> -->
                    <!-- <a href="" class="btn btn-primary py-3 px-5">Explore More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- ABOUT 2 -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">ABOUT US</h6>
                    <h1 class="mb-5">Surging ahead since 1975</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">

                        <p class="mb-0 justify-para">This Department is one of the pioneers in the field of Naval
                            Architecture
                            education in this country and was established in 1975 with an aim to create a new and
                            dynamic generation of Naval Architects to meet the requirements of the Indian
                            Shipbuilding Industry, Ship Classification Societies, R&D organizations, Indian Navy,
                            and related organisations. This Department maintains active collaboration and
                            interaction with IITs, foreign Universities, shipyards and other industries. These
                            organizations have been generous in extending their facilities and expertise to impart
                            training to our students. The fruitful collaboration of this Department with Rostock
                            University, Germany dates back to 1978 and remains as an important milestone in the
                            development of this Department. The curriculum was drawn up and updated in consultation
                            with experts from various academic institutions and industries. This has brought the
                            course curriculum in conformity with international standards. The quality of education
                            imparted and the resulting professional competence of the graduates enabled the
                            Department to achieve a unique record of 100 percent placement of its graduates in India
                            and abroad.</p>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100 fac-img-curv" src="img/shiptech.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT End -->

    <!-- HOD MESSAGE 2 Start -->
    <?php
    $sql = "SELECT * from hod where status='1' ";
    $query = $dbh->prepare($sql);
    $query->execute();
    $userArr = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
    ?>
    <div class="container-xxl py-5">
        <div class="container">

            <section class="container speaker-section spad">
                <div class="sec-title text-left">
                    <div class="row-cols-1 mb-5 speaker-disply justify-para">
                        <span class="left m-5">


                            <div style="float: left; ">
                                <img class="speaker-image-border hod-img"
                                    src="https://infinio.co.in/test/uploads/hodmessage_img.jpg" style=" margin-right: 15px; margin-bottom: 15px; border: #000000 solid 2px;
    box-shadow: #ff0000 3px 3px;
    padding: 20px;" />
                            </div>
                        </span>

                        <h6 class="text-secondary text-uppercase mb-3">HOD's&nbsp;Message&nbsp;&nbsp;&nbsp; </h6>
                        <h1 class="mb-5">Ship Technology CUSAT</h1>
                        <p class="justify-para">
                            <?php echo ($userArr[0]->message); ?>
                        </p>
                        <span><b><?php echo ($userArr[0]->name); ?></b>
                            <br>
                            <?php echo ($userArr[0]->designation); ?>
                        </span>
                    </div>





                </div>
            </section>
        </div>

    </div>
    <?php }
    ?>

    <!--end HOD MESSAGE 2 -->




    <!-- Course  Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class=" text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Department of Shiptechnology</h6>
                <h1 class="mb-5">Courses Offered</h1>
            </div>
            <div class="row g-4">

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4 fac-img-curv">
                        <div class="overflow-hidden mb-4">
                            <img class="fac-img-curv img-fluid" src="img/phd_image.jpg" alt="">
                        </div>
                        <h4 class="mb-3">PhD.</h4>
                        <p>Research is central to the progress of any academic department</p>
                        <a class="btn-slide mt-2" href="phd.php"><i class="fa fa-arrow-right"></i><span>Read
                                More</span></a>
                    </div>
                </div>


                <?php
                $sql = "SELECT * from course WHERE status='1'";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $result) {
                ?>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4 fac-img-curv">
                        <div class="overflow-hidden mb-4">
                            <img class="fac-img-curv img-fluid" src="uploads/<?php echo $result->image ?>" alt="">
                        </div>
                        <h4 class="mb-3"><?php echo $result->name ?></h4>
                        <p><?php echo $result->specialization ?></p>
                        <a class="btn-slide mt-2" href="course-details.php?id=<?php echo   $result->id ?>"><i
                                class="fa fa-arrow-right"></i><span>Read
                                More</span></a>
                    </div>
                </div>

                <?php }
                } ?>

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- NEW TESTIMONIAL START  -->
    <div class="container-xxl py-5 d-none d-md-block ">
        <div class="testimonial-section">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 mb-5 section-title" data-aos="fade-up" data-aos-delay="0">

                        <h2 class="mb-4 font-weight-bold heading">Testimonials</h2>
                        <p class="mb-4 justify-para">Experiences and feedback provided by our esteemed alumni and
                            students
                            who have been
                            a vital part of our department.</p>
                        <p><a class="btn btn-primary "><span class="fa fa-arrow-right" style="width: 100px;"></span></a>
                        </p>
                    </div>
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial--wrap">
                            <div class="owl-single owl-carousel no-dots no-nav">



                                <?php
                                $sql = "SELECT * from testimonials  WHERE status='1'";
                                $query = $dbh->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                $cnt = 1;
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $result) {
                                ?>

                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="photo mr-3">
                                            <img src="uploads/<?php echo $result->image ?>" alt="Image"
                                                class="img-fluid">
                                        </div>
                                        <div class="author">
                                            <cite class="d-block mb-0"
                                                style="color: #150754!important;"><?php echo $result->name ?></cite>
                                            <span><?php echo $result->designation ?>.</span><br>
                                            <span><?php echo $result->course ?>,<br><?php echo $result->batch ?></span>
                                        </div>

                                    </div>
                                    <blockquote class="justify-para">
                                        <p><?php echo $result->message ?></p>
                                    </blockquote>
                                </div>
                                <?php }
                                } ?>


                            </div>
                            <div class="custom-nav-wrap">
                                <a href="#" class="custom-owl-prev"><span class="icon-keyboard_backspace"></span></a>
                                <a href="#" class="custom-owl-next"><span class="icon-keyboard_backspace"></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end testimonial md -->
    <!-- start below md testimonial -->
    <!--  -->

    <div class="container-xxl py-5  d-block d-md-none">
        <div class="testimonial-section">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 mb-5 section-title" data-aos="fade-up" data-aos-delay="0">

                        <h2 class="mb-4 font-weight-bold heading">Testimonials</h2>
                        <p class="mb-4 justify-para">Experiences and feedback provided by our esteemed alumni and
                            students
                            who have been
                            a vital part of our department.</p>
                        <p><a class="btn btn-primary "><span class="fa fa-arrow-right" style="width: 100px;"></span></a>
                        </p>
                    </div>
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial--wrap">
                            <div class="owl-single owl-carousel no-dots no-nav">



                                <?php
                                $sql = "SELECT * from testimonials  WHERE status='1'";
                                $query = $dbh->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                $cnt = 1;
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $result) {
                                ?>

                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="photo mr-3">
                                            <img src="uploads/<?php echo $result->image ?>" alt="Image"
                                                class="img-fluid">
                                        </div>
                                        <div class="author">
                                            <cite class="d-block mb-0"
                                                style="color: #150754!important;"><?php echo $result->name ?></cite>
                                            <span><?php echo $result->designation ?>.</span><br>
                                            <span><?php echo $result->course ?>,<br><?php echo $result->batch ?></span>
                                        </div>

                                    </div>


                                    <blockquote class="justify-para">
                                        <?php
                                                $message = $result->message; // get the message
                                                $first_paragraph = substr($message, 0, 100); // extract first 100 characters
                                                $remaining_text = substr($message, 100); // get the remaining text
                                                ?>
                                        <p><?php echo $first_paragraph ?></p>
                                        <!-- display first 100 characters in first paragraph -->
                                        <p id="remaining-text" class="d-none"><?php echo $remaining_text ?></p>
                                        <!-- initially hide remaining text in second paragraph -->
                                        <?php if (strlen($message) > 100) : ?>
                                        <!-- if message length is greater than 100, display "Read More" button -->
                                        <button id="read-more-btn" class="btn btn-primary">Read More</button>
                                        <?php endif; ?>
                                    </blockquote>












                                </div>
                                <?php }
                                } ?>


                            </div>
                            <div class="custom-nav-wrap">
                                <a href="#" class="custom-owl-prev"><span class="icon-keyboard_backspace"></span></a>
                                <a href="#" class="custom-owl-next"><span class="icon-keyboard_backspace"></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end below md testimonial -->


    <!-- Footer Start -->
    <?php include('partials/footer.php') ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>




    <!-- JavaScript Libraries -->
    <script src="testimonial/js/jquery-3.5.1.min.js"></script>
    <script src="testimonial/js/owl.carousel.min.js"></script>
    <script src="testimonial/js/aos.js"></script>
    <script src="testimonial/js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/Scrolling.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
    const readMoreBtn = document.getElementById("read-more-btn");
    const remainingText = document.getElementById("remaining-text");

    readMoreBtn.addEventListener("click", () => {
        console.log("Read More button clicked")
        readMoreBtn.classList.add("d-none"); // hide "Read More" button
        remainingText.classList.remove("d-none"); // show remaining text
        remainingText.classList.add("d-block"); // add "d-block" class to remaining text
    });
    </script>
</body>

</html>