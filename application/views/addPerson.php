<!doctype html>
<html>
<head>
	<title>Twitter Add App</title>
</head>
<body>
	<div id="container">
		<h1>Twitter Person Add Page</h1>
		<form action="<?php echo URL::to('twitter/add_Person') ?>" method="get">
			Username: <input type="text" name="username">
			Real Name: <input type="text" name="realname">
			<input type="submit" value="Add">
		</form>
	
	</div>

</body>
</html>