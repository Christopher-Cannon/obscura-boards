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
	    <div class="wrapper-catalog">
				<header class="wrapper-catalog-header">
					<h1 class="center">ObscuraBoards</h1>

					<form class="form-general" name="create_thread_form" onsubmit="return post_validation();"  method="POST" action="php/add_thread.php" enctype="multipart/form-data">
						<header class="form-general-header center">
							<a href="#" class="link-general" id="form_toggle_button"><h2>Create a new thread</h2></a>
						</header>

						<div class="hide-large hide-mobile" id="form_toggle">
							<label>Subject</label>
							<input name="thread_subject" type="text" />

							<label>Name</label>
							<input name="thread_name" type="text" />

							<label>Comment</label><span class="form-error" id="thread-form-error"></span>
							<textarea name="thread_body"></textarea>

							<label>File</label>
							<input name="thread_file" id="post_file" type="file" />

							<input name="thread_submit" type="submit" value="Submit" />
						</div>
					</form>
				</header>

				<div class="wrapper-threads">
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/14.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/15.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Thread subject</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/16.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Help</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here Some text goes in here Some text goes in here Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/17.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Nothing here</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/14.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/15.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Thread subject</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/17.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Nothing here</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here aa</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/14.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here aaa</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/15.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Thread subject</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/16.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Help</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here Some text goes in here Some text goes in here Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/14.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/15.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Thread subject</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here aaaa</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/16.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Help</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here Some text goes in here Some text goes in here Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/17.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Nothing here</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/14.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/15.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Thread subject</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/16.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Help</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here Some text goes in here Some text goes in here Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/17.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Nothing here</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/16.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Help</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here Some text goes in here Some text goes in here Some text goes in here</p>
						</div>
					</div>
					<div class="thread">
						<div class="thread-image">
							<a href="#"><img src="img/17.jpg" /></a>
						</div>
						<div class="thread-stats">
							<p class="bold">R:32 / I:12</p>
						</div>
						<div class="thread-subject bold">
							<p>Nothing here</p>
						</div>
						<div class="thread-body">
							<p>Some text goes in here</p>
						</div>
					</div>
				</div>
	    </div>
		</div>

		<script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/reveal.js"></script>
  </body>
</html>
