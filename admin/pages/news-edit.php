<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else {

    if (isset($_POST['newsUpdateBTN'])) {
        if (($_FILES["file"]["error"]) == 4) {
            if ($_POST['date'] == '') {
                $date = $_POST['oldDate'];
            } else {
                $date = $_POST['date'];
            }
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];

            $photo = $_POST['imageName'];
            $sql = "UPDATE  news SET title='$title',content='$content',date='$date',image='$photo' where id='$id'";
            $query = $dbh->prepare($sql);
            $result = $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script>alert("Success")</script>';
                echo '<script>window.location = "news.php";</script>';
            } else {
                echo '<script>alert("something went wrong please try again")</script>';
                echo '<script>window.location = "news.php";</script>';
            }
        } else if (($_FILES["file"]["error"]) == 0) {
            if ($_POST['date'] == '') {
                $date = $_POST['oldDate'];
            } else {
                $date = $_POST['date'];
            }
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $folder = 'uploads/';
            $file = $folder . basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES['file']['tmp_name'], $file);
            $photo = basename($_FILES["file"]["name"]);
            $status = '1';
            $sql = "UPDATE  news SET title='$title',content='$content',date='$date',image='$photo' where id='$id'";

            $query = $dbh->prepare($sql);
            $result = $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script>alert("Success")</script>';
                echo '<script>window.location = "news.php";</script>';
            } else {
                echo '<script>alert("something went wrong please try again")</script>';
                echo '<script>window.location = "news.php";</script>';
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit News | Shiptech Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
    <script src="../ckeditor/ckeditor.js"> </script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include('../partials/navbar.php') ?>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php include('../partials/sidebar.php') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit News</h4>
                                <form class="forms-sample" enctype="multipart/form-data" method="POST">
                                    <?php
                                        $id = $_GET['id'];
                                        // print_r($id);
                                        // exit();
                                        $sql = "SELECT id,title,content,date,image from news where id= $id ";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $userArr = $query->fetchAll(PDO::FETCH_OBJ);
                                        if ($query->rowCount() > 0) {
                                        ?>
                                    <div class="col-lg-12 form-group">
                                        <input type="hidden" id="id" name="id"
                                            value="<?php echo htmlentities($userArr[0]->id); ?>" />

                                        <input type="hidden" id="imageName" name="imageName"
                                            value="<?php echo htmlentities($userArr[0]->image); ?>" />

                                        <input type="hidden" id="oldDate" name="oldDate"
                                            value="<?php echo htmlentities($userArr[0]->date); ?>" />

                                        <label for="exampleInputUsername1">Heading</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="<?php echo htmlentities($userArr[0]->title); ?>">
                                    </div>

                                    <div class="col-lg-6 form-group">
                                        <label for="exampleInputUsername1">Date</label>
                                        <input type="date" class="form-control" id="date" name="date"
                                            value="<?php echo htmlentities($userArr[0]->date); ?>">
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label for="exampleTextarea1">Content</label>
                                        <textarea class="form-control" id="content" name="content"
                                            rows="4"><?php echo htmlentities($userArr[0]->content); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Image(800X800 px)</label>
                                        <input class="form-control" type="file" id="file" name="file"
                                            accept="image/gif, image/png, image/jpg, image/jpeg">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2" name="newsUpdateBTN"
                                        id="newsUpdateBTN">Save</button>
                                    <button class="btn btn-light">Cancel</button>
                                    <?php
                                        }
                                        ?>
                                </form>
                                <script>
                                CKEDITOR.replace('content');
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
    <script src="../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../vendors/chart.js/Chart.min.js"></script>
    <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../js/off-canvas.js"></script>
    <script src="../js/hoverable-collapse.js"></script>
    <script src="../js/template.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../js/dashboard.js"></script>
    <script src="../js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
<?php
}
?>