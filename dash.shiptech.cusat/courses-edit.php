<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['CourseseditBTN'])) {
        if (($_FILES["file"]["error"]) == '4' && ($_FILES["file2"]["error"]) == '4') {
            $photo = $_POST['imageName'];
            $thumb = $_POST['thumbName'];



            $id = $_POST['id'];
            $name = $_POST['name'];
            $specialization = $_POST['specialization'];
            $seats = $_POST['seats'];
            $eligibility = $_POST['editor'];
            $syllabus1 = $_POST['syllabus1'];
            $syllabuslink1 = $_POST['syllabuslink1'];
            $syllabus2 = $_POST['syllabus2'];
            $syllabuslink2 = $_POST['syllabuslink2'];
            $syllabus3 = $_POST['syllabus3'];
            $syllabuslink3 = $_POST['syllabuslink3'];
            $syllabus4 = $_POST['syllabus4'];
            $syllabuslink4 = $_POST['syllabuslink4'];
            $syllabus5 = $_POST['syllabus5'];
            $syllabuslink5 = $_POST['syllabuslink5'];
            $syllabus6 = $_POST['syllabus6'];
            $syllabuslink6 = $_POST['syllabuslink6'];
            $syllabus7 = $_POST['syllabus7'];
            $syllabuslink7 = $_POST['syllabuslink7'];
            $syllabus8 = $_POST['syllabus8'];
            $syllabuslink8 = $_POST['syllabuslink8'];
            $syllabus9 = $_POST['syllabus9'];
            $syllabuslink9 = $_POST['syllabuslink9'];
            $syllabus10 = $_POST['syllabus10'];
            $syllabuslink10 = $_POST['syllabuslink10'];
            $syllabus11 = $_POST['syllabus11'];
            $syllabuslink11 = $_POST['syllabuslink11'];
            $syllabus12 = $_POST['syllabus12'];
            $syllabuslink12 = $_POST['syllabuslink12'];
            $syllabus13 = $_POST['syllabus13'];
            $syllabuslink13 = $_POST['syllabuslink13'];
            $syllabus14 = $_POST['syllabus14'];
            $syllabuslink14 = $_POST['syllabuslink14'];
            $syllabus15 = $_POST['syllabus15'];
            $syllabuslink15 = $_POST['syllabuslink15'];

            $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', preg_replace('/\s+/', '-', $name)));
            $sql = "UPDATE  course SET slug='$slug', name='$name',specialization='$specialization',seat='$seats',eligibility='$eligibility',sllabus='$syllabus1',syllabus2='$syllabus2',syllabus3='$syllabus3',syllabus4='$syllabus4',syllabus5='$syllabus5',syllabus6='$syllabus6',syllabus7='$syllabus7',syllabus8='$syllabus8',syllabus9='$syllabus9',syllabus10='$syllabus10',syllabus11='$syllabus11',syllabus12='$syllabus12',syllabus13='$syllabus13',syllabus14='$syllabus14',syllabus15='$syllabus15',sllabusLink='$syllabuslink1',link2='$syllabuslink2',link3='$syllabuslink3',link4='$syllabuslink4',link5='$syllabuslink5',link6='$syllabuslink6',link7='$syllabuslink7',link8='$syllabuslink8',link9='$syllabuslink9',link10='$syllabuslink10',link11='$syllabuslink11',link12='$syllabuslink12',link13='$syllabuslink13',link14='$syllabuslink14',link15='$syllabuslink15',image='$photo',thumb='$thumb' where id='$id'";
            $query = $dbh->prepare($sql);
            $result = $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script>alert("Success")</script>';
                echo '<script>window.location = "courses.php";</script>';
            } else {
                echo '<script>alert("something went wrong please try again")</script>';
                echo '<script>window.location = "courses.php";</script>';
            }
        } else if (($_FILES["file"]["error"]) == '0' && ($_FILES["file2"]["error"]) == '0') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $specialization = $_POST['specialization'];
            $seats = $_POST['seats'];
            $eligibility = $_POST['editor'];
            $syllabus1 = $_POST['syllabus1'];
            $syllabuslink1 = $_POST['syllabuslink1'];
            $syllabus2 = $_POST['syllabus2'];
            $syllabuslink2 = $_POST['syllabuslink2'];
            $syllabus3 = $_POST['syllabus3'];
            $syllabuslink3 = $_POST['syllabuslink3'];
            $syllabus4 = $_POST['syllabus4'];
            $syllabuslink4 = $_POST['syllabuslink4'];
            $syllabus5 = $_POST['syllabus5'];
            $syllabuslink5 = $_POST['syllabuslink5'];
            $syllabus6 = $_POST['syllabus6'];
            $syllabuslink6 = $_POST['syllabuslink6'];
            $syllabus7 = $_POST['syllabus7'];
            $syllabuslink7 = $_POST['syllabuslink7'];
            $syllabus8 = $_POST['syllabus8'];
            $syllabuslink8 = $_POST['syllabuslink8'];
            $syllabus9 = $_POST['syllabus9'];
            $syllabuslink9 = $_POST['syllabuslink9'];
            $syllabus10 = $_POST['syllabus10'];
            $syllabuslink10 = $_POST['syllabuslink10'];
            $syllabus11 = $_POST['syllabus11'];
            $syllabuslink11 = $_POST['syllabuslink11'];
            $syllabus12 = $_POST['syllabus12'];
            $syllabuslink12 = $_POST['syllabuslink12'];
            $syllabus13 = $_POST['syllabus13'];
            $syllabuslink13 = $_POST['syllabuslink13'];
            $syllabus14 = $_POST['syllabus14'];
            $syllabuslink14 = $_POST['syllabuslink14'];
            $syllabus15 = $_POST['syllabus15'];
            $syllabuslink15 = $_POST['syllabuslink15'];

            $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', preg_replace('/\s+/', '-', $name)));

            $folder = '../uploads/';
            $file = $folder . basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES['file']['tmp_name'], $file);
            $photo = basename($_FILES["file"]["name"]);
            $file2 = $folder . basename($_FILES["file2"]["name"]);
            move_uploaded_file($_FILES['file2']['tmp_name'], $file2);
            $thumb = basename($_FILES["file2"]["name"]);

            $sql = "UPDATE  course SET slug='$slug', name='$name',specialization='$specialization',seat='$seats',eligibility='$eligibility',sllabus='$syllabus1',syllabus2='$syllabus2',syllabus3='$syllabus3',syllabus4='$syllabus4',syllabus5='$syllabus5',syllabus6='$syllabus6',syllabus7='$syllabus7',syllabus8='$syllabus8',syllabus9='$syllabus9',syllabus10='$syllabus10',syllabus11='$syllabus11',syllabus12='$syllabus12',syllabus13='$syllabus13',syllabus14='$syllabus14',syllabus15='$syllabus15',sllabusLink='$syllabuslink1',link2='$syllabuslink2',link3='$syllabuslink3',link4='$syllabuslink4',link5='$syllabuslink5',link6='$syllabuslink6',link7='$syllabuslink7',link8='$syllabuslink8',link9='$syllabuslink9',link10='$syllabuslink10',link11='$syllabuslink11',link12='$syllabuslink12',link13='$syllabuslink13',link14='$syllabuslink14',link15='$syllabuslink15',image='$photo',thumb='$thumb' where id='$id'";
            $query = $dbh->prepare($sql);
            $result = $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script>alert("Success")</script>';
                echo '<script>window.location = "courses.php";</script>';
            } else {
                echo '<script>alert("something went wrong please try again")</script>';
                echo '<script>window.location = "courses.php";</script>';
            }
        } else if (($_FILES["file"]["error"]) == '4' && ($_FILES["file2"]["error"]) == '0') {
            $photo = $_POST['imageName'];
            $id = $_POST['id'];
            $name = $_POST['name'];
            $specialization = $_POST['specialization'];
            $seats = $_POST['seats'];
            $eligibility = $_POST['editor'];
            $syllabus1 = $_POST['syllabus1'];
            $syllabuslink1 = $_POST['syllabuslink1'];
            $syllabus2 = $_POST['syllabus2'];
            $syllabuslink2 = $_POST['syllabuslink2'];
            $syllabus3 = $_POST['syllabus3'];
            $syllabuslink3 = $_POST['syllabuslink3'];
            $syllabus4 = $_POST['syllabus4'];
            $syllabuslink4 = $_POST['syllabuslink4'];
            $syllabus5 = $_POST['syllabus5'];
            $syllabuslink5 = $_POST['syllabuslink5'];
            $syllabus6 = $_POST['syllabus6'];
            $syllabuslink6 = $_POST['syllabuslink6'];
            $syllabus7 = $_POST['syllabus7'];
            $syllabuslink7 = $_POST['syllabuslink7'];
            $syllabus8 = $_POST['syllabus8'];
            $syllabuslink8 = $_POST['syllabuslink8'];
            $syllabus9 = $_POST['syllabus9'];
            $syllabuslink9 = $_POST['syllabuslink9'];
            $syllabus10 = $_POST['syllabus10'];
            $syllabuslink10 = $_POST['syllabuslink10'];
            $syllabus11 = $_POST['syllabus11'];
            $syllabuslink11 = $_POST['syllabuslink11'];
            $syllabus12 = $_POST['syllabus12'];
            $syllabuslink12 = $_POST['syllabuslink12'];
            $syllabus13 = $_POST['syllabus13'];
            $syllabuslink13 = $_POST['syllabuslink13'];
            $syllabus14 = $_POST['syllabus14'];
            $syllabuslink14 = $_POST['syllabuslink14'];
            $syllabus15 = $_POST['syllabus15'];
            $syllabuslink15 = $_POST['syllabuslink15'];

            $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', preg_replace('/\s+/', '-', $name)));

            $folder = '../uploads/';
            $file2 = $folder . basename($_FILES["file2"]["name"]);
            move_uploaded_file($_FILES['file2']['tmp_name'], $file2);
            $thumb = basename($_FILES["file2"]["name"]);

            $sql = "UPDATE  course SET slug='$slug', name='$name',specialization='$specialization',seat='$seats',eligibility='$eligibility',sllabus='$syllabus1',syllabus2='$syllabus2',syllabus3='$syllabus3',syllabus4='$syllabus4',syllabus5='$syllabus5',syllabus6='$syllabus6',syllabus7='$syllabus7',syllabus8='$syllabus8',syllabus9='$syllabus9',syllabus10='$syllabus10',syllabus11='$syllabus11',syllabus12='$syllabus12',syllabus13='$syllabus13',syllabus14='$syllabus14',syllabus15='$syllabus15',sllabusLink='$syllabuslink1',link2='$syllabuslink2',link3='$syllabuslink3',link4='$syllabuslink4',link5='$syllabuslink5',link6='$syllabuslink6',link7='$syllabuslink7',link8='$syllabuslink8',link9='$syllabuslink9',link10='$syllabuslink10',link11='$syllabuslink11',link12='$syllabuslink12',link13='$syllabuslink13',link14='$syllabuslink14',link15='$syllabuslink15',image='$photo',thumb='$thumb' where id='$id'";
            $query = $dbh->prepare($sql);
            $result = $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script>alert("Success")</script>';
                echo '<script>window.location = "courses.php";</script>';
            } else {
                echo '<script>alert("something went wrong please try again")</script>';
                echo '<script>window.location = "courses.php";</script>';
            }
        } else if (($_FILES["file"]["error"]) == '0' && ($_FILES["file2"]["error"]) == '4') {
            $thumb = $_POST['thumbName'];

            $id = $_POST['id'];
            $name = $_POST['name'];
            $specialization = $_POST['specialization'];
            $seats = $_POST['seats'];
            $eligibility = $_POST['editor'];
            $syllabus1 = $_POST['syllabus1'];
            $syllabuslink1 = $_POST['syllabuslink1'];
            $syllabus2 = $_POST['syllabus2'];
            $syllabuslink2 = $_POST['syllabuslink2'];
            $syllabus3 = $_POST['syllabus3'];
            $syllabuslink3 = $_POST['syllabuslink3'];
            $syllabus4 = $_POST['syllabus4'];
            $syllabuslink4 = $_POST['syllabuslink4'];
            $syllabus5 = $_POST['syllabus5'];
            $syllabuslink5 = $_POST['syllabuslink5'];
            $syllabus6 = $_POST['syllabus6'];
            $syllabuslink6 = $_POST['syllabuslink6'];
            $syllabus7 = $_POST['syllabus7'];
            $syllabuslink7 = $_POST['syllabuslink7'];
            $syllabus8 = $_POST['syllabus8'];
            $syllabuslink8 = $_POST['syllabuslink8'];
            $syllabus9 = $_POST['syllabus9'];
            $syllabuslink9 = $_POST['syllabuslink9'];
            $syllabus10 = $_POST['syllabus10'];
            $syllabuslink10 = $_POST['syllabuslink10'];
            $syllabus11 = $_POST['syllabus11'];
            $syllabuslink11 = $_POST['syllabuslink11'];
            $syllabus12 = $_POST['syllabus12'];
            $syllabuslink12 = $_POST['syllabuslink12'];
            $syllabus13 = $_POST['syllabus13'];
            $syllabuslink13 = $_POST['syllabuslink13'];
            $syllabus14 = $_POST['syllabus14'];
            $syllabuslink14 = $_POST['syllabuslink14'];
            $syllabus15 = $_POST['syllabus15'];
            $syllabuslink15 = $_POST['syllabuslink15'];

            $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', preg_replace('/\s+/', '-', $name)));

            $folder = '../uploads/';
            $file = $folder . basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES['file']['tmp_name'], $file);
            $photo = basename($_FILES["file"]["name"]);

            $sql = "UPDATE  course SET slug='$slug', name='$name',specialization='$specialization',seat='$seats',eligibility='$eligibility',sllabus='$syllabus1',syllabus2='$syllabus2',syllabus3='$syllabus3',syllabus4='$syllabus4',syllabus5='$syllabus5',syllabus6='$syllabus6',syllabus7='$syllabus7',syllabus8='$syllabus8',syllabus9='$syllabus9',syllabus10='$syllabus10',syllabus11='$syllabus11',syllabus12='$syllabus12',syllabus13='$syllabus13',syllabus14='$syllabus14',syllabus15='$syllabus15',sllabusLink='$syllabuslink1',link2='$syllabuslink2',link3='$syllabuslink3',link4='$syllabuslink4',link5='$syllabuslink5',link6='$syllabuslink6',link7='$syllabuslink7',link8='$syllabuslink8',link9='$syllabuslink9',link10='$syllabuslink10',link11='$syllabuslink11',link12='$syllabuslink12',link13='$syllabuslink13',link14='$syllabuslink14',link15='$syllabuslink15',image='$photo',thumb='$thumb' where id='$id'";
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
    }
