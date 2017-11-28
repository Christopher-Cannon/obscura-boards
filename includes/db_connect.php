<?php
  require "credentials.php";

  // Connect to database
  $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>
