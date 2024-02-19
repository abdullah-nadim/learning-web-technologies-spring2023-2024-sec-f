<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 3</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset style="width:15%">
            <legend>Gender</legend>
            <input type="radio" name="gender" value=""> Male
            <input type="radio" name="gender" value=""> Female
            <input type="radio" name="gender" value=""> Other<hr>
			<input type="submit" name="submit" value="Submit" />
			
			
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$gender = $_POST["gender"];
					$message = "";

					if (empty($gender)) {
						$message = "Please select your gender";
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