?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Edit Courses | Ship Technology Admin</title>
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
                                    <h4 class="card-title">Edit Courses</h4>
                                    <form class="forms-sample" enctype="multipart/form-data" method="POST">
                                        <?php
                                        $id = $_GET['id'];
                                        $sql = "SELECT * from course where id=$id ";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $userArr = $query->fetchAll(PDO::FETCH_OBJ);
                                        if ($query->rowCount() > 0) {
                                        ?>
                                            <div class="form-group">
                                                <input type="hidden" id="id" name="id" value="<?php echo htmlentities($userArr[0]->id); ?>" />
                                                <input type="hidden" id="imageName" name="imageName" value="<?php echo htmlentities($userArr[0]->image); ?>" />
                                                <input type="hidden" id="thumbName" name="thumbName" value="<?php echo htmlentities($userArr[0]->thumb); ?>" />

                                                <label for="exampleInputUsername1">Courses Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlentities($userArr[0]->name); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Specialization</label>
                                                <input type="text" class="form-control" id="specialization" name="specialization" value="<?php echo htmlentities($userArr[0]->specialization); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">No. of Seats</label>
                                                <input type="text" class="form-control" id="seats" name="seats" value="<?php echo htmlentities($userArr[0]->seat); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Eligibility Criteria </label>
                                                <textarea id="editor" name="editor"><?php echo htmlentities($userArr[0]->eligibility); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 1</label>
                                                <input type="text" class="form-control" id="syllabus1" name="syllabus1" value="<?php echo htmlentities($userArr[0]->sllabus); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 1</label>
                                                <input type="text" class="form-control" id="syllabuslink1" name="syllabuslink1" value="<?php echo htmlentities($userArr[0]->sllabusLink); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 2</label>
                                                <input type="text" class="form-control" id="syllabus2" name="syllabus2" value="<?php echo htmlentities($userArr[0]->syllabus2); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 2</label>
                                                <input type="text" class="form-control" id="syllabuslink2" name="syllabuslink2" value="<?php echo htmlentities($userArr[0]->link2); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 3</label>
                                                <input type="text" class="form-control" id="syllabus3" name="syllabus3" value="<?php echo htmlentities($userArr[0]->syllabus3); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 3</label>
                                                <input type="text" class="form-control" id="syllabuslink3" name="syllabuslink3" value="<?php echo htmlentities($userArr[0]->link3); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 4</label>
                                                <input type="text" class="form-control" id="syllabus4" name="syllabus4" value="<?php echo htmlentities($userArr[0]->syllabus4); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 4</label>
                                                <input type="text" class="form-control" id="syllabuslink4" name="syllabuslink4" value="<?php echo htmlentities($userArr[0]->link4); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 5</label>
                                                <input type="text" class="form-control" id="syllabus5" name="syllabus5" value="<?php echo htmlentities($userArr[0]->syllabus5); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 5</label>
                                                <input type="text" class="form-control" id="syllabuslink5" name="syllabuslink5" value="<?php echo htmlentities($userArr[0]->link5); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 6</label>
                                                <input type="text" class="form-control" id="syllabus6" name="syllabus6" value="<?php echo htmlentities($userArr[0]->syllabus6); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 6</label>
                                                <input type="text" class="form-control" id="syllabuslink6" name="syllabuslink6" value="<?php echo htmlentities($userArr[0]->link6); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 7</label>
                                                <input type="text" class="form-control" id="syllabus7" name="syllabus7" value="<?php echo htmlentities($userArr[0]->syllabus7); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 7</label>
                                                <input type="text" class="form-control" id="syllabuslink7" name="syllabuslink7" value="<?php echo htmlentities($userArr[0]->link7); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 8</label>
                                                <input type="text" class="form-control" id="syllabus8" name="syllabus8" value="<?php echo htmlentities($userArr[0]->syllabus8); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 8</label>
                                                <input type="text" class="form-control" id="syllabuslink8" name="syllabuslink8" value="<?php echo htmlentities($userArr[0]->link8); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 9</label>
                                                <input type="text" class="form-control" id="syllabus9" name="syllabus9" value="<?php echo htmlentities($userArr[0]->syllabus9); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 9</label>
                                                <input type="text" class="form-control" id="syllabuslink9" name="syllabuslink9" value="<?php echo htmlentities($userArr[0]->link9); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 10</label>
                                                <input type="text" class="form-control" id="syllabus10" name="syllabus10" value="<?php echo htmlentities($userArr[0]->syllabus10); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 10</label>
                                                <input type="text" class="form-control" id="syllabuslink10" name="syllabuslink10" value="<?php echo htmlentities($userArr[0]->link10); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 11</label>
                                                <input type="text" class="form-control" id="syllabus11" name="syllabus11" value="<?php echo htmlentities($userArr[0]->syllabus11); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 11</label>
                                                <input type="text" class="form-control" id="syllabuslink11" name="syllabuslink11" value="<?php echo htmlentities($userArr[0]->link11); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 12</label>
                                                <input type="text" class="form-control" id="syllabus12" name="syllabus12" value="<?php echo htmlentities($userArr[0]->syllabus12); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 12</label>
                                                <input type="text" class="form-control" id="syllabuslink12" name="syllabuslink12" value="<?php echo htmlentities($userArr[0]->link12); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 13</label>
                                                <input type="text" class="form-control" id="syllabus13" name="syllabus13" value="<?php echo htmlentities($userArr[0]->syllabus13); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 13</label>
                                                <input type="text" class="form-control" id="syllabuslink13" name="syllabuslink13" value="<?php echo htmlentities($userArr[0]->link13); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 14</label>
                                                <input type="text" class="form-control" id="syllabus14" name="syllabus14" value="<?php echo htmlentities($userArr[0]->syllabus14); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 14</label>
                                                <input type="text" class="form-control" id="syllabuslink14" name="syllabuslink14" value="<?php echo htmlentities($userArr[0]->link14); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Name 15</label>
                                                <input type="text" class="form-control" id="syllabus15" name="syllabus15" value="<?php echo htmlentities($userArr[0]->syllabus15); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Syllabus Link 15</label>
                                                <input type="text" class="form-control" id="syllabuslink15" name="syllabuslink15" value="<?php echo htmlentities($userArr[0]->link15); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Course Image</label>
                                                <input type="file" class="form-control" id="file" name="file" accept="image/gif, image/png, image/jpg, image/jpeg">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Thumbnail</label>
                                                <input type="file" class="form-control" id="file2" name="file2" accept="image/gif, image/png, image/jpg, image/jpeg">
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2" name="CourseseditBTN" id="CourseseditBTN">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                        <?php
                                        } ?>
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