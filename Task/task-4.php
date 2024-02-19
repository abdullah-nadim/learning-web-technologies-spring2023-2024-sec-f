<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 4</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset style="width:15%">
            <legend>Gender</legend>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other<hr>
			<input type="submit" name="submit" value="Submit" />
			
			
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$message = "";

					if (empty($_POST["gender"])) {
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