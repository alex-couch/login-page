<?php
	require('info.php');
?>

<html>
	<head>
		<title>Welcome!</title>
		<style type="text/css">
			.error{
				color: red;
			}
			
			.login{
				text-align: center;
				color: blue;
			}
			input[type="submit"]{
				background-color: black;
				color: white;
				padding: 5px;
				border-radius: 15px;
			}
		</style>
		<script type="text/javascript">
			
		</script>
	</head>
	<body>
		<div class="login">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<label>Name:</label>
				<span class="error">* <?php echo $nameerror; ?></span>
				<br>
				<input type="text" name="username" placeholder="Name"><br>
				<input type="submit" name="submit">
			</form>
		</div>
	</body>
</html>