<!DOCTYPE html>
<html lang="en">
<style>
.main {
    max-width: 1200px;
    margin: 0 auto;
}

.cards {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    margin: 0;
    padding: 0;
}

.cards_item {
    display: flex;
    padding: 1rem;
}

.card_image {
    position: relative;
    width: 100%;
}

.card_image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card_price {
    position: absolute;
    bottom: 8px;
    right: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 45px;
    height: 45px;
    border-radius: 0.25rem;
    background-color: #1c95ff;
    font-size: 18px;
    font-weight: 700;
}

.card_price span {
    font-size: 12px;
    margin-top: -2px;
}

.note {
    position: absolute;
    top: 8px;
    left: 8px;
    padding: 4px 8px;
    border-radius: 0.25rem;
    background-color: #1c95ff;
    font-size: 14px;
    font-weight: 700;
}

@media (min-width: 40rem) {
    .cards_item {
        width: 50%;
    }
}

@media (min-width: 56rem) {
    .cards_item {
        width: 33.3333%;
    }
}

.card {
    background-color: white;
    border-radius: 0.25rem;
    box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.card_content {
    position: relative;
    padding: 16px 12px 32px 24px;
    margin: 16px 8px 8px 0;
    max-height: 290px;
    overflow-y: scroll;
}

.card_content::-webkit-scrollbar {
    width: 8px;
}

.card_content::-webkit-scrollbar-track {
    box-shadow: 0;
    border-radius: 0;
}

.card_content::-webkit-scrollbar-thumb {
    background: #1c95ff;
    border-radius: 15px;
}

.card_title {
    position: relative;
    margin: 0 0 24px;
    padding-bottom: 10px;
    text-align: center;
    font-size: 20px;
    font-weight: 700;
}

.card_title::after {
    position: absolute;
    display: block;
    width: 50px;
    height: 2px;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    background-color: #1c95ff;
    content: "";
}

hr {
    margin: 24px auto;
    width: 50px;
    border-top: 2px solid #1c95ff;
}

.card_text p {
    margin: 0 0 24px;
    font-size: 14px;
    line-height: 1.5;
}

.card_text p:last-child {
    margin: 0;
}
</style>

<head>
    <meta charset="utf-8">
    <title>Research Facilities | Department of Ship Technology</title>
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

    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">RESEARCH FACILITIES</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">Research Facilities</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- computational lab start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/Computational-Lab-(CHASE).png"
                            style="object-fit: cover; border-radius: 20px;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp ship-contact-data" data-wow-delay="0.3s">
                    <h1 class="mb-3">Computational Lab (CHASE)</h1>
                    <p class="mb-2 justify-para">
                        The <b>Computational Hydrodynamics and Structural Engineering (CHASE)</b> Lab was setupin the
                        academic
                        year 2016 –17 as part of the CUSAT 2020 scheme for Improving infrastructural facilties for
                        research-intensive departmentsunder the State Plan Grant.
                    </p>
                    <h5 class=" mb-1 mb-lg-3 mx-auto justify-content-center flex">The lab is equipped with 10
                        Workstations
                        and the following Software suite:
                    </h5>
                    <table class="table table-bordered table-hover">
                        <thead class="bg-primary text-white">
                            <tr class="text-center">
                                <th scope="col">Software Packages</th>
                                <th scope="col">Utility</th>
                                <th scope="col">Licenses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">ABAQUS</th>
                                <td>Finite Element Analysis</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <th scope="row">CATIA </th>
                                <td>CAD / CAM / CAE</td>
                                <td>30</td>

                            </tr>
                            <tr>
                                <th scope="row">STAR-CCM+</th>
                                <td>Computational Fluid Dynamics</td>
                                <td>10</td>

                            </tr>
                            <tr>
                                <th scope="row">OrcaFlex</th>
                                <td>Dynamics analysis of offshore marine systems</td>
                                <td>1</td>

                            </tr>
                            <tr>
                                <th scope="row">MATLAB &
                                    SIMULINK*</th>
                                <td>General purpose programming with 10
                                    additional Toolboxes</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- computational lab end  -->
    <!-- instrumentation lab start  -->

    <div cl ass="container-xxl py-5">
        <div class="main">
            <ul class="cards justify-para justify-content-center">
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image">
                            <img src="img/ElectroChemical-Testing-Lab.png" />
                            <!-- <span class="card_price"><span>Year</span></span> -->
                        </div>
                        <h2 class="card_title mt-3">ElectroChemical Testing Lab</h2>
                        <div class="card_content">

                            <div class="card_text">
                                <p> The lab is equippped with CH Instruments Electro-chemical analyzer and CH Software.
                                </p>
                                <hr />

                            </div>
                        </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image">
                            <img src="img/Instrumentation-Lab.png" />
                            <!-- <span class="card_price"><span>Year</span></span> -->
                        </div>
                        <h2 class="card_title mt-3">Instrumentation Lab</h2>
                        <div class="card_content">

                            <div class="card_text">
                                <p>dSPACE MicroLabBox - Compact prototyping unit for the laboratory. The system can be
                                    used mechatronic research and development areas such as robotics, electric drives
                                    controls, renewable energy, vehicle engineering and aerospace. </p>
                                <hr />

                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>





    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 about-text wow fadeInUp ship-contact-data" data-wow-delay="0.3s">
                    <h1 class="mb-3">ElectroChemical Testing Lab</h1>
                    <p class="mb-5 justify-para"><span style="font-weight: bold;
                    ">The lab is equippped with CH Instruments Electro-chemical analyzer and CH Software.
                    </p>
                </div>
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/ElectroChemical-Testing-Lab.png"
                            style="object-fit: cover; border-radius: 20px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- instrumentation lab end  -->
    <!-- electro chemical testing lab start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/ElectroChemical-Testing-Lab.png"
                            style="object-fit: cover; border-radius: 20px;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp ship-contact-data" data-wow-delay="0.3s">
                    <h1 class="mb-3"> ElectroChemical Testing Lab</h1>
                    <p class="mb-2 justify-para">
                        The lab is equippped with CH Instruments Electro-chemical analyzer and CH Software.
                    </p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- electro chemical testing lab end -->
    <!-- modal making lab start  -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <h2 class="mx-auto justify-content-center flex">Model Making Lab
                </h2>
                <div class="container mb-sm-5 ">
                    <div class="row g-5 ">
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/Model-Making-Lab-1.png"
                                    style="object-fit: cover; border-radius: 20px;" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/Model-Making-Lab-2.png"
                                    style="object-fit: cover; border-radius: 20px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal makong lab end  -->

    <!--Strength of Materials Lab  -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <h2 class="mx-auto justify-content-center flex">Strength of Materials Lab
                </h2>

                <div class="container mb-sm-5 ">
                    <div class="row g-5 ">
                        <!-- <p>The material testing lab is equipped with the following Universal Testing Machine</p> -->
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100"
                                    src="img/Strength-of-Materials-Lab-1.png"
                                    style="object-fit: cover; border-radius: 20px;" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100"
                                    src="img/Strength-of-Materials-Lab-2.png"
                                    style="object-fit: cover; border-radius: 20px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Strength of Materials Lab -->
    <!--Fluids nechanical Lab  -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <h2 class="mx-auto justify-content-center flex">Fluid Mechanics Lab </h2>

                <div class="container mb-sm-5 ">
                    <div class="row g-5 ">
                        <!-- <p>The material testing lab is equipped with the following Universal Testing Machine</p> -->
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/Fluid-Mechanics-Lab-1.png"
                                    style="object-fit: cover; border-radius: 20px;" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/Fluid-Mechanics-Lab-2.png"
                                    style="object-fit: cover; border-radius: 20px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fluids MachanicalLab -->
    <div class="container">
        <h2 class="mt-5 mb-lg-5 mx-auto justify-content-center flex">7. Welding Lab
        </h2>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4 fac-img-curv">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid fac-img-curv" src="img/wl-1.jpg" alt="">
                        </div>
                        <h4 class="mb-3">TIG Welding</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4 fac-img-curv">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid fac-img-curv" src="img/wl-2.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Spot Welding</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4 fac-img-curv">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid fac-img-curv" src="img/wl-3.jpg" alt="">
                        </div>
                        <h4 class="mb-3">MIC Welding</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- About Start -->
    <!-- <div class="container-fluid pt-5 my-5 px-lg-0"> -->
    <!-- RESEARCH FACILITIES start-->
    <!-- <div class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s">
            <h1 class="mb-5">RESEARCH FACILITIES</h1>
        </div> -->
    <!-- <div class="container-xxl"> -->
    <!-- Computational Lab start -->
    <!-- <div class="container my-5">
                <div class="wow fadeInUp mb-5" data-wow-delay="0.1s">
                    <h2 class=" mb-3 mb-lg-5 mx-auto justify-content-center flex">1. Computational Lab (CHASE)</h2>
                    <p class="mb-5">The <span style="font-weight: bold;"> Computational Hydrodynamics and Structural
                            Engineering (CHASE)</span> Lab was setupin the academic year 2016 –17 as part of the CUSAT
                        2020
                        scheme for Improving infrastructural facilties for research-intensive departmentsunder the State
                        Plan Grant.</p>
                </div>
                <div class="img-container d-flex justify-content-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                    <img src="img/Computational-Lab-(CHASE).png" class=" img-fluid h-100"
                        style="object-fit: cover; border-radius: 20px;" alt="Your Image">
                </div>
            </div> -->
    <!-- Computational Lab table start -->
    <!-- <div class="container table-responsive py-5">
                <h5 class=" mb-1 mb-lg-3 mx-auto justify-content-center flex">The lab is equipped with 10 Workstations
                    and the following Software suite:
                </h5>
                <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white">
                        <tr class="text-center">
                            <th scope="col">Software Packages</th>
                            <th scope="col">Utility</th>
                            <th scope="col">Licenses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">ABAQUS</th>
                            <td>Finite Element Analysis</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <th scope="row">CATIA </th>
                            <td>CAD / CAM / CAE</td>
                            <td>30</td>

                        </tr>
                        <tr>
                            <th scope="row">STAR-CCM+</th>
                            <td>Computational Fluid Dynamics</td>
                            <td>10</td>

                        </tr>
                        <tr>
                            <th scope="row">OrcaFlex</th>
                            <td>Dynamics analysis of offshore marine systems</td>
                            <td>1</td>

                        </tr>
                        <tr>
                            <th scope="row">MATLAB &
                                SIMULINK*</th>
                            <td>General purpose programming with 10
                                additional Toolboxes</td>
                            <td>10</td>
                        </tr>
                    </tbody>
                </table>
            </div> -->
    <!-- table end -->
    <!-- Computational Lab end -->
    <!--  Instrumentation Lab start -->
    <!-- <div class="container my-5" , style="margin-top: 80px;">
                <h2 class=" mt-5 mb-3 mb-lg-5 mx-auto justify-content-center flex">2. Instrumentation Lab
                </h2>
                <p class="mb-5"><span style="font-weight: bold;
                    "> dSPACE MicroLabBox - </span>
                    Compact prototyping unit for the laboratory. The
                    system can be used mechatronic research and development areas such as
                    robotics, electric drives controls, renewable energy, vehicle engineering and
                    aerospace.
                </p>
                <div class="img-container d-flex justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                    <img src="img/Instrumentation-Lab.png" class=" img-fluid h-100"
                        style="object-fit: cover; border-radius: 20px;" alt="Your Image">
                </div>
            </div> -->
    <!--  Instrumentation Lab end -->
    <!-- ElectroChemical Testing Lab start -->
    <!-- <div class="container my-5" style="margin-top: 80px;">
                <h2 class=" mt-5 mb-3 mb-lg-5 mx-auto justify-content-center flex">3. ElectroChemical Testing Lab
                </h2>
                <p class="mb-5">
                    The lab is equippped with CH Instruments Electro-chemical analyzer and
                    CH Software.
                </p>
                <div class="img-container d-flex justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                    <img src="img/ElectroChemical-Testing-Lab.png" class=" img-fluid h-100"
                        style="object-fit: cover; border-radius: 20px;" alt="Your Image">
                </div>
            </div> -->
    <!-- ElectroChemical Testing Lab end -->
    <!--  Model Making Lab start -->
    <!-- <div class="container" style="margin-top: 80px;">
                <h2 class=" mt-5 mb-3 mb-lg-5 mx-auto justify-content-center flex">4. Model Making Lab
                </h2>
                <div class="container mb-3 mb-sm-5 ">
                    <div class="row g-5 ">
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/Model-Making-Lab-1.png" style="object-fit: cover; border-radius: 20px;" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/Model-Making-Lab-2.png" style="object-fit: cover; border-radius: 20px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    <!--  Model Making Lab end -->
    <!--  Strength of Materials Lab start -->
    <!-- <div class="container " style="margin-top: 80px;">
                <h2 class=" mt-5 mb-3 mb-lg-5 mx-auto justify-content-center flex">5. Strength of Materials Lab
                </h2>
                <p class="mb-4">
                    The material testing lab is equipped with the following
                    Universal Testing Machine
                </p>
                <div class="container mb-3 mb-sm-5 ">
                    <div class="row g-5 ">
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/Strength-of-Materials-Lab-2.png" style="object-fit: cover; border-radius: 20px;" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/Strength-of-Materials-Lab-1.png" style="object-fit: cover; border-radius: 20px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    <!--  Strength of Materials Lab end -->
    <!--  Fluid Mechanics Lab start -->
    <!-- <div class="container " style="margin-top: 80px;">
                <h2 class=" mt-5 mb-3 mb-lg-5 mx-auto justify-content-center flex">6. Fluid Mechanics Lab
                </h2>
                <div class="container mb-3 mb-sm-5 ">
                    <div class="row g-5 ">
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/Fluid-Mechanics-Lab-1.png"
                                    style="object-fit: cover; border-radius: 20px;" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/Fluid-Mechanics-Lab-2.png"
                                    style="object-fit: cover; border-radius: 20px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- </div>
    </div> -->
    <!--  Fluid Mechanics Lab end -->
    <!--  7. Welding Lab start -->

    <!-- <div class="d-flex align-items-center  mb-2 mx-3 wow fadeInUp" style="min-width: 250px;" data-wow-delay="0.5s">
        <i class="fa-solid fa-circle-check text-primary  flex-shrink-0"></i>
        <div class="ms-4">
            <h5>
                TIG Welding</h5>
        </div>
    </div>
    <div class="d-flex align-items-center  mb-2 mx-3 wow fadeInUp" style="min-width: 250px;" data-wow-delay="0.5s">
        <i class="fa-solid fa-circle-check text-primary  flex-shrink-0"></i>
        <div class="ms-4">
            <h5>
                Spot Welding</h5>
        </div>
    </div>
    <div class="d-flex align-items-center  mb-2 mx-3 wow fadeInUp" style="min-width: 250px;" data-wow-delay="0.5s">
        <i class="fa-solid fa-circle-check text-primary  flex-shrink-0"></i>
        <div class="ms-4">
            <h5>
                MIC Welding</h5>
        </div>
    </div>
    </div>
    </div>
    </div>




    </div> -->
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