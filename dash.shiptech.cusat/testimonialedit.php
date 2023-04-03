<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else {
    if (isset($_POST['testimonialEditBTN'])) {
        if (($_FILES["file"]["error"]) == 4) {
            $photo = $_POST['imageName'];
            $id = $_POST['id'];
            $name = $_POST['EditName'];
            $course = $_POST['EditCourse'];
            $designation = $_POST['EditDesignation'];
            $year = $_POST['EditYear'];
            $message = $_POST['Editmessage'];
            $sql = "UPDATE  testimonials SET name=' $name',course='$course',designation='$designation',batch='$year',message='$message',image='$photo' where id='$id'";
            $query = $dbh->prepare($sql);
            $result = $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script>alert("Success")</script>';
                echo '<script>window.location = "testimonial.php";</script>';
            } else {
                echo '<script>alert("something went wrong please try again")</script>';
                echo '<script>window.location = "testimonial.php";</script>';
            }
        } else if (($_FILES["file"]["error"]) == 0) {
            $id = $_POST['id'];
            $name = $_POST['EditName'];
            $course = $_POST['EditCourse'];
            $designation = $_POST['EditDesignation'];
            $year = $_POST['EditYear'];
            $message = $_POST['Editmessage'];

            $folder = '../uploads/';
            $file = $folder . basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES['file']['tmp_name'], $file);
            $photo = basename($_FILES["file"]["name"]);
            $sql = "UPDATE  testimonials SET name=' $name',course='$course',designation='$designation',batch='$year',message='$message',image='$photo' where id='$id'";
            $query = $dbh->prepare($sql);
            $result = $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script>alert("Success")</script>';
                echo '<script>window.location = "testimonial.php";</script>';
            } else {
                echo '<script>alert("something went wrong please try again")</script>';
                echo '<script>window.location = "testimonial.php";</script>';
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
        <title>Edit Announcement | Ship Technology Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="vendors/feather/feather.css">
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
        <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="images/favicon.png" />
        <script src="ckeditor/ckeditor.js"> </script>
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
                                    <h4 class="card-title">Edit Testimonials</h4>
                                    <form class="forms-sample" enctype="multipart/form-data" method="POST">
                                        <?php
                                        $id = $_GET['id'];
                                        $sql = "SELECT * from testimonials where id=$id ";
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
                                                <label for="name">Designation & Company</label>
                                                <input type="text" class="form-control" id="EditDesignation" name="EditDesignation" value="<?php echo htmlentities($userArr[0]->designation); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="course">Course</label>
                                                <input type="text" class="form-control" id="EditCourse" name="EditCourse" value="<?php echo htmlentities($userArr[0]->course); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Year">Year</label>
                                                <input type="text" class="form-control" id="EditYear" name="EditYear" value="<?php echo htmlentities($userArr[0]->batch); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Message">Message</label>
                                                <textarea class="form-control" id="Editmessage" name="Editmessage" rows="4"><?php echo htmlentities($userArr[0]->message); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <!-- <label for="Image">Image (500x500 px)</label> -->
                                                <input type="file" id="file" name="file" accept="image/gif, image/png, image/jpg, image/jpeg">
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2" name="testimonialEditBTN" id="testimonialEditBTN">Save</button>
                                            <button class="btn btn-light">Cancel</button>
                                        <?php
                                        }
                                        ?>
                                    </form>
                                    <script>
                                        CKEDITOR.replace('Editmessage');
                                    </script>
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