<!doctype html>
<html>
<head>
	<title>Twitter Search Results</title>
	<link rel="stylesheet" href="<?php echo URL::to_asset('css/default.css') ?>">
	<!-- The above is connecting to the css stylesheet-->
</head>
<body>
	<p>You searched for: <stan id='username'><?php echo $search_term ?></stan></p>
	<div id="container">
		<div id="results">
			<?php
				foreach($results as $tweet) {
					echo '<li>' . $tweet->text . '</li><br>';
					
				}
			?>
		</div>
	</div>


</body>
</html>