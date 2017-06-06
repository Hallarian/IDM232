<?php
  $host = $_SERVER['HTTP_HOST'];

  // Step 1: Setup database connection

  if ($host == 'localhost:8888') {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "whodunnit_database";
  } else {
    $dbhost = "localhost";
    $dbuser = "masscom6_whodunn";
    $dbpass = "murderMystery__2017";
    $dbname = "masscom6_whodunnit";
  }

  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if (mysqli_connect_errno()) {
    die("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }
?>
