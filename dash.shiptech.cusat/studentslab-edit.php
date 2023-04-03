<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else {
    if (isset($_POST['studentslabEditBTN'])) {
        if (($_FILES["file"]["error"]) == 4) {
            $photo = $_POST['imageName'];
            $id = $_POST['id'];
            $name = $_POST['EditName'];
            $facility1 = $_POST['EditFacility1'];
            $facility2 = $_POST['EditFacility2'];
            $facility3 = $_POST['EditFacility3'];
            $facility4 = $_POST['EditFacility4'];
            $facility5 = $_POST['EditFacility5'];
            $facility6 = $_POST['EditFacility6'];
            $facility7 = $_POST['EditFacility7'];
            $facility8 = $_POST['EditFacility8'];
            $facility9 = $_POST['EditFacility9'];
            $facility10 = $_POST['EditFacility10'];

            $sql = "UPDATE  studentslab SET name=' $name',content='$facility1',facility2='$facility2',facility3='$facility3',facility4='$facility4',facility5='$facility5',facility6='$facility6',facility7='$facility7',facility8='$facility8',facility9='$facility9',facility10='$facility10',image='$photo' where id='$id'";
            $query = $dbh->prepare($sql);
            $result = $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script>alert("Success")</script>';
                echo '<script>window.location = "studentslab.php";</script>';
            } else {
                echo '<script>alert("something went wrong please try again")</script>';
                echo '<script>window.location = "studentslab.php";</script>';
            }
        } else if (($_FILES["file"]["error"]) == 0) {
            $id = $_POST['id'];
            $name = $_POST['EditName'];
            $facility1 = $_POST['EditFacility1'];
            $facility2 = $_POST['EditFacility2'];
            $facility3 = $_POST['EditFacility3'];
            $facility4 = $_POST['EditFacility4'];
            $facility5 = $_POST['EditFacility5'];
            $facility6 = $_POST['EditFacility6'];
            $facility7 = $_POST['EditFacility7'];
            $facility8 = $_POST['EditFacility8'];
            $facility9 = $_POST['EditFacility9'];
            $facility10 = $_POST['EditFacility10'];

            $folder = '../uploads/';
            $file = $folder . basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES['file']['tmp_name'], $file);
            $photo = basename($_FILES["file"]["name"]);
            $sql = "UPDATE  studentslab SET name=' $name',content='$facility1',facility2='$facility2',facility3='$facility3',facility4='$facility4',facility5='$facility5',facility6='$facility6',facility7='$facility7',facility8='$facility8',facility9='$facility9',facility10='$facility10',image='$photo' where id='$id'";
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
    }
?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Edit Students Lab | Ship Technology Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="vendors/feather/feather.css">
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
        <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
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
                                    <h4 class="card-title">Edit Students Lab</h4>
                                    <form class="forms-sample" enctype="multipart/form-data" method="POST">
                                        <?php
                                        $id = $_GET['id'];
                                        $sql = "SELECT * from studentslab where id=$id ";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $userArr = $query->fetchAll(PDO::FETCH_OBJ);
                                        if ($query->rowCount() > 0) {
                                        ?>
                                            <div class="form-group">
                                                <input type="hidden" id="id" name="id" value="<?php echo htmlentities($userArr[0]->id); ?>" />
                                                <input type="hidden" id="imageName" name="imageName" value="<?php echo htmlentities($userArr[0]->image); ?>" />

                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="EditName" name="EditName" value="<?php echo htmlentities($userArr[0]->name); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Facility 1</label>
                                                <input type="text" class="form-control" id="EditFacility1" name="EditFacility1" value="<?php echo htmlentities($userArr[0]->content); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Facility 2</label>
                                                <input type="text" class="form-control" id="EditFacility2" name="EditFacility2" value="<?php echo htmlentities($userArr[0]->facility2); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Facility 3</label>
                                                <input type="text" class="form-control" id="EditFacility3" name="EditFacility3" value="<?php echo htmlentities($userArr[0]->facility3); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Facility 4</label>
                                                <input type="text" class="form-control" id="EditFacility4" name="EditFacility4" value="<?php echo htmlentities($userArr[0]->facility4); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Facility 5</label>
                                                <input type="text" class="form-control" id="EditFacility5" name="EditFacility5" value="<?php echo htmlentities($userArr[0]->facility5); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Facility 6</label>
                                                <input type="text" class="form-control" id="EditFacility6" name="EditFacility6" value="<?php echo htmlentities($userArr[0]->facility6); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Facility 7</label>
                                                <input type="text" class="form-control" id="EditFacility7" name="EditFacility7" value="<?php echo htmlentities($userArr[0]->facility7); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Facility 8</label>
                                                <input type="text" class="form-control" id="EditFacility8" name="EditFacility8" value="<?php echo htmlentities($userArr[0]->facility8); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Facility 9</label>
                                                <input type="text" class="form-control" id="EditFacility9" name="EditFacility9" value="<?php echo htmlentities($userArr[0]->facility9); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Facility 10</label>
                                                <input type="text" class="form-control" id="EditFacility10" name="EditFacility10" value="<?php echo htmlentities($userArr[0]->facility10); ?>">
                                            </div>

                                            <div class="form-group">
                                                <input type="file" id="file" name="file" accept="image/gif, image/png, image/jpg, image/jpeg">
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2" name="studentslabEditBTN" id="studentslabEditBTN">Save</button>
                                            <button class="btn btn-light">Cancel</button>
                                        <?php
                                        }
                                        ?>
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
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. Premium <a href="https://www.infinio.co.in/" target="_blank">Infinio Technology Solutions</a> All rights
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