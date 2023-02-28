<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('admin/includes/config.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Events | Department of Ship Technology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="admin/images/favicon.png" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
    <link href="./lib/icons/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/gallery.css" rel="stylesheet">
    <link href="css/event.css" rel="stylesheet" />
    <style>
        ul {
            list-style: none;
            position: relative;
        }
    </style>

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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Events</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Events</a></li>
                    <!-- <li class="breadcrumb-item text-white active" aria-current="page">SHIP TECHNOLOGY LIBRARY CUSAT
                    </li> -->
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <section class="container my-4">
        <div class="row">
            <?php
            $id = $_GET['id'];
            // print_r($id);
            // exit();
            $sql = "SELECT id,title,content,date,image from events where id= $id ";
            $query = $dbh->prepare($sql);
            $query->execute();
            $userArr = $query->fetchAll(PDO::FETCH_OBJ);
            if ($query->rowCount() > 0) {
            ?>
                <div class="col-md-7">
                    <h1 class="mb-4"><?php echo htmlentities($userArr[0]->title); ?></h1>
                    <img src="admin/pages/uploads/<?php echo htmlentities($userArr[0]->image); ?>" alt="Article Image" style="border-radius: 25px;" class="img-fluid mb-4">
                    <p class="mb-4">
                        <span style="color:#ff3e41 ; font-weight: bold; "> <i class="fa-regular fa-clock"></i></span> <span class=" font-bold">
                            <?php $date = $userArr[0]->date;
                            $date = date_create($date);
                            echo date_format($date, "d/m/Y"); ?></span>
                    </p>
                    <p class="mb-4 justify-para">
                        <?php echo ($userArr[0]->content); ?>
                    </p>
                </div>
            <?php }
            ?>
            <div class="container my-5 col-xl-5">
                <div class="text-center mb-3">
                    <h1 class="mb-0"> Other Events</h1>
                </div>
                <div class="container2">
                    <ul class="p-2">

                        <?php
                        $sql = "SELECT * from events ORDER BY `events`.`date` DESC";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = 1;
                        if ($query->rowCount() > 0) {
                            foreach ($results as $result) {
                        ?>

                                <li>
                                    <div class="d-flex border p-1 my-4 align-items-center max-w-665" style="border-radius: 20px; max-width: 655px; margin: 0 auto">
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
                                                <!-- <p class="mt-1">
                                                <span style="color: #ff3e41; font-weight: bold">
                                                    <i class="fa-regular fa-clock"></i></span>
                                                <span class="font-bold"> 9.00 AM - 5.00 PM</span>
                                            </p> -->
                                                <a href="events-view.php?id=<?php echo   $result->id ?>">
                                                    <h6 class="my-2 my-lg-2">
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
        </div>
    </section>
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