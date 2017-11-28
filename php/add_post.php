<?php
$post_name = $post_body = $form_error = "";
$upload_error = false;

// Remove unnecessary chars, slashes and sanitise special characters
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function human_filesize($bytes, $decimals = 2) {
  $sz = 'BKMGTP';
  $factor = floor((strlen($bytes) - 1) / 3);
  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
}
// If we get post data from a form
if(($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST["post_submit"]))) {
  // Validate post name
	if(empty($_POST["post_name"])) {
    // Default name is Anonymous
		$post_name = "Anonymous";
	} else {
		$post_name = test_input($_POST["post_name"]);
	}
  // Validate post body, but only if either a post body or an image exists
	if(empty($_POST["post_body"]) && (!file_exists($_FILES['post_file']['tmp_name']) || !is_uploaded_file($_FILES['post_file']['tmp_name']))) {
		$form_error = "Need either a comment or an image";
	} else {
		$post_body = test_input($_POST["post_body"]);
	}
  // Validate image, if one was given
  if(file_exists($_FILES['post_file']['tmp_name']) || is_uploaded_file($_FILES['post_file']['tmp_name'])) {
    $target_dir = "../img_temp/";
    $file_name = basename($_FILES["post_file"]["name"]);
    $target_file = $target_dir . $file_name;
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // FIND A BETTER ALTERNATIVE TO CHECKING IF IMAGE IS VALID -----------------
    $check = getimagesize($_FILES["post_file"]["tmp_name"]);

    // Error if we can't get the image size
    if($check === false) {
      $upload_error = true;
    }

    if(file_exists($target_file)) {
      $upload_error = true;
    }

    if($_FILES["post_file"]["size"] > 2000000) {
      $upload_error = true;
    }

    if($image_file_type != "jpg" && $image_file_type != "jpeg"
    && $image_file_type != "png" && $image_file_type != "gif") {
      $upload_error = true;
    }
  }
  // If input passes server validation
  if($form_error == "" && $upload_error == false) {
    // Connect to the database
    require "../includes/db_connect.php";

    // Get the current time according to the UTC time zone
    date_default_timezone_set("UTC");
    $post_time = date("d/m/y(D) H:i:s");

    // TEMPORARY THREAD ID -----------------------------------------------------
    $thread_id = 201;

    // Insert data into posts table
    if(file_exists($_FILES['post_file']['tmp_name']) || is_uploaded_file($_FILES['post_file']['tmp_name'])) {
      echo "PASSED";
      // Place image in folder
      move_uploaded_file($_FILES["post_file"]["tmp_name"], $target_file);

      // Get next image_id
      $sql = "SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'images'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      $image_id = $row['auto_increment'];

      // New file name and path, latter for the images table
      $image_rename = $image_id . '.' . $image_file_type;
      $image_path_new = "../img/" . $image_rename;
      $image_path_param = "http://localhost/ObscuraBoards/img/" . $image_rename;

      // Get file size
      $file_size_temp = filesize($target_file);
      $file_size = human_filesize($file_size_temp);

      // Get file dimensions
      $file_info = getimagesize($target_file);
      $file_dimensions = $file_info[0] . "x" . $file_info[1];

      // Add image data to images table
      $stmt = $conn->prepare("INSERT INTO `images` (image_name, image_size, image_dim, image_path) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $file_name, $file_size, $file_dimensions, $image_path_param);
      $stmt->execute();
      $stmt->close();

      // Change name of file to image_id
      rename($target_file, $target_dir . $image_rename);

      // Move to images folder
      copy($target_dir . $image_rename, $image_path_new);

      // Delete temp file
      unlink($target_dir . $image_rename);

      $stmt = $conn->prepare("INSERT INTO `posts` (thread_id, image_id, post_name, post_time, post_body) VALUES (?, ?, ?, ?, ?)");
      $stmt->bind_param("iisss", $thread_id, $image_id, $post_name, $post_time, $post_body);
    } else {
      $stmt = $conn->prepare("INSERT INTO `posts` (thread_id, post_name, post_time, post_body) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("isss", $thread_id, $post_name, $post_time, $post_body);
    }

    $stmt->execute();
    $stmt->close();

    // Close the connection
    $conn->close();

    // Return to thread
    header("Location: ../index.php");
  } else {
    echo $form_error;
  }
}
?>
