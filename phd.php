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
    <link rel="stylesheet/less" type="text/css" href="css/scss.less" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/courseDetails.css" rel="stylesheet">
</head>
<style>
.projcard-container {
    margin: 50px 0;
}

/* Actual Code: */
.projcard-container,
.projcard-container * {
    box-sizing: border-box;
}

.projcard-container {
    margin-left: auto;
    margin-right: auto;
    width: 1000px;
}

.projcard {
    position: relative;
    width: 100%;
    height: 300px;
    margin-bottom: 40px;
    border-radius: 10px;
    background-color: #fff;
    border: 2px solid #ddd;
    font-size: 18px;
    overflow: hidden;
    cursor: pointer;
    box-shadow: 0 4px 21px -12px rgba(0, 0, 0, .66);
    transition: box-shadow 0.2s ease, transform 0.2s ease;
}

.projcard:hover {
    box-shadow: 0 34px 32px -33px rgba(0, 0, 0, .18);
    transform: translate(0px, -3px);
}

.projcard::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-image: linear-gradient(-70deg, #424242, transparent 50%);
    opacity: 0.07;
}

.projcard:nth-child(2n)::before {
    background-image: linear-gradient(-250deg, #424242, transparent 50%);
}

.projcard-innerbox {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.projcard-img {
    position: absolute;
    height: 300px;
    width: 300px;
    top: 0;
    left: 0;
    transition: transform 0.2s ease;
}

.projcard:nth-child(2n) .projcard-img {
    left: initial;
    right: 0;
}

.projcard:hover .projcard-img {
    transform: scale(1.05) rotate(1deg);
}

.projcard:hover .projcard-bar {
    width: 70px;
}

.projcard-textbox {
    position: absolute;
    top: 7%;
    bottom: 7%;
    left: 430px;
    width: calc(100% - 470px);
    font-size: 17px;
}

.projcard:nth-child(2n) .projcard-textbox {
    left: initial;
    right: 430px;
}

.projcard-textbox::before,
.projcard-textbox::after {
    content: "";
    position: absolute;
    display: block;
    background: #ff0000bb;
    background: #fff;
    top: -20%;
    left: -55px;
    height: 140%;
    width: 60px;
    transform: rotate(8deg);
}

.projcard:nth-child(2n) .projcard-textbox::before {
    display: none;
}

.projcard-textbox::after {
    display: none;
    left: initial;
    right: -55px;
}

.projcard:nth-child(2n) .projcard-textbox::after {
    display: block;
}

.projcard-textbox * {
    position: relative;
}

.projcard-title {
    font-family: 'Voces', 'Open Sans', arial, sans-serif;
    font-size: 24px;
}

.projcard-subtitle {
    font-family: 'Voces', 'Open Sans', arial, sans-serif;
    color: #888;
}

.projcard-bar {
    left: -2px;
    width: 50px;
    height: 5px;
    margin: 10px 0;
    border-radius: 5px;
    background-color: #424242;
    transition: width 0.2s ease;
}

.projcard-blue .projcard-bar {
    background-color: #0088FF;
}

.projcard-blue::before {
    background-image: linear-gradient(-70deg, #0088FF, transparent 50%);
}

.projcard-blue:nth-child(2n)::before {
    background-image: linear-gradient(-250deg, #0088FF, transparent 50%);
}

.projcard-red .projcard-bar {
    background-color: #D62F1F;
}

.projcard-red::before {
    background-image: linear-gradient(-70deg, #D62F1F, transparent 50%);
}

.projcard-red:nth-child(2n)::before {
    background-image: linear-gradient(-250deg, #D62F1F, transparent 50%);
}

.projcard-green .projcard-bar {
    background-color: #40BD00;
}

.projcard-green::before {
    background-image: linear-gradient(-70deg, #40BD00, transparent 50%);
}

.projcard-green:nth-child(2n)::before {
    background-image: linear-gradient(-250deg, #40BD00, transparent 50%);
}

.projcard-yellow .projcard-bar {
    background-color: #F5AF41;
}

.projcard-yellow::before {
    background-image: linear-gradient(-70deg, #F5AF41, transparent 50%);
}

.projcard-yellow:nth-child(2n)::before {
    background-image: linear-gradient(-250deg, #F5AF41, transparent 50%);
}

.projcard-orange .projcard-bar {
    background-color: #FF5722;
}

.projcard-orange::before {
    background-image: linear-gradient(-70deg, #FF5722, transparent 50%);
}

.projcard-orange:nth-child(2n)::before {
    background-image: linear-gradient(-250deg, #FF5722, transparent 50%);
}

.projcard-brown .projcard-bar {
    background-color: #C49863;
}

.projcard-brown::before {
    background-image: linear-gradient(-70deg, #C49863, transparent 50%);
}

.projcard-brown:nth-child(2n)::before {
    background-image: linear-gradient(-250deg, #C49863, transparent 50%);
}

.projcard-grey .projcard-bar {
    background-color: #424242;
}

.projcard-grey::before {
    background-image: linear-gradient(-70deg, #424242, transparent 50%);
}

.projcard-grey:nth-child(2n)::before {
    background-image: linear-gradient(-250deg, #424242, transparent 50%);
}

.projcard-customcolor .projcard-bar {
    background-color: var(--projcard-color);
}

.projcard-customcolor::before {
    background-image: linear-gradient(-70deg, var(--projcard-color), transparent 50%);
}

.projcard-customcolor:nth-child(2n)::before {
    background-image: linear-gradient(-250deg, var(--projcard-color), transparent 50%);
}

.projcard-description {
    z-index: 10;
    font-size: 15px;
    color: #424242;
    height: 125px;
    overflow: hidden;
    text-overflow: ellipsis;
}

.projcard-tagbox {
    position: absolute;
    bottom: 3%;
    font-size: 14px;
    cursor: default;
    user-select: none;
    pointer-events: none;
}

.projcard-tag {
    display: inline-block;
    background: #E0E0E0;
    color: #777;
    border-radius: 3px 0 0 3px;
    line-height: 26px;
    padding: 0 10px 0 23px;
    position: relative;
    margin-right: 20px;
    cursor: default;
    user-select: none;
    transition: color 0.2s;
}

.projcard-tag::before {
    content: '';
    position: absolute;
    background: #fff;
    border-radius: 10px;
    box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
    height: 6px;
    left: 10px;
    width: 6px;
    top: 10px;
}

.projcard-tag::after {
    content: '';
    position: absolute;
    border-bottom: 13px solid transparent;
    border-left: 10px solid #E0E0E0;
    border-top: 13px solid transparent;
    right: -10px;
    top: 0;
}

#mobileView {
    display: none;
}

@media (max-width: 767px) {
    #mainView {
        display: none;
    }

    #mobileView {
        display: block;
    }
}
</style>

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
                        <img class="position-absolute img-fluid w-100 h-100" src="img/phd_image.jpg"
                            style="object-fit: cover; border-radius: 20px;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp ship-contact-data" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">Research</h6>
                    <h1 class="mb-3">Dept. of Ship Technology, CUSAT</h1>
                    <p class="mb-2 justify-para" style=" margin-left: 15px;">
                        Research is central to the progress of any academic department. It improves the teaching
                        effectiveness and helps to make a difference to business, industry and society as a whole
                        thereby transforming the way academics, business, industry and the public sector collaborate.
                        The department’s research mission is to utilize its core strengths to maximize impact and help
                        the maritime communities (research and industrial) and the society to address global challenges.
                        The Department provides a thriving research environment with collaborations with leading
                        shipyards, Classification Societies, R & D organizations, etc. Further, all faculty members are
                        consultants of DESCON (Consultancy wing of department) and carry out consultancy assignments for
                        several Public/ Private organizations.<br></p>
                    <h6 class="mb-2" style=" margin-left: 15px;"> Our research areas by and large fall under the
                        following categories:</h6>

                    <ul class="mission-dot " style=" margin-left: 15px;">
                        <li class="mb-0">
                            <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>Naval Architecture (Ship
                            Design, Ship Building, Computer Applications)
                        </li>
                        <li class="mb-0">
                            <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>Structures (Marine /
                            Civil)
                        </li>
                        <li class="mb-0">
                            <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>Ship hydrodynamics
                        </li>
                        <li class="mb-0">
                            <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>Ship stability and
                            hydrostatics
                        </li>
                        <li class="mb-0">
                            <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>Ship recycling
                        </li>
                        <li class="mb-0">
                            <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>Manoeuvring and motion
                            stability of marine vehicles
                        </li>
                        <li class="mb-0">
                            <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>Marine materials and
                            corrosion
                        </li>
                        <li class="mb-0">
                            <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>Offshore and subsea
                            structures
                        </li>
                        <li class="mb-0">
                            <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>Numerical and
                            experimental hydrodynamics
                        </li>
                        <li class="mb-0">
                            <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>Ship electrical systems
                        </li>
                        <li class="mb-0">
                            <i class="fa fa-ship " aria-hidden="true" style="color:#007a9b"></i>Offshore renewable
                            energy
                        </li>
                    </ul>



                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5" id="mobileView">
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
                                        <div class="team-content justify-para">
                                            <h3 class="team-title">
                                                <a><?php echo $result->name ?></a><small><?php echo $result->designation ?></small>
                                            </h3>
                                            <!-- <a class="mb-0 centerIcon" data-toggle="collapse" href="#Rec1"><i class="fa-solid fa-circle-chevron-down"></i> -->

                                            <hr class="hrline">
                                            <!-- <div id="Rec1" class="p-4 collapse"> -->

                                            <?php
                                                    $input_string = "$result->area ";

                                                    $output_string = str_replace("&nbsp;", " ", $input_string);

                                                    echo $output_string;


                                                    // echo $result->area 
                                                    ?>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                                <?php }
                                } ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="projcard-container" id="mainView">
        <h1 class="row justify-content-center mb-4">Research Guides</h1>
        <?php

        $sql = "SELECT * from researchguide  WHERE status='1'";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;
        if ($query->rowCount() > 0) {
            foreach ($results as $result) {
        ?>
        <div class="projcard projcard-blue">
            <div class="projcard-innerbox">
                <img class="projcard-img" src="uploads/<?php echo $result->image ?>" />
                <div class="projcard-textbox">
                    <a href="<?php echo $result->link ?>" target="_blank"
                        class="projcard-title"><?php echo $result->name ?></a>
                    <div class="projcard-subtitle"><?php echo $result->designation ?></div>
                    <div class="projcard-bar"></div>
                    <div class="projcard-description" style="height:100%;"> <?php
                                                                                    $input_string = "$result->area ";

                                                                                    $output_string = str_replace("&nbsp;", " ", $input_string);

                                                                                    echo $output_string;


                                                                                    // echo $result->area 
                                                                                    ?></div>

                </div>
            </div>
        </div>

        <?php }
        } ?>


        <!--
    <div class="projcard projcard-red">
      <div class="projcard-innerbox">
        <img class="projcard-img" src="https://picsum.photos/800/600?image=1080" />
        <div class="projcard-textbox">
          <div class="projcard-title">That's Another Card</div>
          <div class="projcard-subtitle">I don't really think that I need to explain anything here</div>
          <div class="projcard-bar"></div>
          <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
          <div class="projcard-tagbox">
            <span class="projcard-tag">PHP</span>
            <span class="projcard-tag">SQL</span>
            <span class="projcard-tag">Database</span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="projcard projcard-green">
      <div class="projcard-innerbox">
        <img class="projcard-img" src="https://picsum.photos/800/600?image=1039" />
        <div class="projcard-textbox">
          <div class="projcard-title">And a Third Card</div>
          <div class="projcard-subtitle">You know what this is by now</div>
          <div class="projcard-bar"></div>
          <div class="projcard-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
          <div class="projcard-tagbox">
            <span class="projcard-tag">Excel</span>
            <span class="projcard-tag">VBA</span>
          </div>
        </div>
      </div>
    </div>
    <div class="projcard projcard-green">
      <div class="projcard-innerbox">
        <img class="projcard-img" src="https://picsum.photos/800/600?image=1039" />
        <div class="projcard-textbox">
          <div class="projcard-title">And a Third Card</div>
          <div class="projcard-subtitle">You know what this is by now</div>
          <div class="projcard-bar"></div>
          <div class="projcard-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
          <div class="projcard-tagbox">
            <span class="projcard-tag">Excel</span>
            <span class="projcard-tag">VBA</span>
          </div>
        </div>
      </div>
    </div>
    <div class="projcard projcard-green">
      <div class="projcard-innerbox">
        <img class="projcard-img" src="https://picsum.photos/800/600?image=1039" />
        <div class="projcard-textbox">
          <div class="projcard-title">And a Third Card</div>
          <div class="projcard-subtitle">You know what this is by now</div>
          <div class="projcard-bar"></div>
          <div class="projcard-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
          <div class="projcard-tagbox">
            <span class="projcard-tag">Excel</span>
            <span class="projcard-tag">VBA</span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="projcard projcard-customcolor" style="--projcard-color: #F5AF41;">
      <div class="projcard-innerbox">
        <img class="projcard-img" src="https://picsum.photos/800/600?image=943" />
        <div class="projcard-textbox">
          <div class="projcard-title">Last Card</div>
          <div class="projcard-subtitle">That's the last one. Have a nice day!</div>
          <div class="projcard-bar"></div>
          <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
          <div class="projcard-tagbox">
            <span class="projcard-tag">iOS</span>
            <span class="projcard-tag">Android</span>
            <span class="projcard-tag">Cordova</span>
          </div>
        </div>
      </div>
    </div>-->

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
    <script>
    document.querySelectorAll(".projcard-description").forEach(function(box) {
        $clamp(box, {
            clamp: 6
        });
    });
    </script>
</body>

</html>