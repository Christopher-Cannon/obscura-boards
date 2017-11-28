<!doctype html>

<html>
	<head>
		<title>ObscuraBoards</title>

		<meta charset="UTF-8">

		<link href="https://fonts.googleapis.com/css?family=Rubik:400,600" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/override.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>

	<body>
		<div class="wrapper-page">
			<div class="wrapper-general">
				<header class="wrapper-posts-header">
					<h1 class="center">ObscuraBoards</h1>

					<form class="form-general" name="create_post_form" onsubmit="return post_validation();"  method="POST" action="php/add_post.php" enctype="multipart/form-data">
						<header class="form-general-header center">
							<a href="#" class="link-general" id="form_toggle_button"><h2>Post a reply</h2></a>
						</header>

						<div class="hide-large hide-mobile" id="form_toggle">
							<label>Name</label>
							<input name="post_name" type="text" />

							<label>Comment</label><span class="form-error" id="post-form-error"></span>
							<textarea name="post_body"></textarea>

							<label>File</label>
							<input name="post_file" id="post_file" type="file" />

							<input name="post_submit" type="submit" value="Submit" />
						</div>
					</form>

					<div class="posts-thread-subject center">
						<h3>A thread about something</h3>
					</div>
				</header>

				<div class="wrapper-posts">
					<?php
						require "includes/db_connect.php";

						$sql = "SELECT * FROM `posts`";
						$result = $conn->query($sql);

						if($result) {
							while($row = $result->fetch_assoc()) {
								// Insert newlines correctly
								$post_body = $row['post_body'];
								$image_id = 0;

								if($post_body != "") {
									$post_body = nl2br($row['post_body']);
								}

								if(isset($row["image_id"])) {
									$image_id = $row["image_id"];

									$sql = "SELECT * from images WHERE image_id=$image_id";
									$img_result = $conn->query($sql);
									$img_row = $img_result->fetch_assoc();
								}

								include "includes/post.php";
							}
						}

						$conn->close();
					?>
				</div>
			</div>
		</div>

		<script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/reveal.js"></script>
		<script type="text/javascript" src="js/validation.js"></script>
	</body>
</html>
