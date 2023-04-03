<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else {

    if (isset($_POST['CoursesBTN'])) {
        $name = $_POST['name'];
        $specialization = $_POST['specialization'];
        $seats = $_POST['seats'];
        $eligibility = $_POST['editor'];

        $syllabus1 = $_POST['syllabus1'];
        $link1 = $_POST['syllabuslink1'];

        $syllabus2 = $_POST['syllabus2'];
        $link2 = $_POST['syllabuslink2'];

        $syllabus3 = $_POST['syllabus3'];
        $link3 = $_POST['syllabuslink3'];

        $syllabus4 = $_POST['syllabus4'];
        $link4 = $_POST['syllabuslink4'];

        $syllabus5 = $_POST['syllabus5'];
        $link5 = $_POST['syllabuslink5'];

        $syllabus6 = $_POST['syllabus6'];
        $link6 = $_POST['syllabuslink6'];

        $syllabus7 = $_POST['syllabus7'];
        $link7 = $_POST['syllabuslink7'];

        $syllabus8 = $_POST['syllabus8'];
        $link8 = $_POST['syllabuslink8'];

        $syllabus9 = $_POST['syllabus9'];
        $link9 = $_POST['syllabuslink9'];

        $syllabus10 = $_POST['syllabus10'];
        $link10 = $_POST['syllabuslink10'];

        $syllabus11 = $_POST['syllabus11'];
        $link11 = $_POST['syllabuslink11'];

        $syllabus12 = $_POST['syllabus12'];
        $link12 = $_POST['syllabuslink12'];

        $syllabus13 = $_POST['syllabus13'];
        $link13 = $_POST['syllabuslink13'];

        $syllabus14 = $_POST['syllabus14'];
        $link14 = $_POST['syllabuslink14'];

        $syllabus15 = $_POST['syllabus15'];
        $link15 = $_POST['syllabuslink15'];

        $folder = '../uploads/';
        $file = $folder . basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES['file']['tmp_name'], $file);
        $photo = basename($_FILES["file"]["name"]);
        $file2 = $folder . basename($_FILES["file2"]["name"]);
        move_uploaded_file($_FILES['file2']['tmp_name'], $file2);
        $thumb = basename($_FILES["file2"]["name"]);

        $status = '1';
        $sql = "INSERT INTO course(name,specialization,seat,eligibility,thumb,image,sllabus,syllabus2,syllabus3,syllabus4,syllabus5,syllabus6,syllabus7,syllabus8,syllabus9,syllabus10,syllabus11,syllabus12,syllabus13,syllabus14,syllabus15,sllabusLink,link2,link3,link4,link5,link6,link7,link8,link9,link10,link11,link12,link13,link14,link15,status) VALUES ('" . $name . "','" . $specialization . "','" . $seats . "','" . $eligibility . "','" . $thumb . "','" . $photo . "','" . $syllabus1 . "','" . $syllabus2 . "','" . $syllabus3 . "','" . $syllabus4 . "','" . $syllabus5 . "','" . $syllabus6 . "','" . $syllabus7 . "','" . $syllabus8 . "','" . $syllabus9 . "','" . $syllabus10 . "','" . $syllabus11 . "','" . $syllabus12 . "','" . $syllabus13 . "','" . $syllabus14 . "','" . $syllabus15 . "','" . $link1 . "','" . $link2 . "','" . $link3 . "','" . $link4 . "','" . $link5 . "','" . $link6 . "','" . $link7 . "','" . $link8 . "','" . $link9 . "','" . $link10 . "','" . $link11 . "','" . $link12 . "','" . $link13 . "','" . $link14 . "','" . $link15 . "','" . $status . "')";
        $query = $dbh->prepare($sql);
        $result = $query->execute();
        if ($query->rowCount() > 0) {
            echo '<script>alert("Success")</script>';
            echo '<script>window.location = "courses.php";</script>';
        } else {
            echo '<script>alert("something went wrong please try again")</script>';
            echo '<script>window.location = "courses.php";</script>';
        }
    }
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>New Courses | Ship Technology Admin</title>
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
                                    <h4 class="card-title">New Courses</h4>
                                    <form class="forms-sample" enctype="multipart/form-data" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Courses Name</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Specialization</label>
                                            <input type="text" class="form-control" id="specialization" name="specialization" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">No. of Seats</label>
                                            <input type="text" class="form-control" id="seats" name="seats">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Eligibility Criteria </label>
                                            <textarea id="editor" name="editor"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 1</label>
                                            <input type="text" class="form-control" id="syllabus1" name="syllabus1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 1</label>
                                            <input type="text" class="form-control" id="syllabuslink1" name="syllabuslink1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 2</label>
                                            <input type="text" class="form-control" id="syllabus2" name="syllabus2">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 2</label>
                                            <input type="text" class="form-control" id="syllabuslink2" name="syllabuslink2">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 3</label>
                                            <input type="text" class="form-control" id="syllabus3" name="syllabus3">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 3</label>
                                            <input type="text" class="form-control" id="syllabuslink3" name="syllabuslink3">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 4</label>
                                            <input type="text" class="form-control" id="syllabus4" name="syllabus4">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 4</label>
                                            <input type="text" class="form-control" id="syllabuslink4" name="syllabuslink4">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 5</label>
                                            <input type="text" class="form-control" id="syllabus5" name="syllabus5">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 5</label>
                                            <input type="text" class="form-control" id="syllabuslink5" name="syllabuslink5">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 6</label>
                                            <input type="text" class="form-control" id="syllabus6" name="syllabus6">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 6</label>
                                            <input type="text" class="form-control" id="syllabuslink6" name="syllabuslink6">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 7</label>
                                            <input type="text" class="form-control" id="syllabus7" name="syllabus7">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 7</label>
                                            <input type="text" class="form-control" id="syllabuslink7" name="syllabuslink7">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 8</label>
                                            <input type="text" class="form-control" id="syllabus8" name="syllabus8">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 8</label>
                                            <input type="text" class="form-control" id="syllabuslink8" name="syllabuslink8">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 9</label>
                                            <input type="text" class="form-control" id="syllabus9" name="syllabus9">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 9</label>
                                            <input type="text" class="form-control" id="syllabuslink9" name="syllabuslink9">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 10</label>
                                            <input type="text" class="form-control" id="syllabus10" name="syllabus10">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 10</label>
                                            <input type="text" class="form-control" id="syllabuslink10" name="syllabuslink10">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 11</label>
                                            <input type="text" class="form-control" id="syllabus11" name="syllabus11">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 11</label>
                                            <input type="text" class="form-control" id="syllabuslink11" name="syllabuslink11">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 12</label>
                                            <input type="text" class="form-control" id="syllabus12" name="syllabus12">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 12</label>
                                            <input type="text" class="form-control" id="syllabuslink12" name="syllabuslink12">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 13</label>
                                            <input type="text" class="form-control" id="syllabus13" name="syllabus13">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 13</label>
                                            <input type="text" class="form-control" id="syllabuslink13" name="syllabuslink13">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 14</label>
                                            <input type="text" class="form-control" id="syllabus14" name="syllabus14">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 14</label>
                                            <input type="text" class="form-control" id="syllabuslink14" name="syllabuslink14">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Name 15</label>
                                            <input type="text" class="form-control" id="syllabus15" name="syllabus15">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Syllabus Link 15</label>
                                            <input type="text" class="form-control" id="syllabuslink15" name="syllabuslink15">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Course Image(700x700 px)</label>
                                            <input type="file" class="form-control" id="file" name="file" accept="image/gif, image/png, image/jpg, image/jpeg">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Thumbnail(600x400 px)</label>
                                            <input type="file" class="form-control" id="file2" name="file2" accept="image/gif, image/png, image/jpg, image/jpeg">
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2" name="CoursesBTN" id="CoursesBTN">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                    <script>
                                        CKEDITOR.replace('editor');
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