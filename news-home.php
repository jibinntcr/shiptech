<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>News | Department of Ship Technology</title>
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
    <link href="css/event.css" rel="stylesheet">
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">News</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">News</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- news Start -->

    <div class="container-fluid wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        <div class="pt-5">
            <div class="row">
                <div class="text-center mb-3">
                    <h1 class="mb-0">News</h1>
                </div>
                <!-- news start -->
                <div class="container">
                    <div>
                        <ul class="m-2 col-12 d-flex flex-wrap justify-content-center ">

                            <?php
                            $sql = "SELECT * from news  WHERE status='1' ORDER BY `date` DESC ";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {
                            ?>
                            <li class="mx-2">
                                <div class="d-flex border p-1 my-0 align-items-center"
                                    style="border-radius: 20px; max-width: 655px; margin: 0 auto;">
                                    <img class="d-block "
                                        style="width : 120.34px; height: 120.34px; object-fit: contain; border-radius: 20px;"
                                        src="uploads/<?php echo $result->image ?>" alt="">
                                    <div class="d-flex col-md-8 mb-0 mx-md-3  ">
                                        <div class="ms-4 overflow-hidden">
                                            <a
                                                href="news-view.php?id=<?php echo   $result->id ?>&slug=<?php echo $result->slug ?>">
                                                <h6 class=" my-2 my-lg-2"> <?php
                                                                                    $title =  substr($result->title, 0, 27);
                                                                                    $subHeading = substr($result->content, 0, 29);
                                                                                    echo  $title
                                                                                    ?>

                                                </h6>
                                            </a>
                                            <p class="p-sm-2">
                                                <?php echo  $subHeading ?>...
                                            </p>
                                            <p class="mt-1">
                                                <span style="color:#ff3e41 ; font-weight: bold; font-size: smaller;"> <i
                                                        class="fa-regular fa-calendar"></i></span> <span
                                                    class=" font-bold" style="font-size: smaller;">
                                                    <?php $date = $result->date;
                                                            $date = date_create($date);
                                                            echo date_format($date, "d/m/Y"); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                                }
                            } ?>


                        </ul>
                    </div>
                </div> <!-- news end -->
            </div>
        </div>
    </div>

    <!-- news End -->
    <!-- EVENTS START  -->



    <!-- EVENTS END  -->


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