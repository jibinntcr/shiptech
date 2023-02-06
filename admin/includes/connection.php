<?php
include 'config.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>