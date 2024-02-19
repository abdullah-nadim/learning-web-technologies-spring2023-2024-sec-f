<html >
<head>
    <title>Task 2</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<fieldset style="width:0px">
			<legend>Email </legend> 
			<input type="email" name="email" value="email" /> <hr>
			<input type="submit" name="submit" value="Submit" />
			
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$email = $_POST["email"];
					$message = "";

					if (empty($email)) {
						$message = "Name cannot be empty.";
					}
					elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$message = "Invalid email format.";
					}
					if ($message) {
						echo "<script>alert('$message');</script>";
					} else {
						echo "<script>alert('Form submitted successfully!');</script>";
					}
				}
			?>
					
		</fieldset>
    </form>
</body>
</html>