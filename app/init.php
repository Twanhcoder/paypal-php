<?php
/* 
 INIT
 Basic configuration settings
 */
//connect to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbName = 'web_store';
$port = 8889;

$Database = mysqli_connect($servername, $username, $password, $dbName, $port);



// error reporting

mysqli_report(MYSQLI_REPORT_ERROR);
ini_set('display_errors', 1);

// set up constants
define('SITE_NAME', 'My Online Store');
define('SITE_PATH', 'http://localhost:8888/');
define('IMAGE_PATH', 'resources/images/');
