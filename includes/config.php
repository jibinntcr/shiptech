<?php

// DB credentials.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'shiptech');
//echo "connecdted ";
// Establish database connection.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $image_url = '../uploads/';
    $image_url_user = 'uploads/';
    $emailusername = '';
    $emailpassword = '';
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
//echo "connecdted ";