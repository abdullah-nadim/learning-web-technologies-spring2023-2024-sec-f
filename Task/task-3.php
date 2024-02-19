<html lang="en">
<head>
    <title>Task 4</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset style="width:10%">
            <legend>Date of Birth</legend>
            dd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yyyy <br>
            <input type="text" name="day" size="1px" value="day"> / 
            <input type="text" name="month" size="1px" value="month"> / 
            <input type="text" name="year" size="1px" value="year">
            <hr width="150px"  align="left">
            <input type="submit" name="submit" value="Submit" />
			
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$day = $_POST["day"];
					$month = $_POST["month"];
					$year = $_POST["year"];
					$error = "";

					if (empty($day) || empty($month) || empty($year)) {
						$error = "Please fill all the fields";
					} elseif (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
						$error = "Day, month, and year must be valid numbers.";
					} elseif ($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 1953 || $year > 1998) {
						$error = "Invalid date. Please follow the validation rules.";
					} else {
						$error = "Submitted successfully.";
					}

					if ($error) {
						echo "<script>alert('$error');</script>";
					} else {
						echo "<script>alert('Form submitted successfully!');</script>";
					}
				}
			?>
			
			
        </fieldset><br>
    </form>
</body>
</html>