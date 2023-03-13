<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else {

    if (isset($_POST['studentslabBTN'])) {
        $name = $_POST['name'];
        $facilities = $_POST['facilities'];
        $facility2 = $_POST['facility2'];
        $facility3 = $_POST['facility3'];
        $facility4 = $_POST['facility4'];
        $facility5 = $_POST['facility5'];
        $facility6 = $_POST['facility6'];
        $facility7 = $_POST['facility7'];
        $facility8 = $_POST['facility8'];
        $facility9 = $_POST['facility9'];
        $facility10 = $_POST['facility10'];
        $folder = '../uploads/';
        $file = $folder . basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES['file']['tmp_name'], $file);
        $photo = basename($_FILES["file"]["name"]);
        $status = '1';
        $sql = "INSERT INTO studentslab(name,content,facility2,facility3,facility4,facility5,facility6,facility7,facility8,facility9,facility10,status,image) VALUES ('" . $name . "','" . $facilities . "','" . $facility2 . "','" . $facility3 . "','" . $facility4 . "','" . $facility5 . "','" . $facility6 . "','" . $facility7 . "','" . $facility8 . "','" . $facility9 . "','" . $facility10 . "','" . $status . "','" . $photo . "')";
        $query = $dbh->prepare($sql);
        $result = $query->execute();
        if ($query->rowCount() > 0) {
            echo '<script>alert("Success")</script>';
            echo '<script>window.location = "studentslab.php";</script>';
        } else {
            echo '<script>alert("something went wrong please try again")</script>';
            echo '<script>window.location = "studentslab.php";</script>';
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New Students Lab | Shiptech Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include('partials/navbar.php') ?>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php include('partials/sidebar.php') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">New Students Lab</h4>
                                <form class="forms-sample" enctype="multipart/form-data" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Facilities 1</label>
                                        <input type="text" class="form-control" id="facilities" name="facilities">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Facilities 2</label>
                                        <input type="text" class="form-control" id="facility2" name="facility2">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Facilities 3</label>
                                        <input type="text" class="form-control" id="facility3" name="facility3">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Facilities 4</label>
                                        <input type="text" class="form-control" id="facility4" name="facility4">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Facilities 5</label>
                                        <input type="text" class="form-control" id="facility5" name="facility5">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Facilities 6</label>
                                        <input type="text" class="form-control" id="facility6" name="facility6">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Facilities 7</label>
                                        <input type="text" class="form-control" id="facility7" name="facility7">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Facilities 8</label>
                                        <input type="text" class="form-control" id="facility8" name="facility8">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Facilities 9</label>
                                        <input type="text" class="form-control" id="facility9" name="facility9">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Facilities 10</label>
                                        <input type="text" class="form-control" id="facility10" name="facility10">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Image(500x500px)</label>
                                        <input class="form-control" type="file" id="file" name="file"
                                            accept="image/gif, image/png, image/jpg, image/jpeg">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2" name="studentslabBTN"
                                        id="studentslabBTN">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. Premium <a
                        href="https://www.infinio.co.in/" target="_blank">Infinio Technology Solutions</a> All rights
                    reserved.</span>
                <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span> -->
            </div>
        </footer>

        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
<?php
}
?>