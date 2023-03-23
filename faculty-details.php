<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('includes/config.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Faculty | Department of Shiptechnology</title>
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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="./lib/icons/css/all.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/facultyDetails.css" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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

    $sql = "SELECT * from faculty where id= $id ";
    $query = $dbh->prepare($sql);
    $query->execute();
    $userArr = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
    ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo $userArr[0]->name ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="faculty.php">Faculty</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"> <?php echo $userArr[0]->name ?>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5 px-lg-0" style="overflow:hidden;">
        <div class="container  about py-5 px-lg-0 element">
            <div class="row g-5 mx-lg-5">
                <div class="col-12 mx-lg-2 col-lg-3 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s"
                    style="min-height: 400px;">
                    <!-- card  -->
                    <div class="card overflow-hidden card1" style="width: 18rem; border-radius: 25px;">
                        <img src="uploads/<?php echo $userArr[0]->image ?>" class="card-img-top img-fluid"
                            style="border-radius: 15px;" alt="faculty image" />
                        <div class="card-body text-center">
                            <h4 class="card-title text-uppercase ">
                                <?php echo $userArr[0]->name ?>
                            </h4>
                            <p class="card-text thick"><?php echo $userArr[0]->designation ?></p>
                        </div>
                        <hr class="my-2">
                        <div class="card-body ">
                            <h6 class="card-title text-uppercase mb-3 ">
                                CONTACT INFO
                            </h6>
                            <div class="small-text ">
                                <div class="row mb-md-3 mb-2">
                                    <div class="col-2"> <i class="fa fa-envelope "></i></div>
                                    <div class="col-10 text-right"><a class="white col-11"
                                            href="mailto:<?php echo $userArr[0]->email ?>"><?php echo $userArr[0]->email ?></a>
                                    </div>
                                </div>
                                <div class="row mb-md-3 mb-2">
                                    <div class="col-2">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="col-10 text-right"><?php echo $userArr[0]->address ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-2"> <i class="fa fa-address-book"></i></div>
                                    <div class="col-10 text-right">
                                        <a class="white col-11" href="<?php echo $userArr[0]->iqacLink ?>">CUSAT IQAC
                                            Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card end -->
                <div class="col-lg-8 mx-lg-2 col-md-12 about-text wow fadeInUp justify-para" data-wow-delay="0.3s">
                    <h1 class="mb-5 title-color "><?php echo $userArr[0]->name ?> </h1>
                    <p class="mb-5 " style="margin-right: 3%;"><?php echo $userArr[0]->about ?>
                    </p>
                    <i class="fa-solid fa-book-open-readertext-primary fa-3x"></i>
                    <div>
                        <div class="col-lg-12 feature-text wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="mb-5">Field Of Special Interest</h2>
                            <div class="d-flex flex-wrap ">


                                <!-- SPECIAL INTEREST 1 START -->
                                <?php $interest1 = $userArr[0]->interest1;
                                    if (!empty($interest1)) {
                                    ?>
                                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <i class="fa-solid fa-paperclip text-primary fa-2x flex-shrink-0"></i>
                                    <div class="ms-4">
                                        <h5><?php echo $interest1 ?></h5>
                                    </div>
                                </div>
                                <?php }
                                    ?>
                                <!-- SPECIAL INTEREST 1 END -->

                                <!-- SPECIAL INTEREST2  START -->
                                <?php $interest2 = $userArr[0]->interest2;
                                    if (!empty($interest2)) {
                                    ?>
                                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <i class="fa-solid fa-paperclip text-primary fa-2x flex-shrink-0"></i>
                                    <div class="ms-4">
                                        <h5><?php echo $interest2 ?></h5>
                                    </div>
                                </div>
                                <?php }
                                    ?>
                                <!-- SPECIAL INTEREST 2 END -->

                                <!-- SPECIAL INTEREST 3 START -->
                                <?php $interest3 = $userArr[0]->interest3;
                                    if (!empty($interest3)) {
                                    ?>
                                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <i class="fa-solid fa-paperclip text-primary fa-2x flex-shrink-0"></i>
                                    <div class="ms-4">
                                        <h5><?php echo $interest3 ?></h5>
                                    </div>
                                </div>
                                <?php }
                                    ?>
                                <!-- SPECIAL INTEREST 3 END -->

                                <!-- SPECIAL INTEREST 4  START -->
                                <?php $interest4 = $userArr[0]->interest4;
                                    if (!empty($interest4)) {
                                    ?>
                                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <i class="fa-solid fa-paperclip text-primary fa-2x flex-shrink-0"></i>
                                    <div class="ms-4">
                                        <h5><?php echo $interest4 ?></h5>
                                    </div>
                                </div>
                                <?php }
                                    ?>
                                <!-- SPECIAL INTEREST 4 END -->

                                <!-- SPECIAL INTEREST 5  START -->
                                <?php $interest5 = $userArr[0]->interest5;
                                    if (!empty($interest5)) {
                                    ?>
                                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <i class="fa-solid fa-paperclip text-primary fa-2x flex-shrink-0"></i>
                                    <div class="ms-4">
                                        <h5><?php echo $interest5 ?></h5>
                                    </div>
                                </div>
                                <?php }
                                    ?>
                                <!-- SPECIAL INTEREST 5 END -->

                                <!-- SPECIAL INTEREST 6  START -->
                                <?php $interest6 = $userArr[0]->interest6;
                                    if (!empty($interest6)) {
                                    ?>
                                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <i class="fa-solid fa-paperclip text-primary fa-2x flex-shrink-0"></i>
                                    <div class="ms-4">
                                        <h5><?php echo $interest6 ?></h5>
                                    </div>
                                </div>
                                <?php }
                                    ?>
                                <!-- SPECIAL INTEREST 6 END -->

                                <!-- SPECIAL INTEREST 7  START -->
                                <?php $interest7 = $userArr[0]->interest7;
                                    if (!empty($interest7)) {
                                    ?>
                                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <i class="fa-solid fa-paperclip text-primary fa-2x flex-shrink-0"></i>
                                    <div class="ms-4">
                                        <h5><?php echo $interest7 ?></h5>
                                    </div>
                                </div>
                                <?php }
                                    ?>
                                <!-- SPECIAL INTEREST 7 END -->

                                <!-- SPECIAL INTEREST 8  START -->
                                <?php $interest8 = $userArr[0]->interest8;
                                    if (!empty($interest8)) {
                                    ?>
                                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <i class="fa-solid fa-paperclip text-primary fa-2x flex-shrink-0"></i>
                                    <div class="ms-4">
                                        <h5><?php echo $interest8 ?></h5>
                                    </div>
                                </div>
                                <?php }
                                    ?>
                                <!-- SPECIAL INTEREST 8 END -->

                                <!-- SPECIAL INTEREST 9  START -->
                                <?php $interest9 = $userArr[0]->interest9;
                                    if (!empty($interest9)) {
                                    ?>
                                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <i class="fa-solid fa-paperclip text-primary fa-2x flex-shrink-0"></i>
                                    <div class="ms-4">
                                        <h5><?php echo $interest9 ?></h5>
                                    </div>
                                </div>
                                <?php }
                                    ?>
                                <!-- SPECIAL INTEREST 9 END -->

                                <!-- SPECIAL INTEREST2  START -->
                                <?php $interest10 = $userArr[0]->interest10;
                                    if (!empty($interest10)) {
                                    ?>
                                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <i class="fa-solid fa-paperclip text-primary fa-2x flex-shrink-0"></i>
                                    <div class="ms-4">
                                        <h5><?php echo $interest10 ?></h5>
                                    </div>
                                </div>
                                <?php }
                                    ?>
                                <!-- SPECIAL INTEREST 10 END -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <div class="col-lg-12 feature-text wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mb-5">Experience</h2>
            <div class="d-flex flex-wrap ">

                <!-- EXPERIENCE 1  START -->
                <?php $experience1 = $userArr[0]->experience1;
                    if (!empty($experience1)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-briefcase text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $experience1 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->expDescription1 ?></p>
                    </div>
                </div>
                <?php }
                    ?>
                <!-- EXPERIENCE 1  END -->

                <!-- EXPERIENCE 2   START -->
                <?php $experience2 = $userArr[0]->experience2;
                    if (!empty($experience2)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-briefcase text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $experience2 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->expDescription2 ?></p>
                    </div>
                </div>
                <?php }
                    ?>
                <!-- EXPERIENCE 2  END -->

                <!-- EXPERIENCE 3  START -->
                <?php $experience3 = $userArr[0]->experience3;
                    if (!empty($experience3)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-briefcase text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $experience3 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->expDescription3 ?></p>
                    </div>
                </div>
                <?php }
                    ?>
                <!-- EXPERIENCE 3  END -->

                <!-- EXPERIENCE 4  START -->
                <?php $experience4 = $userArr[0]->experience4;
                    if (!empty($experience4)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-briefcase text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $experience4 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->expDescription4 ?></p>
                    </div>
                </div>
                <?php }
                    ?>
                <!-- EXPERIENCE 4  END -->

                <!-- EXPERIENCE 5  START -->
                <?php $experience5 = $userArr[0]->experience5;
                    if (!empty($experience5)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-briefcase text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $experience5 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->expDescription5 ?></p>
                    </div>
                </div>
                <?php }
                    ?>
                <!-- EXPERIENCE 5  END -->

                <!-- EXPERIENCE 6  START -->
                <?php $experience6 = $userArr[0]->experience6;
                    if (!empty($experience6)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-briefcase text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $experience6 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->expDescription6 ?></p>
                    </div>
                </div>
                <?php }
                    ?>
                <!-- EXPERIENCE 6  END -->

                <!-- EXPERIENCE 7  START -->
                <?php $experience7 = $userArr[0]->experience7;
                    if (!empty($experience7)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-briefcase text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $experience7 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->expDescription7 ?></p>
                    </div>
                </div>
                <?php }
                    ?>
                <!-- EXPERIENCE 7  END -->

                <!-- EXPERIENCE 8  START -->
                <?php $experience8 = $userArr[0]->experience8;
                    if (!empty($experience8)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-briefcase text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $experience8 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->expDescription8 ?></p>
                    </div>
                </div>
                <?php }
                    ?>
                <!-- EXPERIENCE 8  END -->

                <!-- EXPERIENCE 9  START -->
                <?php $experience9 = $userArr[0]->experience9;
                    if (!empty($experience9)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-briefcase text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $experience9 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->expDescription9 ?></p>
                    </div>
                </div>
                <?php }
                    ?>
                <!-- EXPERIENCE 9  END -->

                <!-- EXPERIENCE 10  START -->
                <?php $experience10 = $userArr[0]->experience10;
                    if (!empty($experience10)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-briefcase text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $experience10 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->expDescription10 ?></p>
                    </div>
                </div>
                <?php }
                    ?>
                <!-- EXPERIENCE 10  END -->


            </div>
        </div>
        <div class="col-lg-12 feature-text wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mb-5">Education</h2>
            <div class="d-flex flex-wrap justify-para">

                <!-- EXPERIENCE 1  START -->
                <?php $education1 = $userArr[0]->education1;
                    if (!empty($education1)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-graduation-cap text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $userArr[0]->education1 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->edDescription1 ?></p>
                    </div>
                </div>

                <?php }
                    ?>
                <!-- EXPERIENCE 1  END -->

                <!-- EXPERIENCE 2  START -->
                <?php $education2 = $userArr[0]->education2;
                    if (!empty($education2)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-graduation-cap text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $userArr[0]->education2 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->edDescription2 ?></p>
                    </div>
                </div>

                <?php }
                    ?>
                <!-- EXPERIENCE 2  END -->

                <!-- EXPERIENCE 3  START -->
                <?php $education3 = $userArr[0]->education3;
                    if (!empty($education3)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-graduation-cap text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $userArr[0]->education3 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->edDescription3 ?></p>
                    </div>
                </div>

                <?php }
                    ?>
                <!-- EXPERIENCE 3  END -->

                <!-- EXPERIENCE 4  START -->
                <?php $education4 = $userArr[0]->education4;
                    if (!empty($education4)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-graduation-cap text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $userArr[0]->education4 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->edDescription4 ?></p>
                    </div>
                </div>

                <?php }
                    ?>
                <!-- EXPERIENCE 4  END -->

                <!-- EXPERIENCE 5  START -->
                <?php $education5 = $userArr[0]->education5;
                    if (!empty($education5)) {
                    ?>

                <div class="d-flex col-md-5  mb-5 mx-3 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa-solid fa-graduation-cap text-primary fa-2x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5><?php echo $userArr[0]->education5 ?></h5>
                        <p class="mb-0"><?php echo $userArr[0]->edDescription5 ?></p>
                    </div>
                </div>

                <?php }
                    ?>
                <!-- EXPERIENCE 5  END -->

            </div>
        </div>

        <!-- PUBLICATIONS START -->
        <?php $publications = $userArr[0]->publications;
            if (!empty($publications)) {
            ?>
        <div class="container my-5 justify-para" style="margin-top: 80px;">
            <h2 class=" mt-5 mb-3 mb-lg-5 mx-auto justify-content-center flex">Publications
            </h2>
            <p class="mb-5"><?php echo $userArr[0]->publications ?>
            </p>
        </div>
        <?php }
            ?>

        <!-- PUBLICATIONS END  -->


        <!-- FUNDED PROJECTS START -->

        <?php $role1 = $userArr[0]->role1;
            $role2 = $userArr[0]->role2;
            $role3 = $userArr[0]->role3;
            $role4 = $userArr[0]->role4;
            $role5 = $userArr[0]->role5;
            $role6 = $userArr[0]->role6;
            $role7 = $userArr[0]->role7;
            $role8 = $userArr[0]->role8;
            $role9 = $userArr[0]->role9;
            $role10 = $userArr[0]->role10;
            if (!empty($role1) || !empty($role2) || !empty($role3) || !empty($role4) || !empty($role5) || !empty($role6) || !empty($role7) || !empty($role8) || !empty($role9) || !empty($role10)) {
            ?>
        <div class="container my-5 justify-para" style="margin-top: 80px;">
            <h2 class=" mt-5 mb-3 mb-lg-5 mx-auto justify-content-center flex">Funded Projects
            </h2>
            <table class="table table-bordered table-hover">
                <thead class="bg-primary text-white">
                    <tr class="text-center">
                        <th scope="col">Role</th>
                        <th scope="col">Project</th>
                        <th scope="col">Funding Agency</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- FUNDED PROJECT 1 START -->
                    <?php $role1 = $userArr[0]->role1;
                            if (!empty($role1)) {
                            ?>
                    <tr>
                    <tr>
                        <td><?php echo $userArr[0]->role1 ?></td>
                        <td><?php echo $userArr[0]->project1 ?></td>
                        <td><?php echo $userArr[0]->agency1 ?></td>
                    </tr>
                    <?php }
                            ?>
                    <!-- FUNDED PROJECT 1 END -->

                    <!-- FUNDED PROJECT 2 START -->
                    <?php $role2 = $userArr[0]->role2;
                            if (!empty($role2)) {
                            ?>
                    <tr>
                        <td><?php echo $userArr[0]->role2 ?></td>
                        <td><?php echo $userArr[0]->project2 ?></td>
                        <td><?php echo $userArr[0]->agency2 ?></td>
                    </tr>
                    <?php }
                            ?>
                    <!-- FUNDED PROJECT 2 END -->

                    <!-- FUNDED PROJECT 3 START -->
                    <?php $role3 = $userArr[0]->role3;
                            if (!empty($role3)) {
                            ?>
                    <tr>
                        <td><?php echo $userArr[0]->role3 ?></td>
                        <td><?php echo $userArr[0]->project3 ?></td>
                        <td><?php echo $userArr[0]->agency3 ?></td>
                    </tr>
                    <?php }
                            ?>
                    <!-- FUNDED PROJECT 3 END -->

                    <!-- FUNDED PROJECT 4 START -->
                    <?php $role4 = $userArr[0]->role4;
                            if (!empty($role4)) {
                            ?>
                    <tr>
                        <td><?php echo $userArr[0]->role4 ?></td>
                        <td><?php echo $userArr[0]->project4 ?></td>
                        <td><?php echo $userArr[0]->agency4 ?></td>
                    </tr>
                    <?php }
                            ?>
                    <!-- FUNDED PROJECT 4 END -->

                    <!-- FUNDED PROJECT 5 START -->
                    <?php $role5 = $userArr[0]->role5;
                            if (!empty($role5)) {
                            ?>
                    <tr>
                        <td><?php echo $userArr[0]->role5 ?></td>
                        <td><?php echo $userArr[0]->project5 ?></td>
                        <td><?php echo $userArr[0]->agency5 ?></td>
                    </tr>
                    <?php }
                            ?>
                    <!-- FUNDED PROJECT 5 END -->

                    <!-- FUNDED PROJECT 6 START -->
                    <?php $role6 = $userArr[0]->role6;
                            if (!empty($role6)) {
                            ?>
                    <tr>
                        <td><?php echo $userArr[0]->role6 ?></td>
                        <td><?php echo $userArr[0]->project6 ?></td>
                        <td><?php echo $userArr[0]->agency6 ?></td>
                    </tr>
                    <?php }
                            ?>
                    <!-- FUNDED PROJECT 6 END -->

                    <!-- FUNDED PROJECT 7 START -->
                    <?php $role7 = $userArr[0]->role7;
                            if (!empty($role7)) {
                            ?>
                    <tr>
                        <td><?php echo $userArr[0]->role7 ?></td>
                        <td><?php echo $userArr[0]->project7 ?></td>
                        <td><?php echo $userArr[0]->agency7 ?></td>
                    </tr>
                    <?php }
                            ?>
                    <!-- FUNDED PROJECT 7 END -->

                    <!-- FUNDED PROJECT 8 START -->
                    <?php $role8 = $userArr[0]->role8;
                            if (!empty($role8)) {
                            ?>
                    <tr>
                        <td><?php echo $userArr[0]->role8 ?></td>
                        <td><?php echo $userArr[0]->project8 ?></td>
                        <td><?php echo $userArr[0]->agency8 ?></td>
                    </tr>
                    <?php }
                            ?>
                    <!-- FUNDED PROJECT 8 END -->

                    <!-- FUNDED PROJECT 9 START -->
                    <?php $role9 = $userArr[0]->role9;
                            if (!empty($role9)) {
                            ?>
                    <tr>
                        <td><?php echo $userArr[0]->role9 ?></td>
                        <td><?php echo $userArr[0]->project9 ?></td>
                        <td><?php echo $userArr[0]->agency9 ?></td>
                    </tr>
                    <?php }
                            ?>
                    <!-- FUNDED PROJECT 9 END -->

                    <!-- FUNDED PROJECT 10 START -->
                    <?php $role10 = $userArr[0]->role10;
                            if (!empty($role10)) {
                            ?>
                    <tr>
                        <td><?php echo $userArr[0]->role10 ?></td>
                        <td><?php echo $userArr[0]->project10 ?></td>
                        <td><?php echo $userArr[0]->agency10 ?></td>
                    </tr>
                    <?php }
                            ?>
                    <!-- FUNDED PROJECT 10 END -->


                </tbody>
            </table>
            <?php $MoreFundedProjects = $userArr[0]->MoreFundedProjects;
                    if (!empty($MoreFundedProjects)) {
                    ?>
            <a class="white col-11" target="_blank" href="<?php echo $userArr[0]->MoreFundedProjects ?>">Read More</a>
            <?php }
                    ?>
        </div>
        <?php }
            ?>

        <!-- FUNDED PROJECTS END -->


        <!-- OTHER DETAILS START -->
        <?php $otherInfo = $userArr[0]->otherInfo;
            if (!empty($otherInfo)) {
            ?>
        <div class="container my-5" style="margin-top: 80px;">
            <h2 class=" mt-5 mb-3 mb-lg-5 mx-auto justify-content-center flex">Other Info
            </h2>
            <p class="mb-5"><?php echo $userArr[0]->otherInfo ?>
            </p>
        </div>
        <?php }
            ?>

        <!-- OTHER DETAILS END  -->
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