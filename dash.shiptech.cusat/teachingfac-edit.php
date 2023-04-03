<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else {
    if (isset($_POST['studentslabEditBTN'])) {
        if (($_FILES["file"]["error"]) == 4) {
            $photo = $_POST['image'];
            $id = $_POST['id'];

            $name = $_POST['name'];
            $designation = $_POST['designation'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $iqac = $_POST['iqac'];
            $about = $_POST['about'];
            $thumbname = $_POST['thumbname'];

            $interest1 = $_POST['interest1'];
            $interest2 = $_POST['interest2'];
            $interest3 = $_POST['interest3'];
            $interest4 = $_POST['interest4'];
            $interest5 = $_POST['interest5'];
            $interest6 = $_POST['interest6'];
            $interest7 = $_POST['interest7'];
            $interest8 = $_POST['interest8'];
            $interest9 = $_POST['interest9'];
            $interest10 = $_POST['interest10'];

            $education1 = $_POST['education1'];
            $education2 = $_POST['education2'];
            $education3 = $_POST['education3'];
            $education4 = $_POST['education4'];
            $education5 = $_POST['education5'];
            $education6 = $_POST['education6'];

            $Edescription1 = $_POST['Edescription1'];
            $Edescription2 = $_POST['Edescription2'];
            $Edescription3 = $_POST['Edescription3'];
            $Edescription4 = $_POST['Edescription4'];
            $Edescription5 = $_POST['Edescription5'];
            $Edescription6 = $_POST['Edescription6'];

            $experience1 = $_POST['experience1'];
            $experience2 = $_POST['experience2'];
            $experience3 = $_POST['experience3'];
            $experience4 = $_POST['experience4'];
            $experience5 = $_POST['experience5'];
            $experience6 = $_POST['experience6'];
            $experience7 = $_POST['experience7'];
            $experience8 = $_POST['experience8'];
            $experience9 = $_POST['experience9'];
            $experience10 = $_POST['experience10'];

            $Exdescription1 = $_POST['Exdescription1'];
            $Exdescription2 = $_POST['Exdescription2'];
            $Exdescription3 = $_POST['Exdescription3'];
            $Exdescription4 = $_POST['Exdescription4'];
            $Exdescription5 = $_POST['Exdescription5'];
            $Exdescription6 = $_POST['Exdescription6'];
            $Exdescription7 = $_POST['Exdescription7'];
            $Exdescription8 = $_POST['Exdescription8'];
            $Exdescription9 = $_POST['Exdescription9'];
            $Exdescription10 = $_POST['Exdescription10'];

            $publications = $_POST['publications'];

            $FundedProjectRole1 = $_POST['FundedProjectRole1'];
            $FundedProjectRole2 = $_POST['FundedProjectRole2'];
            $FundedProjectRole3 = $_POST['FundedProjectRole3'];
            $FundedProjectRole4 = $_POST['FundedProjectRole4'];
            $FundedProjectRole5 = $_POST['FundedProjectRole5'];
            $FundedProjectRole6 = $_POST['FundedProjectRole6'];
            $FundedProjectRole7 = $_POST['FundedProjectRole7'];
            $FundedProjectRole8 = $_POST['FundedProjectRole8'];
            $FundedProjectRole9 = $_POST['FundedProjectRole9'];
            $FundedProjectRole10 = $_POST['FundedProjectRole10'];

            $projectName1 = $_POST['projectName1'];
            $projectName2 = $_POST['projectName2'];
            $projectName3 = $_POST['projectName3'];
            $projectName4 = $_POST['projectName4'];
            $projectName5 = $_POST['projectName5'];
            $projectName6 = $_POST['projectName6'];
            $projectName7 = $_POST['projectName7'];
            $projectName8 = $_POST['projectName8'];
            $projectName9 = $_POST['projectName9'];
            $projectName10 = $_POST['projectName10'];

            $FAgency1 = $_POST['FAgency1'];
            $FAgency2 = $_POST['FAgency2'];
            $FAgency3 = $_POST['FAgency3'];
            $FAgency4 = $_POST['FAgency4'];
            $FAgency5 = $_POST['FAgency5'];
            $FAgency6 = $_POST['FAgency6'];
            $FAgency7 = $_POST['FAgency7'];
            $FAgency8 = $_POST['FAgency8'];
            $FAgency9 = $_POST['FAgency9'];
            $FAgency10 = $_POST['FAgency10'];
            $MoreFundedProjects = $_POST['MoreFundedProjects'];

            $otherInfo = $_POST['otherInfo'];


            $sql = "UPDATE  faculty SET MoreFundedProjects='$MoreFundedProjects', name='$name',thumbname='$thumbname',designation='$designation',email='$email',address='$address',iqacLink='$iqac',about='$about',interest1='$interest1',interest2='$interest2',interest3='$interest3',interest4='$interest4',interest5='$interest5',interest6='$interest6',interest7='$interest7',interest8='$interest8',interest9='$interest9',interest10='$interest10',education1='$education1',edDescription1='$Edescription1',education2='$education2',edDescription2='$Edescription2',education3='$education3',edDescription3='$Edescription3',education4='$education4',edDescription4='$Edescription4',education5='$education5',edDescription5='$Edescription5',education6='$education6',edDescription6='$Edescription6',experience1='$experience1',experience2='$experience2',experience3='$experience3',experience4='$experience4',experience5='$experience5',experience6='$experience6',experience7='$experience7',experience8='$experience8',experience9='$experience9',experience10='$experience10',expDescription1='$Exdescription1',expDescription2='$Exdescription2',expDescription3='$Exdescription3',expDescription4='$Exdescription4',expDescription5='$Exdescription5',expDescription6='$Exdescription6',expDescription7='$Exdescription7',expDescription8='$Exdescription8',expDescription9='$Exdescription9',expDescription10='$Exdescription10',publications='$publications',otherInfo='$otherInfo',role1='$FundedProjectRole1',role2='$FundedProjectRole2',role3='$FundedProjectRole3',role4='$FundedProjectRole4',role5='$FundedProjectRole5',role6='$FundedProjectRole6',role7='$FundedProjectRole7',role8='$FundedProjectRole8',role9='$FundedProjectRole9',role10='$FundedProjectRole10',project1='$projectName1',project2='$projectName2',project3='$projectName3',project4='$projectName4',project5='$projectName5',project6='$projectName6',project7='$projectName7',project8='$projectName8',project9='$projectName9',project10='$projectName10',agency1='$FAgency1',agency2='$FAgency2',agency3='$FAgency3',agency4='$FAgency4',agency5='$FAgency5',agency6='$FAgency6',agency7='$FAgency7',agency8='$FAgency8',agency9='$FAgency9',agency10='$FAgency10',image='$photo' where id='$id'";
            // print_r($sql);
            // exit();
            $query = $dbh->prepare($sql);
            $result = $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script>alert("Success")</script>';
                echo '<script>window.location = "teachingfaculty.php";</script>';
            } else {
                echo '<script>alert("something went wrong please try again")</script>';
                echo '<script>window.location = "teachingfaculty.php";</script>';
            }
        } else if (($_FILES["file"]["error"]) == 0) {
            $id = $_POST['id'];

            $name = $_POST['name'];
            $designation = $_POST['designation'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $iqac = $_POST['iqac'];
            $about = $_POST['about'];
            $thumbname = $_POST['thumbname'];

            $interest1 = $_POST['interest1'];
            $interest2 = $_POST['interest2'];
            $interest3 = $_POST['interest3'];
            $interest4 = $_POST['interest4'];
            $interest5 = $_POST['interest5'];
            $interest6 = $_POST['interest6'];
            $interest7 = $_POST['interest7'];
            $interest8 = $_POST['interest8'];
            $interest9 = $_POST['interest9'];
            $interest10 = $_POST['interest10'];

            $education1 = $_POST['education1'];
            $education2 = $_POST['education2'];
            $education3 = $_POST['education3'];
            $education4 = $_POST['education4'];
            $education5 = $_POST['education5'];
            $education6 = $_POST['education6'];

            $Edescription1 = $_POST['Edescription1'];
            $Edescription2 = $_POST['Edescription2'];
            $Edescription3 = $_POST['Edescription3'];
            $Edescription4 = $_POST['Edescription4'];
            $Edescription5 = $_POST['Edescription5'];
            $Edescription6 = $_POST['Edescription6'];

            $experience1 = $_POST['experience1'];
            $experience2 = $_POST['experience2'];
            $experience3 = $_POST['experience3'];
            $experience4 = $_POST['experience4'];
            $experience5 = $_POST['experience5'];
            $experience6 = $_POST['experience6'];
            $experience7 = $_POST['experience7'];
            $experience8 = $_POST['experience8'];
            $experience9 = $_POST['experience9'];
            $experience10 = $_POST['experience10'];

            $Exdescription1 = $_POST['Exdescription1'];
            $Exdescription2 = $_POST['Exdescription2'];
            $Exdescription3 = $_POST['Exdescription3'];
            $Exdescription4 = $_POST['Exdescription4'];
            $Exdescription5 = $_POST['Exdescription5'];
            $Exdescription6 = $_POST['Exdescription6'];
            $Exdescription7 = $_POST['Exdescription7'];
            $Exdescription8 = $_POST['Exdescription8'];
            $Exdescription9 = $_POST['Exdescription9'];
            $Exdescription10 = $_POST['Exdescription10'];

            $publications = $_POST['publications'];

            $FundedProjectRole1 = $_POST['FundedProjectRole1'];
            $FundedProjectRole2 = $_POST['FundedProjectRole2'];
            $FundedProjectRole3 = $_POST['FundedProjectRole3'];
            $FundedProjectRole4 = $_POST['FundedProjectRole4'];
            $FundedProjectRole5 = $_POST['FundedProjectRole5'];
            $FundedProjectRole6 = $_POST['FundedProjectRole6'];
            $FundedProjectRole7 = $_POST['FundedProjectRole7'];
            $FundedProjectRole8 = $_POST['FundedProjectRole8'];
            $FundedProjectRole9 = $_POST['FundedProjectRole9'];
            $FundedProjectRole10 = $_POST['FundedProjectRole10'];

            $projectName1 = $_POST['projectName1'];
            $projectName2 = $_POST['projectName2'];
            $projectName3 = $_POST['projectName3'];
            $projectName4 = $_POST['projectName4'];
            $projectName5 = $_POST['projectName5'];
            $projectName6 = $_POST['projectName6'];
            $projectName7 = $_POST['projectName7'];
            $projectName8 = $_POST['projectName8'];
            $projectName9 = $_POST['projectName9'];
            $projectName10 = $_POST['projectName10'];

            $FAgency1 = $_POST['FAgency1'];
            $FAgency2 = $_POST['FAgency2'];
            $FAgency3 = $_POST['FAgency3'];
            $FAgency4 = $_POST['FAgency4'];
            $FAgency5 = $_POST['FAgency5'];
            $FAgency6 = $_POST['FAgency6'];
            $FAgency7 = $_POST['FAgency7'];
            $FAgency8 = $_POST['FAgency8'];
            $FAgency9 = $_POST['FAgency9'];
            $FAgency10 = $_POST['FAgency10'];
            $MoreFundedProjects = $_POST['MoreFundedProjects'];

            $otherInfo = $_POST['otherInfo'];

            $folder = '../uploads/';
            $file = $folder . basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES['file']['tmp_name'], $file);
            $photo = basename($_FILES["file"]["name"]);
            $sql = "UPDATE  faculty SET MoreFundedProjects='$MoreFundedProjects', name='$name',thumbname='$thumbname',designation='$designation',email='$email',address='$address',iqacLink='$iqac',about='$about',interest1='$interest1',interest2='$interest2',interest3='$interest3',interest4='$interest4',interest5='$interest5',interest6='$interest6',interest7='$interest7',interest8='$interest8',interest9='$interest9',interest10='$interest10',education1='$education1',edDescription1='$Edescription1',education2='$education2',edDescription2='$Edescription2',education3='$education3',edDescription3='$Edescription3',education4='$education4',edDescription4='$Edescription4',education5='$education5',edDescription5='$Edescription5',education6='$education6',edDescription6='$Edescription6',experience1='$experience1',experience2='$experience2',experience3='$experience3',experience4='$experience4',experience5='$experience5',experience6='$experience6',experience7='$experience7',experience8='$experience8',experience9='$experience9',experience10='$experience10',expDescription1='$Exdescription1',expDescription2='$Exdescription2',expDescription3='$Exdescription3',expDescription4='$Exdescription4',expDescription5='$Exdescription5',expDescription6='$Exdescription6',expDescription7='$Exdescription7',expDescription8='$Exdescription8',expDescription9='$Exdescription9',expDescription10='$Exdescription10',publications='$publications',otherInfo='$otherInfo',role1='$FundedProjectRole1',role2='$FundedProjectRole2',role3='$FundedProjectRole3',role4='$FundedProjectRole4',role5='$FundedProjectRole5',role6='$FundedProjectRole6',role7='$FundedProjectRole7',role8='$FundedProjectRole8',role9='$FundedProjectRole9',role10='$FundedProjectRole10',project1='$projectName1',project2='$projectName2',project3='$projectName3',project4='$projectName4',project5='$projectName5',project6='$projectName6',project7='$projectName7',project8='$projectName8',project9='$projectName9',project10='$projectName10',agency1='$FAgency1',agency2='$FAgency2',agency3='$FAgency3',agency4='$FAgency4',agency5='$FAgency5',agency6='$FAgency6',agency7='$FAgency7',agency8='$FAgency8',agency9='$FAgency9',agency10='$FAgency10',image='$photo' where id='$id'";
            $query = $dbh->prepare($sql);
            $result = $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script>alert("Success")</script>';
                echo '<script>window.location = "teachingfaculty.php";</script>';
            } else {
                echo '<script>alert("something went wrong please try again")</script>';
                echo '<script>window.location = "teachingfaculty.php";</script>';
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
        <title>Edit Faculty | Ship Technology Admin</title>
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
                                    <h4 class="card-title">Edit Faculty</h4>
                                    <form class="forms-sample" enctype="multipart/form-data" method="POST">
                                        <?php
                                        $id = $_GET['id'];
                                        $sql = "SELECT * from faculty where id=$id ";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $userArr = $query->fetchAll(PDO::FETCH_OBJ);
                                        if ($query->rowCount() > 0) {
                                        ?>
                                            <div class="form-group">
                                                <input type="hidden" id="id" name="id" value="<?php echo htmlentities($userArr[0]->id); ?>" />
                                                <input type="hidden" id="image" name="image" value="<?php echo htmlentities($userArr[0]->image); ?>" />
                                                <label for="exampleInputUsername1">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="<?php echo ($userArr[0]->name); ?>">
                                            </div>
                                            <div class=" form-group">
                                                <label for="exampleInputUsername1">Thumbnail Education Qualification</label>
                                                <input type="text" class="form-control" id="thumbname" name="thumbname" value="<?php echo ($userArr[0]->thumbname); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Designation</label>
                                                <input type="text" class="form-control" id="designation" name="designation" value="<?php echo ($userArr[0]->designation); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" value="<?php echo ($userArr[0]->email); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Address</label>
                                                <textarea class="form-control" id="address" name="address" rows="4"><?php echo ($userArr[0]->address); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">IQAC Link</label>
                                                <input type="text" class="form-control" id="iqac" name="iqac" value="<?php echo ($userArr[0]->iqacLink); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">About</label>
                                                <textarea class="form-control" id="about" name="about" rows="4"><?php echo ($userArr[0]->about); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Field Of Special Interest 1</label>
                                                <input type="text" class="form-control" id="interest1" name="interest1" value="<?php echo ($userArr[0]->interest1); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Field Of Special Interest 2</label>
                                                <input type="text" class="form-control" id="interest2" name="interest2" value="<?php echo ($userArr[0]->interest2); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Field Of Special Interest 3</label>
                                                <input type="text" class="form-control" id="interest3" name="interest3" value="<?php echo ($userArr[0]->interest3); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Field Of Special Interest 4</label>
                                                <input type="text" class="form-control" id="interest4" name="interest4" value="<?php echo ($userArr[0]->interest4); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Field Of Special Interest 5</label>
                                                <input type="text" class="form-control" id="interest5" name="interest5" value="<?php echo ($userArr[0]->interest5); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Field Of Special Interest 6</label>
                                                <input type="text" class="form-control" id="interest6" name="interest6" value="<?php echo ($userArr[0]->interest6); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Field Of Special Interest 7</label>
                                                <input type="text" class="form-control" id="interest7" name="interest7" value="<?php echo ($userArr[0]->interest7); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Field Of Special Interest 8</label>
                                                <input type="text" class="form-control" id="interest8" name="interest8" value="<?php echo ($userArr[0]->interest8); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Field Of Special Interest 9</label>
                                                <input type="text" class="form-control" id="interest9" name="interest9" value="<?php echo ($userArr[0]->interest9); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Field Of Special Interest 10</label>
                                                <input type="text" class="form-control" id="interest10" name="interest10" value="<?php echo ($userArr[0]->interest10); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Education 1</label>
                                                <input type="text" class="form-control" id="education1" name="education1" value="<?php echo ($userArr[0]->education1); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Education Description 1</label>
                                                <textarea class="form-control" id="Edescription1" name="Edescription1" rows="4"><?php echo ($userArr[0]->edDescription1); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Education 2</label>
                                                <input type="text" class="form-control" id="education2" name="education2" value="<?php echo ($userArr[0]->education2); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Education Description 2</label>
                                                <textarea class="form-control" id="Edescription2" name="Edescription2" rows="4"><?php echo ($userArr[0]->edDescription2); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Education 3</label>
                                                <input type="text" class="form-control" id="education3" name="education3" value="<?php echo ($userArr[0]->education3); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Education Description 3</label>
                                                <textarea class="form-control" id="Edescription3" name="Edescription3" rows="4"><?php echo ($userArr[0]->edDescription3); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Education 4</label>
                                                <input type="text" class="form-control" id="education4" name="education4" value="<?php echo ($userArr[0]->education4); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Education Description 4</label>
                                                <textarea class="form-control" id="Edescription4" name="Edescription4" rows="4"><?php echo ($userArr[0]->edDescription4); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Education 5</label>
                                                <input type="text" class="form-control" id="education5" name="education5" value="<?php echo ($userArr[0]->education5); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Education Description 5</label>
                                                <textarea class="form-control" id="Edescription5" name="Edescription5" rows="4"><?php echo ($userArr[0]->edDescription5); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Education 6</label>
                                                <input type="text" class="form-control" id="education6" name="education6" value="<?php echo ($userArr[0]->education6); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Education Description 6</label>
                                                <textarea class="form-control" id="Edescription6" name="Edescription6" rows="4"><?php echo ($userArr[0]->edDescription6); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience 1</label>
                                                <input type="text" class="form-control" id="experience1" name="experience1" value="<?php echo ($userArr[0]->experience1); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience Description 1</label>
                                                <textarea class="form-control" id="Exdescription1" name="Exdescription1" rows="4"><?php echo ($userArr[0]->expDescription1); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience 2</label>
                                                <input type="text" class="form-control" id="experience2" name="experience2" value="<?php echo ($userArr[0]->experience2); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience Description 2</label>
                                                <textarea class="form-control" id="Exdescription2" name="Exdescription2" rows="4"><?php echo ($userArr[0]->expDescription2); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience 3</label>
                                                <input type="text" class="form-control" id="experience3" name="experience3" value="<?php echo ($userArr[0]->experience3); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience Description 3</label>
                                                <textarea class="form-control" id="Exdescription3" name="Exdescription3" rows="4"><?php echo ($userArr[0]->expDescription3); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience 4</label>
                                                <input type="text" class="form-control" id="experience4" name="experience4" value="<?php echo ($userArr[0]->experience4); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience Description 4</label>
                                                <textarea class="form-control" id="Exdescription4" name="Exdescription4" rows="4"><?php echo ($userArr[0]->expDescription4); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience 5</label>
                                                <input type="text" class="form-control" id="experience5" name="experience5" value="<?php echo ($userArr[0]->experience5); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience Description 5</label>
                                                <textarea class="form-control" id="Exdescription5" name="Exdescription5" rows="4"><?php echo ($userArr[0]->expDescription5); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience 6</label>
                                                <input type="text" class="form-control" id="experience6" name="experience6" value="<?php echo ($userArr[0]->experience6); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience Description 6</label>
                                                <textarea class="form-control" id="Exdescription6" name="Exdescription6" rows="4"><?php echo ($userArr[0]->expDescription6); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience 7</label>
                                                <input type="text" class="form-control" id="experience7" name="experience7" value="<?php echo ($userArr[0]->experience7); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience Description 7</label>
                                                <textarea class="form-control" id="Exdescription7" name="Exdescription7" rows="4"><?php echo ($userArr[0]->expDescription7); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience 8</label>
                                                <input type="text" class="form-control" id="experience8" name="experience8" value="<?php echo ($userArr[0]->experience8); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience Description 8</label>
                                                <textarea class="form-control" id="Exdescription8" name="Exdescription8" rows="4"><?php echo ($userArr[0]->expDescription8); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience 9</label>
                                                <input type="text" class="form-control" id="experience9" name="experience9" value="<?php echo ($userArr[0]->experience9); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience Description 9</label>
                                                <textarea class="form-control" id="Exdescription9" name="Exdescription9" rows="4"><?php echo ($userArr[0]->expDescription9); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience 10</label>
                                                <input type="text" class="form-control" id="experience10" name="experience10" value="<?php echo ($userArr[0]->experience10); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Experience Description 10</label>
                                                <textarea class="form-control" id="Exdescription10" name="Exdescription10" rows="4"><?php echo ($userArr[0]->expDescription10); ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleTextarea1">Publications</label>
                                                <textarea id="publications" name="publications"><?php echo ($userArr[0]->publications); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funded Project Role 1</label>
                                                <input type="text" class="form-control" id="FundedProjectRole1" name="FundedProjectRole1" value="<?php echo ($userArr[0]->role1); ?>">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funded Project Name 1</label>
                                                <input type="text" class="form-control" id="projectName1" name="projectName1" value="<?php echo ($userArr[0]->project1); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funding Agency 1</label>
                                                <input type="text" class="form-control" id="FAgency1" name="FAgency1" value="<?php echo ($userArr[0]->agency1); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funded Project Role 2</label>
                                                <input type="text" class="form-control" id="FundedProjectRole2" name="FundedProjectRole2" value="<?php echo ($userArr[0]->role2); ?>">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funded Project Name 2</label>
                                                <input type="text" class="form-control" id="projectName2" name="projectName2" value="<?php echo ($userArr[0]->project2); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funding Agency 2</label>
                                                <input type="text" class="form-control" id="FAgency2" name="FAgency2" value="<?php echo ($userArr[0]->agency2); ?>">
                                            </div>
                                            <div class=" form-group">
                                                <label for="exampleTextarea1">Funded Project Role 3</label>
                                                <input type="text" class="form-control" id="FundedProjectRole3" name="FundedProjectRole3" value="<?php echo ($userArr[0]->role3); ?>">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funded Project Name 3</label>
                                                <input type="text" class="form-control" id="projectName3" name="projectName3" value="<?php echo ($userArr[0]->project3); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funding Agency 3</label>
                                                <input type="text" class="form-control" id="FAgency3" name="FAgency3" value="<?php echo ($userArr[0]->agency3); ?>">
                                            </div>
                                            <div class=" form-group">
                                                <label for="exampleTextarea1">Funded Project Role 4</label>
                                                <input type="text" class="form-control" id="FundedProjectRole4" name="FundedProjectRole4" value="<?php echo ($userArr[0]->role4); ?>">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funded Project Name 4</label>
                                                <input type="text" class="form-control" id="projectName4" name="projectName4" value="<?php echo ($userArr[0]->project4); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funding Agency 4</label>
                                                <input type="text" class="form-control" id="FAgency4" name="FAgency4" value="<?php echo ($userArr[0]->agency4); ?>">
                                            </div>
                                            <div class=" form-group">
                                                <label for="exampleTextarea1">Funded Project Role 5</label>
                                                <input type="text" class="form-control" id="FundedProjectRole5" name="FundedProjectRole5" value="<?php echo ($userArr[0]->role5); ?>">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funded Project Name 5</label>
                                                <input type="text" class="form-control" id="projectName5" name="projectName5" value="<?php echo ($userArr[0]->project5); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funding Agency 5</label>
                                                <input type="text" class="form-control" id="FAgency5" name="FAgency5" value="<?php echo ($userArr[0]->agency5); ?>">
                                            </div>
                                            <div class=" form-group">
                                                <label for="exampleTextarea1">Funded Project Role 6</label>
                                                <input type="text" class="form-control" id="FundedProjectRole6" name="FundedProjectRole6" value="<?php echo ($userArr[0]->role6); ?>">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funded Project Name 6</label>
                                                <input type="text" class="form-control" id="projectName6" name="projectName6" value="<?php echo ($userArr[0]->project6); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funding Agency 6</label>
                                                <input type="text" class="form-control" id="FAgency6" name="FAgency6" value="<?php echo ($userArr[0]->agency6); ?>">
                                            </div>
                                            <div class=" form-group">
                                                <label for="exampleTextarea1">Funded Project Role 7</label>
                                                <input type="text" class="form-control" id="FundedProjectRole7" name="FundedProjectRole7" value="<?php echo ($userArr[0]->role7); ?>">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funded Project Name 7</label>
                                                <input type="text" class="form-control" id="projectName7" name="projectName7" value="<?php echo ($userArr[0]->project7); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funding Agency 7</label>
                                                <input type="text" class="form-control" id="FAgency7" name="FAgency7" value="<?php echo ($userArr[0]->agency7); ?>">
                                            </div>
                                            <div class=" form-group">
                                                <label for="exampleTextarea1">Funded Project Role 8</label>
                                                <input type="text" class="form-control" id="FundedProjectRole8" name="FundedProjectRole8" value="<?php echo ($userArr[0]->role8); ?>">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funded Project Name 8</label>
                                                <input type="text" class="form-control" id="projectName8" name="projectName8" value="<?php echo ($userArr[0]->project8); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funding Agency 8</label>
                                                <input type="text" class="form-control" id="FAgency8" name="FAgency8" value="<?php echo ($userArr[0]->agency8); ?>">
                                            </div>
                                            <div class=" form-group">
                                                <label for="exampleTextarea1">Funded Project Role 9</label>
                                                <input type="text" class="form-control" id="FundedProjectRole9" name="FundedProjectRole9" value="<?php echo ($userArr[0]->role9); ?>">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funded Project Name 9</label>
                                                <input type="text" class="form-control" id="projectName9" name="projectName9" value="<?php echo ($userArr[0]->project9); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funding Agency 9</label>
                                                <input type="text" class="form-control" id="FAgency9" name="FAgency9" value="<?php echo ($userArr[0]->agency9); ?>">
                                            </div>
                                            <div class=" form-group">
                                                <label for="exampleTextarea1">Funded Project Role 10</label>
                                                <input type="text" class="form-control" id="FundedProjectRole10" name="FundedProjectRole10" value="<?php echo ($userArr[0]->role10); ?>">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funded Project Name 10</label>
                                                <input type="text" class="form-control" id="projectName10" name="projectName10" value="<?php echo ($userArr[0]->project10); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Funding Agency 10</label>
                                                <input type="text" class="form-control" id="FAgency10" name="FAgency10" value="<?php echo ($userArr[0]->agency10); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">More Funded Project ( PDF or Other Document
                                                    Link )</label>
                                                <input type="text" class="form-control" id="MoreFundedProjects" name="MoreFundedProjects" value="<?php echo ($userArr[0]->MoreFundedProjects); ?>">
                                            </div>
                                            <div class=" form-group">
                                                <label for="exampleTextarea1">Other Info</label>
                                                <textarea id="otherInfo" name="otherInfo"><?php echo ($userArr[0]->otherInfo); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Image(500x500px)</label>
                                                <input class="form-control" type="file" id="file" name="file" accept="image/gif, image/png, image/jpg, image/jpeg">
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2" name="studentslabEditBTN" id="studentslabEditBTN">Save</button>
                                            <button class="btn btn-light">Cancel</button>
                                        <?php
                                        }
                                        ?>
                                    </form>
                                    <script>
                                        CKEDITOR.replace('publications');
                                        CKEDITOR.replace('otherInfo');
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